<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "fauzi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "muhammad";
$vp->sayHello("Joko");
