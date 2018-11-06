<?php

namespace OOPStore;

class Purchase 
{
    private $cart;

    public function __construct($cart)
    {
        $this->cart = $cart;
    }
}