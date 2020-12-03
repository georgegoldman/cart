<?php



class CartItem
{

    private Product $product;
    private int $quantity;

    /**
     * @param \Product $product
     * @param int $quantity
     */

    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return \Product
     */

    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function increaseQuantity($amount = 1)
    {
        if($this->getQuantity() + $amount  > $this->getProduct()->getavailableQuantity())
        {
            throw new Exception("Product quantity can not be more than what ever is ".$this->getProduct()->getavailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1)
    {
        if($this->getQuantity() - $amount < 1)
        {
            throw new Exception("Product quantity can not be more than 1 ");
        }
        $this->quantity -= $amount;
    }
}