<?php

namespace OOPStore;

class Product 
{
    private $category;
    private $name;
    private $price;

    public function __construct(Category $category, $name, $price)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
    }

    public function setCategory($name)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($name)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}