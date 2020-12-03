<?php

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;
    /**
     * @param Cart $cart
     * @param int $quantity
     * @return \CartItem
     * @throws \Exception
     */

     /**
      * @param int $id
      * @param string $title
      * @param float $price
      * @param int $availableQuantity
      */

    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */

    public function getTtitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */

    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getavailableQuantity()
    {
        return $this->availableQuantity;
    }
    
    /**
     * @param int $availableQuantity
     */

    public function setavailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }
    

    public function addToCart(Cart $cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }

    public function removeFromCard(cart $cart)
    {
        return $cart->removeProduct($this);
    }
}