<?php
use PHPUnit\Framework\TestCase;
use Pendu\Dictionary;

class DictionaryTest extends TestCase {
    public function test_il_selectionne_un_mot_aleatoirement() {
        $liste = ['pomme', 'banane', 'orange'];
        $dict = new Dictionary($liste);
        $this->assertContains($dict->getRandomWord(), $liste); 
    }

    public function test_le_mot_doit_etre_en_minuscules_et_alphabetique() {
        $dict = new Dictionary(['Bravo123', 'correct']); 
        $mot = $dict->getRandomWord();
        
        $this->assertEquals('correct', $mot);
        $this->assertTrue(ctype_alpha($mot));
        $this->assertEquals(strtolower($mot), $mot);
    }
}