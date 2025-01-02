<?php

include 'config.php';

class Delete {

    public $db_conn;

    public function __construct($conn) {
        $this->db_conn = $conn;
    }

    public function delete(){
        $sql = "DELETE FROM `users` WHERE id = 33";
        $user = $this->db_conn->prepare($sql);
        $result = $user->execute();

        if ($result) {
            echo "<h1>Data Deleted </h1>";
        } else {
            echo "Data Not Submit";
        }
        
    }


}

$user_delete = new Delete($conn);
$user_delete->delete();



?>