<?php

class Teachers {

    private function questions() {
        echo 'Important questions';
    }

    public function seeTeachers() {
        $this->questions();
    }

    protected function result() {
        echo 'Result is Ready';
    }

}

class Manager extends Teachers {
    
    public function result() {
        parent::result();
    }

}

$s1 = new Teachers();
$s1 = $s1->seeTeachers();


$s2 = new Manager();
$s2 = $s2->result();









?>