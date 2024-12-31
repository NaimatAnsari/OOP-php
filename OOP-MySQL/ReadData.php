<?php
include './config.php';

class User {
    public $db_conn;

    public function __construct($conn) {
        $this->db_conn = $conn;
    }

    public function fetch_data(){
        $getData = $this->db_conn->prepare("SELECT * FROM users");
        $getData->execute();
        $result = $getData->fetchAll();
        foreach ($result as $user) {
            
            echo"
             <table border='1px'>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>". $user['id'] . "</td>
                <td>". $user['first_name'] . "</td>
                <td>". $user['last_name'] . "</td>
                <td>". $user['email'] . "</td>
                <td>". $user['gender'] . "</td>
            </tr>
        </tbody>
    </table>
            
            
            ";
            
        }
    }

}

$user1 = new User($conn);
$user1->fetch_data();




?>