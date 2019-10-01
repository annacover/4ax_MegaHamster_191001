<?php
require_once 'Room.php';

class Oktagon extends room
{

    protected $seitenlaenge;

    /**
     * hexagon constructor.
     * @param $sidelength
     *
     */
    public function __construct(string $name, float $price, string $equipment, float $sidelength)
    {
        parent::__construct($name, $price, $equipment);
        $this->seitenlaenge = $sidelength;
    }

    /**
     * @return float
     */
    public function getSizes()
    {
        return $this->seitenlaenge . ' cm';
    }

    public function getArea(): float
    {
        return ($this->seitenlaenge ** 2) * (2 * sqrt(2));
    }


}
