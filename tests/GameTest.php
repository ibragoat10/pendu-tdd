<?php
use PHPUnit\Framework\TestCase;
use Pendu\Game;

class GameTest extends TestCase {
    public function test_le_mot_est_initialement_masque_par_des_tirets() {
        $game = new Game('code');
        $this->assertEquals('----', $game->getRenderedWord());
    }

    public function test_une_lettre_correcte_est_revelee() {
    $game = new \Pendu\Game('code');
    $game->guess('o');
    $this->assertEquals('-o--', $game->getRenderedWord());
}

public function test_le_nombre_de_tentatives_diminue_en_cas_d_erreur() {
    $game = new \Pendu\Game('code');
    $game->guess('c');
    $this->assertEquals(7, $game->getRemainingAttempts());
    $game->guess('z');
    $this->assertEquals(6, $game->getRemainingAttempts());
}
public function test_le_joueur_gagne_quand_toutes_les_lettres_sont_trouvees() {
    $game = new \Pendu\Game('os');
    $game->guess('o');
    $game->guess('s');

    $this->assertTrue($game->isWon());
    $this->assertFalse($game->isLost());
}

public function test_le_joueur_perd_quand_les_tentatives_atteignent_zero() {
    $game = new \Pendu\Game('code', 1);
    $game->guess('z');

    $this->assertTrue($game->isLost());
    $this->assertFalse($game->isWon());
}
}