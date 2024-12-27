<?php

include 'teacher.php';
include 'student.php';

$t1 = new teacher\join();
$t1->joinDate();

echo "<br/>";

$s1 = new student\Join();
$s1->joinDate();

?>