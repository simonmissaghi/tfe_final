<?php

include('connection.php');


// header('./php/resultContent-type: application/json');

// ==========
// smartphones survey
// ==========

//survey smartphones all gen

// include('./php/result/sq1all.php');
// include('./php/result/sq2all.php');
// include('./php/result/sq3all.php');
include('./php/result/sq4all.php');
// include('./php/result/sq5all.php');
// include('./php/result/sq6all.php');
// include('./php/result/sq7all.php');
include('./php/result/sq8all.php');

//survey smartphones boys

// include('./php/result/smq1.php');
// include('./php/result/smq2.php');
// include('./php/result/smq3.php');
include('./php/result/smq4.php');
// include('./php/result/smq5.php');
// include('./php/result/smq6.php');
// include('./php/result/smq7.php');
include('./php/result/smq8.php');

//survey smartphones girls

// include('./php/result/sfq1.php');
// include('./php/result/sfq2.php');
// include('./php/result/sfq3.php');
include('./php/result/sfq4.php');
// include('./php/result/sfq5.php');
// include('./php/result/sfq6.php');
// include('./php/result/sfq7.php');
include('./php/result/sfq8.php');

// ==========
// App survey
// ==========

//survey apps all gen

// include('./php/result/aq1all.php');
// include('./php/result/aq2all.php');
// include('./php/result/aq3all.php');
// include('./php/result/aq4all.php');

//survey apps boys

// include('./php/result/amq1.php');
// include('./php/result/amq2.php');
// include('./php/result/amq3.php');
// include('./php/result/amq4.php');

//survey apps girls

// include('./php/result/afq1.php');
// include('./php/result/afq2.php');
// include('./php/result/afq3.php');
// include('./php/result/afq4.php');

// ==========
// Networks survey
// ==========

//survey networks all gen

// include('./php/result/sq1all.php');
// include('./php/result/sq2all.php');
// include('./php/result/sq3all.php');
// include('./php/result/sq4all.php');
// include('./php/result/sq5all.php');
// include('./php/result/sq6all.php');
include('./php/result/nq7all.php');
// include('./php/result/sq8all.php');

//survey networks boys

// include('./php/result/smq1.php');
// include('./php/result/smq2.php');
// include('./php/result/smq3.php');
// include('./php/result/smq4.php');
// include('./php/result/smq5.php');
// include('./php/result/smq6.php');
include('./php/result/nmq7.php');


// include('./php/result/smq8.php');

//survey networks girls

// include('./php/result/sfq1.php');
// include('./php/result/sfq2.php');
// include('./php/result/sfq3.php');
// include('./php/result/sfq4.php');
// include('./php/result/sfq5.php');
// include('./php/result/sfq6.php');
include('./php/result/nfq7.php');
// include('./php/result/sfq8.php');

// print json_encode($data_sq8All);


$data = array();
$data['sq8all'] = $sq8all;
$data['smq8'] = $smq8;
$data['sfq8'] = $sfq8;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($data, JSON_NUMERIC_CHECK));
fclose($fp);

?>
