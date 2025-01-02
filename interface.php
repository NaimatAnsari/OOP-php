<?php

    interface Products {

        public function productName($name);
        public function productPrice($price);
        public function productBrand($brand);
        public function productSellArea($area);
    }

    class ProductsFeatures implements Products {

      function productName($name) {
        echo "The Product Name is $name.";
        }

        function productPrice($price) {
            echo "The Product Rate is $price.";
        }

        function productBrand($brand) {
            echo "The Product Brand Name is $brand. ";
        }

        function productSellArea($area){
            echo "The Product Sell Area is $area";
        }

    }

$product = new ProductsFeatures();
$product->productName("Redmi A3");
echo "<hr>";
$product->productPrice(22,300);
echo "<hr>";
$product->productBrand("Xaomi");
echo "<hr>";
$product->productSellArea("Quaidabad Mobile Market");
    

?>