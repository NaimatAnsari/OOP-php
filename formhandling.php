<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling | OOP</title>
</head>
<body>
    
    <form action="" method="post">
        Name <input type="text" name="name" placeholder="Enter user name" > <hr>
        Email <input type="email" name="email" placeholder="Enter Email Address"> <hr>
        Password <input type="password" name="pass" placeholder="Enter a Password"> <hr>
        <input name="submit" type="submit" value="Submit">
    </form>
    

            <?php
class User {

    public function formPrint($name , $email , $password) { ?> 
    
    
    <table border="1px">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $password ?></td>
                    </tr>
                </tbody>
            </table>
    
    <?php
    }

}

if (isset($_POST['submit'])) {
    $form = new User();
    $form->formPrint($_POST['name'] , $_POST['email'] , $_POST['pass']);
}
?>


</body>
</html>

