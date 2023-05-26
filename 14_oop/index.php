<?php
//definition
//class
//instance
//public & private instances
//inheritance

require_once './Person.php';
require_once './Student.php';
////p - instance
//// person - class
//$p = new Person('John', 24, null);
////$p->name = 'John';
////$p->age = 25;
////$p->salary = null;
//
//echo $p->name.'<br>';
//echo $p->age.'<br>';
//echo $p->getSalary().'<br>';
//$p->setSalary(100);
//echo $p->getSalary();
//
//echo '<pre>';
//var_dump($p);
//echo '</pre>';

$s = new Student('Mark', 19, 1234 );
echo $s->name.'<br>';