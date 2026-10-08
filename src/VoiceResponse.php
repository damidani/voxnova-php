<?php

declare(strict_types=1);

namespace VoxNova;

/**
 * Instructions vocales (dial plan en code) : votre webhook répond par une liste JSON d'instructions,
 * construite avec VoiceResponse.
 *
 *   $r = (new VoiceResponse())
 *       ->play('https://exemple.fr/accueil.mp3')
 *       ->gather(['numDigits' => 1, 'timeout' => 6, 'action' => 'https://exemple.fr/menu']);
 *   $r->send(); // en-tête JSON + corps
 */
final class VoiceResponse implements \JsonSerializable
{
    /** @var list<array<string, mixed>> */
    private array $verbs = [];

    /** @param array<string, mixed> $data */
    private function push(string $verb, array $data = []): self
    {
        $this->verbs[] = ['verb' => $verb] + array_filter($data, static fn ($v) => $v !== null);
        return $this;
    }

    public function answer(): self
    {
        return $this->push('answer');
    }

    /**
     * Joue un fichier audio.
     * @param string|array{url?: string, audioId?: string, sound?: string} $source URL (MP3, WAV, AAC…), ou fichier envoyé / son intégré
     */
    public function play(string|array $source, ?int $loop = null): self
    {
        return $this->push('play', (is_string($source) ? ['url' => $source] : $source) + ['loop' => $loop]);
    }

    /** Prononce un nombre (« quarante-deux ») ou ses chiffres un par un ($as = 'digits') ; langue 'fr' (défaut) ou 'en'. */
    public function say(string|int $value, ?string $as = null, ?string $language = null): self
    {
        return $this->push('say', ['value' => (string) $value, 'as' => $as, 'language' => $language]);
    }

    public function pause(int $seconds = 1): self
    {
        return $this->push('pause', ['seconds' => $seconds]);
    }

    /** Variables de l'appel, renvoyées dans chaque webhook (« vars »). @param array<string, string|int|bool> $vars */
    public function set(array $vars): self
    {
        return $this->push('set', ['vars' => $vars]);
    }

    /**
     * Saisie de touches. Options : numDigits | minDigits / maxDigits, timeout, interDigitTimeout,
     * finishOnKey ('#', '*' ou '' pour aucune), tries, url / audioId / sound (annonce), action (URL rappelée avec « digits »).
     * @param array<string, mixed> $options
     */
    public function gather(array $options = []): self
    {
        return $this->push('gather', $options);
    }

    /**
     * Enregistrement. Options : maxSeconds, silenceSeconds, beep, finishOnKey, action (rappel avec « recording »).
     * @param array<string, mixed> $options
     */
    public function record(array $options = []): self
    {
        return $this->push('record', $options);
    }

    /**
     * Appelle un endpoint (['endpoint' => '1000']), un numéro (['number' => '0612345678']) ou plusieurs
     * destinations (liste). Options : timeout, callerId, strategy ('simultaneous' | 'sequential'), record, action.
     * @param array<string, string>|list<array<string, string>> $target
     * @param array<string, mixed> $options
     */
    public function dial(array $target, array $options = []): self
    {
        return $this->push('dial', (array_is_list($target) ? ['targets' => $target] : $target) + $options);
    }

    /** Redemande des instructions à une autre URL. */
    public function redirect(string $url): self
    {
        return $this->push('redirect', ['url' => $url]);
    }

    /** File d'attente (identifiant ou numéro interne). */
    public function queue(string $queue): self
    {
        return $this->push('queue', ['queue' => $queue]);
    }

    /** Conférence nommée. Options : muted, moderator, endOnExit, waitForModerator, beep. @param array<string, bool> $options */
    public function conference(string $name, array $options = []): self
    {
        return $this->push('conference', ['name' => $name] + $options);
    }

    /** Messagerie vocale d'un endpoint. */
    public function voicemail(string $endpoint): self
    {
        return $this->push('voicemail', ['endpoint' => $endpoint]);
    }

    /** Transfert vers un numéro interne (poste, groupe, standard vocal…) ou externe. */
    public function transfer(string $to): self
    {
        return $this->push('transfer', ['to' => $to]);
    }

    public function hangup(?string $cause = null): self
    {
        return $this->push('hangup', ['cause' => $cause]);
    }

    /** @return list<array<string, mixed>> */
    public function toArray(): array
    {
        return $this->verbs;
    }

    /** @return list<array<string, mixed>> */
    public function jsonSerialize(): array
    {
        return $this->verbs;
    }

    public function toJson(): string
    {
        return json_encode($this->verbs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    /** Envoie la réponse HTTP (Content-Type JSON). */
    public function send(): void
    {
        if (!headers_sent()) {
            header('Content-Type: application/json; charset=utf-8');
        }
        echo $this->toJson();
    }
}
