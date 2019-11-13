<?php

require_once "ChristmassLight.php";

use ChristmassLight\ChristmassLight;

class ChristmassLightTest extends PHPUnit\Framework\TestCase {

    /**
     * @var ChristmassLight
     */
    private $christmasLight;

    public function setUp(){
        $this->christmasLight = new ChristmassLight();
    }

    public function testMakeLights() {
        $actualLights = $this->christmasLight->makeLights();

        for ( $i = 0; $i < 1000; $i++ ) {
            for ( $j = 0; $j < 1000; $j++ ) {
                $expectedLights[$i][$j] = 0;
            }
        }

        $this->assertEquals( $actualLights, $expectedLights );
    }

    public function testTurnOnLights() {

        for ( $i = 0; $i < 1000; $i++ ) {
            for ( $j = 0; $j < 1000; $j++ ) {
                $expectedLightArray[$i][$j] = 1;
            }
        }

        $actualLightArray = $this->christmasLight->turnOnLights();

        $this->assertEquals( $expectedLightArray, $actualLightArray, "All lights are on" );
    }

    /**
     * function takes the coordinate of the light line to toggle in the form: from (xx, xy) to (yx, yy)
     * @param $xx
     * @param $xy
     * @param $yx
     * @param $yy
     */
    public function testToggleLights( $xx, $xy, $yx, $yy ) {
        for ( $i = $xx; $i < $xy; $i++ ) {
            for ( $j = $yx; $j < $yy; $j++ ) {
                $expectedLightArray[$i][$j] = 1;
            }
        }
    }

}
