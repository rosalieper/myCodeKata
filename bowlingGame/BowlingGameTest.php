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

    public function rollMany($totalNumRoll, $numPinsDown ){
        for( $i = 0; $i < $totalNumRoll; $i++ ) {
            $this->g->roll($numPinsDown);
        }
    }

    /**
     * @throws Exception
     */
    public function testGutterGame() {
        $this->rollMany(20, 0);
        $this->assertEquals( 0, $this->g->score() );
    }

    /**
     * @throws Exception
     */
    public function testAllOnes() {
        $this->rollMany(20, 1);
        $this->assertEquals( 20, $this->g->score() );
    }
}
