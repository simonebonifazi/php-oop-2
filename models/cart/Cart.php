//!!carrello
<?php

require_once '../products/Product.php';

class Cart
{
    private $products = [];

    public function getProductList()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = 0;
        
        foreach($this->products as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    public function addProduct($product)
    {
        if(!($product instanceof Product)) return false;
        $this->products[] = $product;
    }
}