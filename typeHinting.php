<?php

class Student {
    public function student(string $name , int $age , int $class){
        echo "This is name is $name <br/>";
        echo "This Class is $class <br/>"; 
        echo "This is $age year Old";
    }
}

$std1 = new Student();
$std1->student("Naimat Ali" , 20 , 12);
echo "<br>";

function PrintName(string $name , int $age) {
    echo "This is name is $name <br/>"; 
    echo "This is $age year Old";
}

PrintName("Naimat Ali" , 20);
echo "<br/> <br/> <br/>";
PrintName("Waqas Sheikh" , 20);
echo "<br/> <br/> <br/>";
PrintName("Chouhdry Rizwan" , 26);




?>