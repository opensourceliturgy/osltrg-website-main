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
<h2>Progressive Catholic Open Source Liturgy Project</h2>
</div>

<table border = "1" cellpadding = "10">

<tr><td valign = "top" width = "20%">

<a href = "<?php echo $site_inf['url']; ?>/"><b>WELCOME</b></a>
<hr/>

<a href = "<?php echo $site_inf['url']; ?>/why-the-need.php"><b>Why this project is needed</b></a>
<hr/>

</td><td>
<div class = "head">
<h1><?php echo htmlspecialchars($title_of_page); ?></h1>
</div>
