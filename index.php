<?php 

require_once __DIR__ . '/vendor/autoload.php';

use imzankhan\SC_Assign\Index;

$test = new Index();
$apikey = '1jplVt5j8umhc1MuMFFZsDqHBr5MDsfY';

echo $test->Search($apikey,'cheeseburgers',1);
// echo $test->Trending($apikey,1);
