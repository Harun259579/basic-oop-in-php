<?php
include("class_person.php");


$a=new Persons;

$a->name = "Abrar";
$a->age = 25;
$a->profession = "Doctor";


$b=new persons;

$b->name = "Sirin";
$b->age = 23;
$b->profession = "House Wife";


$c=new persons;

$c->name = "Adil";
$c->age = 12;
$c->profession = "student";



$a->shop();
echo "<br>";
$b->cook();
echo "<br>";
$c->sleep();


echo "<br>";
echo"Now". $c->name." weight is ".$c->weight."kg\n"."<br>";
$c->eat("burger",500);
echo"<br>";
$c->eat("chocolate",500);
echo"<br>";
echo "Now".$c->name." weight is ".$c->weight."kg\n"."<br>";




?>