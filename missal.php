<?php
require "lcrs/main.php";

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


$langpack = array(
  "en" => array(
    $site_spc['resdir'] . "/mass-missal-lng-en-reclaimist",
    $site_spc['resdir'] . "/mass-missal-lng-en-rewordist",
  )
);
if ( samestrg($_REQUEST['lang_pref'],'rewordist') == 0 )
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
);
require($liturgidir . "/main.php");
?>