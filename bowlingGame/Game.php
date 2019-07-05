<?php
namespace BowlingGame;
/**
 *
 */
class Game {

   public $totalPins = 0;

   public function __construct() {

   }

    /**
     * @var integer
     */
   public function  roll( $pins ) {
        $this->totalPins += $pins;
   }

   public function score() {
       return $this->totalPins;
   }

}