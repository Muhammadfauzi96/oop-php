<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("muhammad");
$person->hello("fauzi");

$person->name = "aku";
var_dump($person);

$person->run();
