<?php

class Room
{
    protected $name;
    protected $price;
    protected $equipment;

    public function __construct($name, $price, $equipment)
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

    public function __toString()
    {
        return $this->getName() . " " . $this->getPrice();
    }

    public function toHTML()
    {
        $name = $this->getName();
        $price = $this->getPrice();
        $equipment = $this->getEquipment();
        return  <<<ENDE
             <div class = "products" style="border-style: solid">
            <h1>$name</h1>
            <p> EUR $price</p>
            <p>Special Equipment:<br>
            $equipment</p>
            </div>
ENDE;
    }
}