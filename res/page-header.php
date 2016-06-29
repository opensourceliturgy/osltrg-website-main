<?
if ( !isset($title_of_page) ) { exit(4); }
require(realpath(realpath(__DIR__ . '/..') . '/lcrs/main.php'));
require(realpath(__DIR__ . '/siteurl.php'));
require(realpath(__DIR__ . '/style.php'));

?>
<html><head>
<title><?php echo htmlspecialchars($title_of_page); ?></title>
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

- - -<hr/>

<a href = "missal.php" target = "_blank">View the Date-Generic Liturgy of the Mass
(This version uses more traditional language -- so seeing the
inclusive message would require an understanding of the first-century
context in which a lot of things were written.)</a>
<hr/>

Eventually we plan to have a version that will use
language that makes the inclusive message clear
to those who lack familiarity with the first-century
context -- but that also is on the to-do list.
<hr/>

- - -<hr/>

<a href = "https://github.com/opensourceliturgy" target = "_blank">See
This Project on GitHub</a>
<hr/>


</td><td>
<div class = "head">
<h1><?php echo htmlspecialchars($title_of_page); ?></h1>
</div>
