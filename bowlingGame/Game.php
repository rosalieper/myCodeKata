<?php
namespace BowlingGame;
/**
 * Class Game
 * @package BowlingGame
 */
class Game {
    /**
     * @var array
     */
   private $rolls = [];
    /**
     * @var int
     */
   private $currentRoll = 0;

    /**
     * Game constructor.
     */
   public function __construct() {

   }

   /**
    * @var integer
    */
   public function  roll( $pins ) {
        $this->rolls[ $this->currentRoll++ ] = $pins;
   }

   /**
    * @return int|mixed
    */
   public function score() {
       $score = 0;
       $frameIndex = 0;
       for ( $frame = 0; $frame < 10; $frame++ ) {
           if ( $this->isSpare( $frame ) ) {
               $score += 10 + $this->rolls[$frameIndex+2];
               $frameIndex += 2;
           } elseif ( $this->isStrike( $frame ) ) {
               $score += 10 + $this->rolls[$frameIndex + 1] + $this->rolls[$frameIndex+2];
               $frameIndex++;
           } else {
               $score += $this->rolls[$frameIndex] + $this->rolls[$frameIndex+1];
               $frameIndex += 2;
           }
       }

       return $score;
   }

    /**
     * @param $frameIndex
     * @return bool
     */
   public function isSpare( $frameIndex ) {
       return ( $this->rolls[$frameIndex] + $this->rolls[$frameIndex+1] ) === 10;
   }

    /**
     * @param $frameIndex
     * @return bool
     */
   public function isStrike( $frameIndex ) {
       return $this->rolls[$frameIndex] === 10;
   }

}