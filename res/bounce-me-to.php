<?php
if ( !isset($where_to_bounce_to) ) { exit(4); }
?><html>
<head>
<meta http-equiv="refresh" content="0; url=<?php echo($where_to_bounce_to); ?>" />
<title>Redirecting to the desired file</title>
</head><body>
<h1>The file you are looking for is at another location.</h1>
<p>
The file that you are looking for is at another location.
If you are a regular user and not automatically redirected in the next few seconds,
click on this URL: <a href = "<?php echo($where_to_bounce_to); ?>" ><?php echo($where_to_bounce_to); ?></a>.
</p>
<p>
And if you so happen to be the administrator of a web-site that links to this document,
please update your link accordingly.
</p>
</body></html><?php exit(0); ?>