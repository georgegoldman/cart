<?php

require_once "./classes/Product.php";
require_once "./classes/Cart.php";
require_once "./classes/CartItem.php";

$product1 = new Product(1, "phone 11", 2500, 10);
$product2 = new Product(2, "m2 ssd", 400, 10);
$product3 = new Product(3, "samsung galaxy", 3200, 10);
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1,  1);
$cartItem1 = $product2->addToCart($cart,  1);
print "number of items in cart";
print $cart->getTotalQuantity();
print 'total price of items in the cart';
print $cart->getTotalSum();

$cartItem2->increaseQauntity();
$cartItem2->increaseQauntity();

print "number of items in cart";
print $cart->getTotalQuantity();

print 'the total price of items';
print $cart->getTotalSum();