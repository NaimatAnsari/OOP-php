<?php

class Person{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(){
        return "Hello, my name is $this->name and I'm $this->age years old.";
    }
}

$person1 = new Person("Naimat Ansari", 20);
echo $person1->introduce();
echo "<br>";
$person2 = new Person("Waqas Sheikh", 21);
echo $person2->introduce();
echo "<br>";
$person3 = new Person("Muhammad Rizean Tahir", 26);
echo $person3->introduce();
echo "<br>";


?>