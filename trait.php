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


    trait branch3 {
        public function branch3Name ($name) {
            echo "This Branch name is $name";
        }
    }

    trait branch4 {
        public function branch4Name($name) {
            echo "This Branch name is $name";
        }
    }

    class Company {
        use branch1;
        use branch2;
        use branch3;
        use branch4;

        public function bankName($name) {
            echo "<h1>This Bank name is $name</h1>";
        }
    }

    $c1 = new Company();
    $c1->bankName("Faysal Bank Pakistan");
    echo "<hr>";
    $c1->branch1Name("Landhi Branch"); 
    echo "<hr>";
    $c1->branch2Name("Orangi Town Branch");
    echo "<hr>";
    $c1->branch3Name("Malir Branch"); 
    echo "<hr>";
    $c1->branch4Name("Shahfaisal Branch");
    
    

?>