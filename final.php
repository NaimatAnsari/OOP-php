<?php

class Student {

    final function display($name , $class , $age) {
        echo "Student Name is $name . He is Class is $class . He is a Age is $age";
    }

}

class Std extends Student {

     function display($name , $class , $age) {
        echo "Student Name is $name . He is Class is $class . He is a Age is $age";
    }

    final function skill($skill) {
        echo "Student Skill is $skill";
    }

}

$s1 = new Std();
$s1->display('Naimat Ansari', 12 , 20);
echo "<br>";
$s1->skill('Full Stack Developer (PHP with Laravel)');

echo "<br>";

$s2 = new Std();
$s2->display('Waqas Sheikh', 12 , 20);
echo "<br>";
$s2->skill('Excel Expert');

echo "<br>";

$s3 = new Std();
$s3->display('Huzaifa Mustafa', 12 , 20);
echo "<br>";
$s3->skill('React JS Developer');




?>