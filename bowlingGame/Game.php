<?php
namespace BowlingGame;
/**
 * Class Game
 * @package BowlingGame
 */
class Game {

   private $rolls = [];
   private $currentRoll = 0;

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
       $i = 0;
       for ( $frame = 0; $frame < 10; $frame++ ) {
           if ( $this->isSpare( $frame ) ) {
               $score += 10 + $this->rolls[$i+2];
           } else {
               $score += $this->rolls[$i] + $this->rolls[$i+1];
           }
           $i += 2;
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

}