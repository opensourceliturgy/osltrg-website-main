<?php


$site_spc['remote_urls'] = array(
  'church_and_ministry' => "https://www.futurechurch.org/sites/default/files/DutchDominicansThe_Church_and_the_Ministry.pdf",
  'define_free_software' => "https://www.gnu.org/philosophy/free-sw.en.html",
);

function rmt_link_out ( $targ ) {
  echo $GLOBALS['site_spc']['remote_urls'][$targ];
}


?>