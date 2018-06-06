<?php
$previousPage = "";

if(isset($_SERVER['HTTP_REFERER'])) {
 $previousPage = $_SERVER['HTTP_REFERER'];
}else {
  $previousPage = "./index.php";
}

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

function get_rand_img($dir)
{
    $arr = array();
    $list = scandir($dir);
    foreach($list as $file)
    {
        if(!isset($img))
        {
            $img = '';
        }
        if(is_file($dir . '/' . $file))
        {
            $ext = end(explode('.', $file));
            if($ext == 'gif' || $ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'GIF' || $ext == 'JPEG' || $ext == 'JPG' || $ext == 'PNG')
            {
                array_push($arr, $file);
                $img = $file;
            }
        }
    }
    if($img != '')
    {
        $img = array_rand($arr);
        $img = $arr[$img];
    }
    $img = str_replace("'", "\'", $img);
    $img = str_replace(" ", "%20", $img);
    return $img;
}
$page = $_SERVER['PHP_SELF'];

?>
