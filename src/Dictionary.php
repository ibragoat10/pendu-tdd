<?php
namespace Pendu;

class Dictionary {
    private array $words;

    public function __construct(array $words) {
        $this->words = array_filter($words, function($word) {
            return ctype_alpha($word);
        });
        $this->words = array_map('strtolower', $this->words);
    }

    public function getRandomWord(): string {
        if (empty($this->words)) {
            throw new \Exception("Le dictionnaire ne contient aucun mot valide.");
        }
        $index = array_rand($this->words);
        return $this->words[$index]; 
    }
}