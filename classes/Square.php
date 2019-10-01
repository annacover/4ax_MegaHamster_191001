<?php
require_once 'Room.php';

class square extends room
{
    protected $length;
    protected $width;
    protected $height;

    /**
     * square constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct(string $name, string $price, string $equipment, $length, $width, $height)
    {
        parent::__construct($name, $price, $equipment);
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getSizes()
    {
        return $this->length . 'cm x ' . $this->width . 'cm x ' . $this->height . 'cm';
    }


    public function getArea()
    {
        return $this->width * $this->length;
    }

}