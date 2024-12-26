<?php

class Person {
    public $name;
    public $age;

    public function introduce(){
        return "Hello, my name is $this->name and I'm $this->age years old.";
    }
}

$person1 = new Person();
$person1->name = "Naimat Ansari";
$person1->age = 20;
echo $person1->introduce();
echo "<br>";
$person2 = new Person();
$person2->name = "Waqas Sheikh";
$person2->age = 21;
echo $person2->introduce();
echo "<br>";
$person3 = new Person();
$person3->name = "Muhammad Rizwan Tahir";
$person3->age = 26;
echo $person3->introduce();
echo "<br>";


class Book {
    public $name;
    public $price;
    public $author;

    public function getDetails(){
        return "Book Name is $this->name and Book Price is $this->price and Book Author is $this->author";
    }
}

$book1 = new Book();
$book1->name = "PHP";
$book1->price = 100;
$book1->author = "Naimat Ansari";
echo $book1->getDetails();

echo "<br>";

$book2 = new Book();
$book2->name = "JavaScript";
$book2->price = 200;
$book2->author = "Muhammad Rizwan Tahir";
echo $book2->getDetails();

echo "<br>";

$book3 = new Book();
$book3->name = "Java";
$book3->price = 300;
$book3->author = "Muhammad Shahzad";
echo $book3->getDetails();


class Company {
    public $name ;
    public $address ;
    public $email ;

    public function profile () {
        echo "This Company name is $this->name , $this->address , $this->email";
    }

}


$p1 = new Company();
$p1->name = "Naimat Ansari";
$p1->address = "Lahore";
$p1->email = "naimat.ansari@";
$p1->profile($p1->name , $p1->address , $p1->email);










?>