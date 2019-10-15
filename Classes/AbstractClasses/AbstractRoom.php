<?php
namespace Annacover\Megahamster\AbstractClasses;

abstract class AbstractRoom
{
    protected $name;
    protected $price;
    protected $equipment;

    function __construct(string $name, float $price, string $equipment)
    {
        $this->name = $name;
        $this->price = $price;
        $this->equipment = $equipment;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    abstract public function __toString();
    abstract public function toHTML();
    abstract public function getArea();
}