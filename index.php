<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, "phone 11", 2500, 10);
$product2 = new Product(2, "m2 ssd", 400, 10);
$product3 = new Product(3, "samsung galaxy", 3200, 10);
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1,  1);
$cartItem2 = $product2->addToCart($cart,  1);

print "number of items in cart ";
print $cart->getTotalQauntity()."\n";

print 'total price of items in the cart'."\n";
print $cart->getTotalSum()."\n";

$cartItem2->increaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();
$cartItem2->decreaseQuantity();

print "number of items in cart ";
print $cart->getTotalQauntity()."\n";

print 'the total price of items ';
print $cart->getTotalSum()."\n";

$cart->removeProduct($product2);

print "number of items in cart ";
print $cart->getTotalQauntity()."\n";
