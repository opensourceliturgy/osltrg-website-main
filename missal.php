<?php
require "lcrs/main.php";

$customize = false;

$langpath = array (
  array (
    'lst' => array (
      array (
        'lang' => 'en'
      )
    ),
    'gnr' => array()
  )
);


$liturgidir = realpath($site_spc['resdir'] . "/mass-missal-main");
$libdir = realpath($site_spc['resdir'] . "/mass-missal-library");
$locuta = realpath($site_spc['resdir'] . "/mass-missal-lectionary");
$canonical = realpath($site_spc['resdir'] . "/osltrg-saints-primary");

// The next array contains the location of all the Bibles
// used by this site - in order from first to last. Of
// course, if the first item on the list contains all the
// books that the lectionary requires, then the rest of
// the items on the list are superfluous.
$scripture_res = array();


$langpack = array(
  "en" => array(
    $site_spc['resdir'] . "/mass-missal-lng-en-reclaimist",
    $site_spc['resdir'] . "/mass-missal-lng-en-rewordist",
  )
);
if ( strcmp($_REQUEST['lang_pref'],'rewordist') == 0 )
{
  $langpack = array(
    "en" => array(
      $site_spc['resdir'] . "/mass-missal-lng-en-rewordist",
      $site_spc['resdir'] . "/mass-missal-lng-en-reclaimist",
    )
  );
}


$preffile = array('pref/main.php');
$headfile = array(
  '/path/to/resource/osltrg-style/main.php',
  (__DIR__ . '/res/style-pageframe.php'),
);
require($liturgidir . "/main.php");
?>