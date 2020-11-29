<?php

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity()
    {
        $this->quantity = $quantity;
    }

    public function increaseQuantity()
    {

    }

    public function decreaseQuatity()
    {

    }
}