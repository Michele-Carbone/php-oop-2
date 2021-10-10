<?php




class Product
{

    protected $name;
    protected $brand;
    protected $price;
    protected $color;

    public function __construct($_name, $_brand, $_price, $_color)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->color = $_color;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }
}
