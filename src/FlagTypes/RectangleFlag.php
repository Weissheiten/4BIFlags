<?php

namespace HTL3R\Flags\FlagTypes;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;

/**
 * Class RectangleFlag
 * @package HTL3R\FlagStore
 *
 * A rectangular flag with according calculation of the area
 */
class RectangleFlag extends AbstractFlag implements FlagInterface
{
    public function getArea() : float
    {
        return $this->width*$this->height;
    }
}
