<?php

class UserAuthentication {
    public function login($username, $password) {
        // Simulate user authentication logic
        if ($username === 'admin' && $password === 'admin123') {
            echo 'admin login';
        } elseif ($username === 'student' && $password === 'student123') {
             echo 'student login';
        } elseif ($username === 'teacher' && $password === 'teacher123') {
            echo 'teacher login';
        } else {
            echo 'Invalid credentials';
        }
    }
}

class Admin extends UserAuthentication {
    function  adminWork (){
        echo 'admin is Arrange All Work';
    }
}

class Student extends UserAuthentication {
    function  studentWork (){
        echo 'student is To Complete Our Class Work';
    }
}

class Teacher extends UserAuthentication {
    function  teacherWork (){
        echo 'teacher is To See Our Work';
    }
}



$admin = new Admin();
$admin->login('admin', 'admin123');
$admin->adminWork();
echo "<br>";
$student = new Student();
$student->login('student', 'student123');
$student->studentWork();
echo "<br>";
$teacher = new Teacher();
$teacher->login('teacher', 'teacher123');
$teacher->teacherWork();



?>