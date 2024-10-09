<?php

require_once "data/Person.php";

$eko = new Person("fauzi", "bogor");
$eko->name = "fauzi";
$eko->sayHello("andi");

$joko = new Person("andi", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$eko->info();
$joko->info();
