<?php

require_once 'Game.php';

use BowlingGame\Game;

/**
 * Class BowlingGameTest
 */

class BowlingGameTest extends PHPUnit\Framework\TestCase {
    /**
     * @var
     */
    protected $g;

    /**
     *
     */
    public function setUp() {
        $this->g = new Game();
    }

    /**
     * @param int
     * @param int
     */
    public function rollMany( $numRoll, $numPinsPerRoll ){
        for($i = 0; $i < $numRoll; $i++ ) {
            $this->g->roll($numPinsPerRoll);
        }
    }

    /**
     * Makes a spare game
     */
    public function rollSpare() {
        $this->g->roll(5);
        $this->g->roll(5);
    }

    /**
     * Make a strike game
     */
    public function rollStrike() {
        $this->g->roll(10);
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

    /**
     *Make a spare game out of 20 rolls
     */
    public function testOneSpare() {
        $this->rollSpare();
        $this->g->roll(3);
        $this->rollMany(17, 0);

        $this->assertEquals(16, $this->g->score() );
    }

    /**
     *Make a strike out of 20 rolls
     */
    public function testOneStrike() {
        $this->rollStrike();
        $this->g->roll(3);
        $this->g->roll(4);
        $this->rollMany(16, 0);

        $this->assertEquals(24, $this->g->score() );
    }

}
