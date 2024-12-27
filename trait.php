<?php

    trait branch1 {
        public function branch1Name ($name) {
            echo "This Branch name is $name.";
        }
    }

    trait branch2 {
        public function branch2Name ($name) {
            echo "This Brnach name is $name.";
        }
    }

    class Company {
        use branch1;
        use branch2;
    }

    $c1 = new Company();
    $c1->branch1Name("Landhi Branch"); 
    echo "<br>";
    $c1->branch2Name("Orangi Town Branch");

    

?>