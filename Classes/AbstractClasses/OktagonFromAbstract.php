<?php
namespace Annacover\Megahamster\AbstractClasses;

class OktagonFromAbstract extends AbstractRoom implements \JsonSerializable
{
    protected $seitenlaenge;
    public function __construct(string $name, float $price, string $equipment, float $seitenlaenge)
    {
        parent::__construct($name, $price, $equipment);
        $this->seitenlaenge = $seitenlaenge;
    }
    public function __toString()
    {
        return $this->getName() . " " . $this->getPrice();
    }

    /**
     * @return float
     */
    public function getSeitenlaenge(): float
    {
        return $this->seitenlaenge;
    }

    public function getArea()
    {
        return ($this->seitenlaenge ** 2) * (2 * sqrt(2));
    }


    public function toHTML()
    {
        $name = $this->getName();
        $price = $this->getPrice();
        $equipment = $this->getEquipment();
        $seitenlaenge = $this->getSeitenlaenge();
        $area = $this->getArea();
        return  <<<ENDE
             <div class = "products" style="border-style: solid">
            <h1>$name</h1>
            <p> EUR $price</p>
            <p>Special Equipment:<br>
            $equipment</p>
            <p> Seitenlänge: $seitenlaenge</p>
            <p>Fläche: $area</p>
            </div>
ENDE;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $r = ['name' => $this->getName(),
            'price' => $this->getPrice(),
            'equipment' => $this->getEquipment(),
            'area' => $this->getArea()
        ];
        return $r;
    }
}