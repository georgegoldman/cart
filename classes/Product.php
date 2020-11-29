<?php

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availablePrice;

    public function __construct($id, $title, $price, $availablePrice)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availablePrice = $availablePrice;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId()
    {
        $this->id = $id;
    }

    public function getTtitle()
    {
        return $this->title;
    }

    public function setTitle()
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice()
    {
        $this->price = $price;
    }

    public function getAvailablePrice()
    {
        return $this->availablePrice;
    }

    public function setAvailablePrice()
    {
        $this->availablePrice = $availablePrice;
    }

    public function addToCart(Cart $cart, int $qauntity)
    {

    }

    public function removeFromCard(cart $cart)
    {
        
    }
}