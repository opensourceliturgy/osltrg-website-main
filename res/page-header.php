<?
if ( !isset($title_of_page) ) { exit(4); }
require(realpath(realpath(__DIR__ . '/..') . '/lcrs/main.php'));
require(realpath(__DIR__ . '/siteurl.php'));
require(realpath(__DIR__ . '/style.php'));

?>
<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:og="http://ogp.me/ns#"><head>
<!-- Thank you StackOverflow: http://stackoverflow.com/questions/6943495/facebook-link-thumbnail -->
<title><?php echo htmlspecialchars($title_of_page); ?></title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo $site_inf['style']; ?>/colors-dflt.css" />
<link rel = "stylesheet" type = "text/css" href = "<?php echo $site_inf['style']; ?>/site-main.css" />
</head><body>

<div align = "center">
<h2>Refugant Catholic Open Source Liturgy Project</h2>
</div>

<table border = "1" cellpadding = "10">

<tr><td valign = "top" width = "20%">

<a href = "<?php echo $site_inf['url']; ?>/"><b>WELCOME</b></a>
<hr/>

<a href = "<?php echo $site_inf['url']; ?>/why-the-need.php"><b>Why this project is needed</b></a>
<hr/>

<a href = "<?php echo $site_inf['url']; ?>/how-cathoic.php"><b>How Refugant Catholicism is Catholic</b></a>
<hr/>

<a href = "<?php echo $site_inf['url']; ?>/more.php"><b>more ...</b></a>
<hr/>

- - -<hr/>

Date-Generic Liturgy of the Mass - version #1
(Maximum preservation of traditional language)
(<a href = "missal.php" target = "_blank">full&nbsp;page&nbsp;width</a>)
(<a href = "missal.php?print_margin=yes" target = "_blank">with&nbsp;left&nbsp;margin</a>)
<hr/>

Date-Generic Liturgy of the Mass - version #2
(Minimal changes for the sake of inclusivity)
(<a href = "missal.php?lang_pref=rewordist" target = "_blank">full&nbsp;page&nbsp;width</a>)
(<a href = "missal.php?lang_pref=rewordist&print_margin=yes" target = "_blank">with&nbsp;left&nbsp;margin</a>)
<hr/>

- - -<hr/>

<a href = "https://github.com/opensourceliturgy" target = "_blank">See
This Project on GitHub</a>
<hr/>


</td><td valign = "top">
<div class = "head">
<h1><?php echo htmlspecialchars($title_of_page); ?></h1>
</div>
