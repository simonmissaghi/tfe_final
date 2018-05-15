<?php

include('connection.php');


// header('./php/resultContent-type: application/json');

// ==========
// smartphones survey
// ==========

//survey smartphones all gen

include('./php/result/sq1all.php');
include('./php/result/sq2all.php');
include('./php/result/sq3all.php');
include('./php/result/sq4all.php');
include('./php/result/sq5all.php');
include('./php/result/sq6all.php');
include('./php/result/sq7all.php');
include('./php/result/sq8all.php');

//survey smartphones boys

include('./php/result/sq1m.php');
include('./php/result/sq2m.php');
include('./php/result/sq3m.php');
include('./php/result/sq4m.php');
include('./php/result/sq5m.php');
include('./php/result/sq6m.php');
include('./php/result/sq7m.php');
include('./php/result/sq8m.php');

//survey smartphones girls

include('./php/result/sq1f.php');
include('./php/result/sq2f.php');
include('./php/result/sq3f.php');
include('./php/result/sq4f.php');
include('./php/result/sq5f.php');
include('./php/result/sq6f.php');
include('./php/result/sq7f.php');
include('./php/result/sq8f.php');

// ==========
// App survey
// ==========

//survey apps all gen

include('./php/result/aq1all.php');
include('./php/result/aq2all.php');
include('./php/result/aq3all.php');
include('./php/result/aq4all.php');

//survey apps boys

include('./php/result/aq1m.php');
include('./php/result/aq2m.php');
include('./php/result/aq3m.php');
include('./php/result/aq4m.php');

//survey apps girls

include('./php/result/aq1f.php');
include('./php/result/aq2f.php');
include('./php/result/aq3f.php');
include('./php/result/aq4f.php');

// ==========
// Networks survey
// ==========

//survey networks all gen

// include('./php/result/nq1all.php');
include('./php/result/nq2all.php');
include('./php/result/nq3all.php');
include('./php/result/nq4all.php');
include('./php/result/nq5all.php');
include('./php/result/nq6all.php');
include('./php/result/nq7all.php');
include('./php/result/nq8all.php');
include('./php/result/nq9all.php');

//survey networks boys

// include('./php/result/nq1m.php');
include('./php/result/nq2m.php');
include('./php/result/nq3m.php');
include('./php/result/nq4m.php');
include('./php/result/nq5m.php');
include('./php/result/nq6m.php');
include('./php/result/nq7m.php');
include('./php/result/nq8m.php');
include('./php/result/nq9m.php');

//survey networks girls

// include('./php/result/nq1f.php');
include('./php/result/nq2f.php');
include('./php/result/nq3f.php');
include('./php/result/nq4f.php');
include('./php/result/nq5f.php');
include('./php/result/nq6f.php');
include('./php/result/nq7f.php');
include('./php/result/nq8f.php');
include('./php/result/nq9f.php');

// print json_encode($data_sq8All);


$data = array();


// ==========
// smartphones survey
// ==========

$data['sq1all'] = $sq1all;
$data['sq1m'] = $sq1m;
$data['sq1f'] = $sq1f;
$data['sq2all'] = $sq2all;
$data['sq2m'] = $sq2m;
$data['sq2f'] = $sq2f;
$data['sq3all'] = $sq3all;
$data['sq3m'] = $sq3m;
$data['sq3f'] = $sq3f;
$data['sq4all'] = $sq4all;
$data['sq4m'] = $sq4m;
$data['sq4f'] = $sq4f;
$data['sq5all'] = $sq5all;
$data['sq5m'] = $sq5m;
$data['sq5f'] = $sq5f;
$data['sq6all'] = $sq6all;
$data['sq6m'] = $sq6m;
$data['sq6f'] = $sq6f;
$data['sq7all'] = $sq7all;
$data['sq7m'] = $sq7m;
$data['sq7f'] = $sq7f;
$data['sq8all'] = $sq8all;
$data['sq8m'] = $sq8m;
$data['sq8f'] = $sq8f;


// ==========
// apps survey
// ==========

$data['aq1all'] = $aq1all;
$data['aq1m'] = $aq1m;
$data['aq1f'] = $aq1f;
$data['aq2all'] = $aq2all;
$data['aq2m'] = $aq2m;
$data['aq2f'] = $aq2f;
$data['aq3all'] = $aq3all;
$data['aq3m'] = $aq3m;
$data['aq3f'] = $aq3f;
$data['aq4all'] = $aq4all;
$data['aq4m'] = $aq4m;
$data['aq4f'] = $aq4f;

// ==========
// networks survey
// ==========

// $data['nq1all'] = $nq1all;
// $data['nq1m'] = $nq1m;
// $data['nq1f'] = $nq1f;
$data['nq2all'] = $nq2all;
$data['nq2m'] = $nq2m;
$data['nq2f'] = $nq2f;
$data['nq3all'] = $nq3all;
$data['nq3m'] = $nq3m;
$data['nq3f'] = $nq3f;
$data['nq4all'] = $nq4all;
$data['nq4m'] = $nq4m;
$data['nq4f'] = $nq4f;
$data['nq5all'] = $nq5all;
$data['nq5m'] = $nq5m;
$data['nq5f'] = $nq5f;
$data['nq6all'] = $nq6all;
$data['nq6m'] = $nq6m;
$data['nq6f'] = $nq6f;
$data['nq7all'] = $nq7all;
$data['nq7m'] = $nq7m;
$data['nq7f'] = $nq7f;
$data['nq8all'] = $nq8all;
$data['nq8m'] = $nq8m;
$data['nq8f'] = $nq8f;
$data['nq9all'] = $nq9all;
$data['nq9m'] = $nq9m;
$data['nq9f'] = $nq9f;


$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($data, JSON_PRETTY_PRINT, JSON_NUMERIC_CHECK));
fclose($fp);

?>
