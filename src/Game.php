<?php
namespace Pendu;

class Game {
    private string $word;
    private array $guessedLetters = [];
    private int $remainingAttempts;

    public function __construct(string $word, int $maxAttempts = 7) {
        $this->word = strtolower($word);
        $this->remainingAttempts = $maxAttempts;
    }

    public function guess(string $letter): void {
        if ($this->isWon() || $this->isLost()) {
            return;
        }

        $letter = strtolower($letter);
        if (in_array($letter, $this->guessedLetters)) {
            return;
        }

        $this->guessedLetters[] = $letter;

        if (strpos($this->word, $letter) === false) {
            $this->remainingAttempts--;
        }
    }

    public function isWon(): bool {
        return $this->getRenderedWord() === $this->word;
    }

    public function isLost(): bool {
        return $this->remainingAttempts <= 0;
    }

    public function getRemainingAttempts(): int {
        return $this->remainingAttempts;
    }

    public function getRenderedWord(): string {
        $display = '';
        foreach (str_split($this->word) as $char) {
            $display .= in_array($char, $this->guessedLetters) ? $char : '-';
        }
        return $display;
    }
}