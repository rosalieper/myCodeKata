<?php

require_once 'Game.php';

use BowlingGame\Game;

/**
 * Class BowlingGameTest
 */

class BowlingGameTest extends PHPUnit\Framework\TestCase {

    protected $g;

    public function setUp() {
        $this->g = new Game();
    }

    /**
     * @throws Exception
     */
    public function testGutterGame() {
        for( $i = 0; $i < 20; $i++ ) {
            $this->g->roll(0);
        }
        $this->assertEquals( 0, $this->g->score() );
    }

    public function testAllOnes() {
        for( $i = 0; $i < 20; $i++ ) {
           $this->g->roll(1);
        }
        $this->assertEquals( 20, $this->g->score() );
    }
}