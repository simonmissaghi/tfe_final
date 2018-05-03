<?php

function make_summary($x, $length)

{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }

}


function get_ip() {

  if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    return $_SERVER['HTTP_CLIENT_IP'];
  }

  elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    return $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  else {
    return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
  }

}

?>
