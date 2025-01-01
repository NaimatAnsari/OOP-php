<?php
include 'config.php';

class Insert {

    public $db_conn;

    public function __construct($conn) {
        $this->db_conn = $conn;
    }

    public function insert() {
        $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'Sarosh','Aziz','saroshaziz311@gmail.com','Male')";
        $user = $this->db_conn->prepare($sql);
        $result = $user->execute();

        if ($result) {
            echo "<h1>Data Insert Successfully</h1>";
        } else {
            echo "Not Inserted";
        }
        

    }

}


$u = new Insert($conn);
$u->insert();




?>