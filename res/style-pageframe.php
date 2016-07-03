<?php

$marginly = 0;
if ( strcmp($_REQUEST['print_margin'],'yes') == 0 ) {
  $marginly = 10;
  $marginlv = "15%";
}


?><style type = "text/css">
div.pageframe {
<?php
  if ( $marginly > 5 )
  {
    echo "\tmargin-left: " . $marginlv . ";\n";
  }
?>}
</style>
