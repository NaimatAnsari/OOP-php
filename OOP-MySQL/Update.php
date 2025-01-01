<?php
include 'config.php';

class Update {
    public $db_conn;

    public function __construct($conn) {
        $this->db_conn = $conn;
    }

    public function update() {
        $sql = "UPDATE `users` SET `first_name` = 'Ali',`last_name` = 'Khan',`email` = 'alikhan123@example.com',`gender` = 'Male' WHERE `id` = 17";
        $user = $this->db_conn->prepare($sql);
        $result = $user->execute();

        if ($result) {
            echo "<h1>Data Updated Successfully</h1>";
        } else {
            echo "Not Inserted";
        }
        

    }

}


$u = new Update($conn);
$u->update();



?>