<?php
namespace Annacover\Megahamster\AbstractClasses;

class SquareFromAbstract extends AbstractRoom
{
    protected $length;
    protected $width;
    protected $height;

    public function __construct(string $name, string $price, string $equipment, float $length, float $width, float $height)
    {
        parent::__construct($name, $price, $equipment);
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
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

    public function __toString()
    {
        return $this->getName() . " " . $this->getPrice();
    }
    public function getArea()
    {
        return $this->width * $this->length;
    }

    public function toHTML()
    {
        $name = $this->getName();
        $price = $this->getPrice();
        $equipment = $this->getEquipment();
        $length = $this->getLength();
        $width = $this->getWidth();
        $area = $this->getArea();
        return  <<<ENDE
             <div class = "products" style="border-style: solid">
            <h1>$name</h1>
            <p> EUR $price</p>
            <p>Special Equipment:<br>
            $equipment</p>
            <p> Länge: $length und Breite: $width</p>
            <p>Fläche: $area</p>
            </div>
ENDE;
    }


}