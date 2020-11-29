<?php 

class Cart 
{
    private array $items = [];


    public function addProduct(product $product, int $qautity)
    {
        foreach ($this->items as $item)
        {
            
        }
        $cartItem  = new CartItem($product, $qautity);
    }

    public function removeProduct(Product $product)
    {

    }

    public function getTotalQauntity()
    {

    }

    public function getTotalSum()
    {
        
    }
}