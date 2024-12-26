<?php

    interface Products {

        public function productName($name);
        public function productPrice($price);
        public function productBrand($brand);

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

    }

    

?>