<?php

namespace ChristmassLight;

/**
 * Class ChristmassLight
 * @package ChristmassLight
 */
class ChristmassLight {

    /**
     * @var array
     */
    private $lights;

    /**
     * @return array
     */
    public function makeLights() {
        for ( $i = 0; $i < 1000; $i++ ) {
            for ( $j = 0; $j < 1000; $j++ ) {
                $this->lights[$i][$j] = 0;
            }
        }
        return $this->lights;
    }

    /**
     * @return array
     */
    public function turnOnLights() {
        for ( $i = 0; $i < 1000; $i++ ) {
            for ( $j = 0; $j < 1000; $j++ ) {
                $this->lights[$i][$j] = 1;
            }
        }
        return $this->lights;
    }
}

$x = new ChristmassLight();
