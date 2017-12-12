<?php

namespace HTL3R\FlagStore\FlagTypes;

/**
 * Class Flag
 * @package HTL3R\FlagStore
 * Abstract class which provides a base for flags which have to calculate their area independently
 */
abstract class AbstractFlag
{
    /* private:     only the same class may access
       public:      everybody may access
       protected:   only same and inheriting classes may access */

    /* @var string */
    protected $name;

    /* @var string */
    protected $color;

    /* @var float */
    protected $width;

    /* @var float */
    protected $height;

    /* @var price */
    protected $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Flag constructor.
     * @param string $name Name of the flag
     * @param string $color Color of the flag
     * @param float $width Width of the flag in meter
     * @param float $height Height of the flag in meter
     * @param float $price Price in Euro
     */
    public function __construct(string $name, string $color, float $width, float $height, float $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
    }

    /**
     * @return string
     *
     * Allows instances of this class to output info about themselves via "echo" or "print"
     */
    public function __toString() : string
    {
        // $area = $this->getArea();
        //Area: $area<br />
        $rv = <<<EOT
        Name: $this->name<br />
        Width: $this->width<br />
        Height: $this->height<br />        
        Price: $this->price<br />
EOT;
        return $rv;
    }

}