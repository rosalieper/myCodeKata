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
           if ( ( $this->rolls[$i] + $this->rolls[$i+1] ) === 10 ) {
               $score += 10 + $this->rolls[$i+2]; //spare
           } else {
               $score += $this->rolls[$i] + $this->rolls[$i+1];
           }
           $i += 2;
       }

       return $score;
   }

}