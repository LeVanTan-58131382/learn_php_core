<?php

include "namespace.php";

$myDog = new Animals\Dogs("Dora");

$myDog -> introduce();


use Animals as A;
$mySecondsDog = new A\Dogs("No");
$mySecondsDog -> introduce();

