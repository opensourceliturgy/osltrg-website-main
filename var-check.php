<?php
require "lcrs/main.php";


$general_test_flag = true;

function url_n_prefix ( $pfx, $val )
{
  $sizo = strlen($pfx);
  $sizr = strlen($val);
  if ( $sizr < ( $sizo + 0.5 ) ) { return true; }
  $bgan = substr($val,0,$sizo);
  if ( strcmp($bgan,$pfx) != 0 ) { return true; }
  $nexo = substr($val,$sizo,1);
  if ( strcmp($nexo,'/') == 0 ) { return true; }
  
  return false;
}

function standard_dl ( $rg )
{
  if ( !is_string($rg->val) )
  {
    $rg->dscp = "Wrong variable type";
    $rg->more .= "\n<br/><br/>This variable is supposed to be a string variable that\n";
    $rg->more .= "identifies a local directory - but for some reason, the value there\n";
    $rg->more .= "is something other than a string.\n";
    return false;
  }
  if ( strcmp(substr(($rg->val),0,1),'/') != 0 )
  {
    $rg->dscp = "Faulty directory variable";
    $rg->more .= "\n<br/><br/>The fact that this variable does not begin with a\n";
    $rg->more .= "forward-slash tells me that it is not a full local pathname\n";
    $rg->more .= "as it is supposed to be.\n";
    return false;
  }
  if ( strcmp(substr(($rg->val),-1),'/') == 0 )
  {
    $rg->dscp = "Faulty directory variable";
    $rg->more .= "\n<br/><br/>Directory variables are not supposed to end.\n";
    $rg->more .= "in a forward-slash. Please change the value of this variable to:\n";
    $rg->more .= "\"<b>" . htmlspecialchars(substr(($rg->val),0,-1)) . "</b>\"\n";
    return false;
  }
  if ( !file_exists($rg->val) )
  {
    $rg->dscp = "Faulty directory variable";
    $rg->more .= "\n<br/><br/>This string is supposed to refer to a valid\n";
    $rg->more .= "directory. Instead, it's value is \"<b>" . ($rg->val) . "</b>\",\n";
    $rg->more .= "and no such directory exists - and for that matter, there\n";
    $rg->more .= "isn't a file there either. Could you please change it to\n";
    $rg->more .= "point to a valid directory?\n";
    return false;
  }
  if ( !is_dir($rg->val) )
  {
    $rg->dscp = "Faulty directory variable";
    $rg->more .= "\n<br/><br/>This string is supposed to refer to a valid\n";
    $rg->more .= "directory. Instead, it's value is \"<b>" . ($rg->val) . "</b>\",\n";
    $rg->more .= "which is not a directory. Could you please change it to\n";
    $rg->more .= "point to a valid directory?\n";
    return false;
  }
  
  return true;
}

function standard_du ( $rg )
{
  if ( !is_string($rg->val) )
  {
    $rg->dscp = "Wrong variable type";
    $rg->more .= "\n<br/><br/>This variable is supposed to be a string variable that\n";
    $rg->more .= "is a URL - but for some reason, the value there\n";
    $rg->more .= "is something other than a string.\n";
    return false;
  }
  
  $notwork = true;
  if ( $notwork ) { $notwork = url_n_prefix("http://",$rg->val); }
  if ( $notwork ) { $notwork = url_n_prefix("https://",$rg->val); }
  if ( $notwork ) { $notwork = url_n_prefix("file:///",$rg->val); }
  if ( $notwork )
  {
    $rg->dscp = "Faulty URL variable";
    $rg->more .= "\n<br/><br/>This string is not properly initialized by any\n";
    $rg->more .= "of the known URL prefixes\n";
    $rg->more .= "(";
      $rg->more .= "<b>http://</b> - ";
      $rg->more .= "<b>https://</b> - ";
      $rg->more .= "<b>file:///</b>";
    $rg->more .= ")\n";
    $rg->more .= "- so I am not convinced that it\n";
    $rg->more .= "is a valid URL.\n";
    return false;
  }
  
  if ( strcmp(substr(($rg->val),-1),'/') == 0 )
  {
    $rg->dscp = "Faulty URL variable";
    $rg->more .= "\n<br/><br/>Directory variables are not supposed to end.\n";
    $rg->more .= "in a forward-slash. Please change the value of this variable to:\n";
    $rg->more .= "\"<b>" . htmlspecialchars(substr(($rg->val),0,-1)) . "</b>\"\n";
    return false;
  }
  
  return true;
}


function order_a_a ( $ord_a, $explain )
{
  $resul = true;
  $lc_ord = $GLOBALS[$ord_a];
  
  if ( $resul ) { $resul = is_array($lc_ord); }
  
  if ( $resul ) { return $resul; }
  
  echo "\n<p><b>Missing array: &ensp; \$" . $ord_a . "</b> - ";
  echo htmlspecialchars($explain);
  echo "</p>\n";
  
  $GLOBALS['general_test_flag'] = $resul;
  return $resul;
}

function order_b_dl ( $ord_a, $ord_b, $explain )
{
  $resul = true;
  $local_ord = $GLOBALS[$ord_a];
  
  $dscrip = "Missing directory variable";
  $saymore = '';
  if ( $resul ) { $resul = is_array($local_ord); }
  if ( $resul ) { $resul = array_key_exists($ord_b,$local_ord); }
  $finaro = new StdClass;
  if ( $resul ) {
    $finaro->val = $local_ord[$ord_b];
    $finaro->more = $saymore;
    $finaro->dscp = $dscrip;
    $resul = standard_dl($finaro);
    $saymore = $finaro->more;
    $dscrip = $finaro->dscp;
  }
  
  if ( $resul ) { return $resul; }
  
  echo "\n<p><b>" . $dscrip . ": &ensp; \$" . $ord_a . "['" . $ord_b . "']</b> - ";
  echo htmlspecialchars($explain);
  echo $saymore;
  echo "</p>\n";
  
  $GLOBALS['general_test_flag'] = $resul;
  return $resul;
}

function order_b_du ( $ord_a, $ord_b, $explain )
{
  $resul = true;
  $local_ord = $GLOBALS[$ord_a];
  
  $dscrip = "Missing URL variable";
  $saymore = '';
  if ( $resul ) { $resul = is_array($local_ord); }
  if ( $resul ) { $resul = array_key_exists($ord_b,$local_ord); }
  $finaro = new StdClass;
  if ( $resul ) {
    $finaro->val = $local_ord[$ord_b];
    $finaro->more = $saymore;
    $finaro->dscp = $dscrip;
    $resul = standard_du($finaro);
    $saymore = $finaro->more;
    $dscrip = $finaro->dscp;
  }
  
  if ( $resul ) { return $resul; }
  
  echo "\n<p><b>" . $dscrip . ": &ensp; \$" . $ord_a . "['" . $ord_b . "']</b> - ";
  echo htmlspecialchars($explain);
  echo $saymore;
  echo "</p>\n";
  
  $GLOBALS['general_test_flag'] = $resul;
  return $resul;
}



?>
<html>
<head>
<title>Variable Setup Check</title>
</head>
<body>
<h1>Variable Setup Check</h1>
<?php


order_a_a ( 'site_inf', "Information about the site." );
order_b_du ( 'site_inf', 'url', "URL of the web-site mirror." );
order_b_dl ( 'site_inf', 'srvloc', "Location of web-site on local machine's filesystem.");

order_a_a ( 'site_spc', "Further information on web-site resources." );
order_b_dl ( 'site_spc', 'resdir', "A directory where needed components are saved in canonically named directories." );



if ( $general_test_flag ) { ?>
<h2>All tests check out well! Congratulations!</h2>
<?php } else { ?>
<h2>Apparently, the file &quot;lcrs/main.php&quot; does not define all
the values that it needs to. That is why the above test(s) failed.</h2>
<?php } ?>

</body></html>

