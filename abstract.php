<?php

use LDAP\Result;

abstract class School {
    abstract public function teacherRegister($total);
}

class Register_Teacher extends School {

    public function teacherRegister($total){
        echo "Our School Teacher $total is Register";
    }

}

$pps = new Register_Teacher();
$pps->teacherRegister(30);
echo "<hr/>";
$igs = new Register_Teacher();
$igs->teacherRegister(10);
echo "<hr/>";
$aps = new Register_Teacher();
$aps->teacherRegister(90);



?>