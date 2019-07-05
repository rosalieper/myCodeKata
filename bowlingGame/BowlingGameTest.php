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

    public function rollMany($numRoll, $numPinsPerRoll ){
        for($i = 0; $i < $numRoll; $i++ ) {
            $this->g->roll($numPinsPerRoll);
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

    public function testOneSpare() {
        $this->g->roll(5);
        $this->g->roll(5);
        $this->g->roll(3);
        $this->rollMany(17, 0);

        $this->assertEquals(16, $this->g->score() );
    }
}
