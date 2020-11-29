<?php 

class Cart 
{
    private array $items = [];


    public function addProduct(product $product, int $qautity)
    {
        foreach ($this->items as $item)
        {
            if($item->getProduct()->getId() === $product->getId() )
            {
                if($item->getQuantity() + $qautity > $product->getProduct()->getAvailableQuantity())
                {
                    throw new Exception("product qauntity can not be more than".$product->getAvailableQuantity());
                }

                $item->setQuantity($item->getQuantity() + $qautity);
            }
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