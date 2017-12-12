<?php

namespace HTL3R\FlagStore\FlagTypes;

use HTL3R\FlagStore\Interfaces\FlagInterface as FlagInterface;

/**
 * Class TriangleFlag
 * @package HTL3R\FlagStore
 *
 * A triangular flag with according calculation of the area
 */
class TriangleFlag extends AbstractFlag implements FlagInterface
{
    public function getArea() : float
    {
        // same-sided triangle area according to 4BI
        return (($this->width*$this->width)/4)*sqrt(3);
    }
}