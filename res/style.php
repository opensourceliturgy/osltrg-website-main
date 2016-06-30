<?php
if ( !is_array($site_spc) ) { exit(4); }

$liturgidir = realpath($site_spc['resdir'] . "/mass-missal-main");
$libdir = realpath($site_spc['resdir'] . "/mass-missal-library");
$locuta = realpath($site_spc['resdir'] . "/mass-missal-lectionary");
$canonical = realpath($site_spc['resdir'] . "/osltrg-saints-primary");

//require_once(realpath($site_spc['resdir'] . '/mass-missal-library/season/functions.php'));

?>