<?php

$marginly = 0;
if ( strcmp($_REQUEST['print_margin'],'yes') == 0 ) {
  $marginly = 10;
  $marginlv = "15%";
}

$styledir = $GLOBALS['site_inf']['style'];

?>
<link rel="stylesheet" type="text/css" href="<?php echo $styledir; ?>/colors-dflt.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $styledir; ?>/startpoint.css" />
<style type = "text/css">
div.pageframe {
<?php
  if ( $marginly > 5 )
  {
    echo "\tmargin-left: " . $marginlv . ";\n";
  }
?>}
</style>
<?php

if ( strcmp($_REQUEST['debug_style'],'active') == 0 ) {
  echo('<link rel="stylesheet" type="text/css" href="' . $styledir . '/debug.css" />' . "\n");
}

?>
