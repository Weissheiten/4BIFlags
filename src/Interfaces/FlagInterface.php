<?php

namespace HTL3R\Flags\Interfaces;

/**
* Interface FlagInterface
* @package HTL3R\FlagStore
*
* Defines which methods are mandatory to be provided by classes which implement this interface
*/
interface FlagInterface
{
    /**
    * @return float Returns the area in square-meter
    */
    public function getArea() : float;

    /**
     * @return string Outputs the flag information as string
     */
    public function __toString() : string;

}