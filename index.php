<?php

require_once 'vendor/autoload.php';

use App\classes\HelloWorld;
use App\classes\Homepage;
//
//$homePage = new HelloWorld();
//$homePage->index();


$homePage = new Homepage();
$homePage->index();

