<?php
require "lcrs/main.php";


$general_test_flag = true;

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
  
  return true;
}


function order_a_a ( $ord_a, $explain )
{
  $resul = true;
  $local_ord = $GLOBALS['ord_a'];
  
  if ( $resul ) { $resul = is_array($local_ord); }
  
  if ( $resul ) { return $resul; }
  
  echo "\n<p><b>Missing array: \$" . $ord_a . "</b> - ";
  echo htmlspecialchars($explain);
  echo "</p>\n";
  
  $GLOBALS['general_test_flag'] = $resul;
  return $resul;
}


function order_b_dl ( $ord_a, $explain )
{
  $resul = true;
  $local_ord = $GLOBALS['ord_a'];
  
  $dscrip = "Missing directory variable";
  $saymore = '';
  if ( $resul ) { $resul = is_array($local_ord); }
  if ( $resul ) { $resul = array_key_exists($ord_b,$local_ord); }
  $finaro = new StdClass;
  if ( $resul ) {
    $finaro->val = $local_ord[$ord_b];
    $finaro->more = $saymore;
    $finary->dscp = $dscrip;
    $resul = standard_dl($finaro);
    $saymore = $finaro->more;
    $dscrip = $finary->dscp;
  }
  
  if ( $resul ) { return $resul; }
  
  echo "\n<p><b>" . $dscrip . ": \$" . $ord_a . "['" . $ord_b . "']</b> - ";
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
order_b_dl ( 'site_inf', 'pranky', "Still keeping you on edge." );



if ( $general_test_flag ) { ?>
<h2>All tests check out well! Congratulations!</h2>
<?php } else { ?>
<h2>Apparently, the file &quot;lcrs/main.php&quot; does not define all
the values that it needs to. That is why the above test(s) failed.</h2>
<?php } ?>

</body></html>

