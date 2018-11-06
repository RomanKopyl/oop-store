<?php

namespace OOPStore;

class Cart {
    private $customer;
    private $products;
    private $purchase;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $this->products = [];
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function addProduct (Product $product)
    {
        if (empty($this->purchase)) {
            $this->products[] = $product;
        }
    }

    public function delProduct (Product $product)
    {
        if (($key = array_search($product, $this->products)) !== false) {
            unset($this->products[$key]);
        }
        // foreach (array_keys($this->products, $product, true) as $key) {
        //     unset($this->products[$key]);
        // }
        // foreach ($this->products as $key => $value) {
        //     if ($value === $product) {
        //         unset($this->products[$key]);
        //     }
        // }
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function createPurchase(): Purchase
    {
        $this->purchase = $purchase = new Purchase($this);
        return $this->purchase;
    }
}