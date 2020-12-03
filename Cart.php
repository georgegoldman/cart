<?php 



class Cart 
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @param Product $product
     * @param int $quantity
     * @param \CartItem
     * @throws \Exception
     */


    public function addProduct(Product $product, int $quantity)
    {
        $cartIem = $this->findCartItem($product->getId());
        if($cartIem === null)
        {
            $cartIem  = new CartItem($product, 0);
            $this->items[$product->getId()] = $cartIem;
        }
        //find product in cart
        $cartIem->increaseQuantity($quantity);
        return $cartIem;
    }

    private function findCartItem(int $productId)
    {
        return $this->items[$productId] ?? null;
    }

    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
    }

    public function getTotalQauntity()
    {
        $sum = 0;
        foreach($this->items as $item)
        {
            $sum += $item->getQuantity();
        }
        return $sum." ";
    }

    public function getTotalSum()
    {
        $totalSum = 0;
        foreach($this->items as $item)
        {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
    }
}