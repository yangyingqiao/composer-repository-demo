<?php
// echo __DIR__ . '/vendor/autoload.php';die;
require_once __DIR__ . '/vendor/autoload.php';

use Joe\Crd\Service;
// echo 1;die;
$obj = new Service();

$msg = $obj->hello();
var_dump($msg);