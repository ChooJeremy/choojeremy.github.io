<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login FAQ</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap.css" />
		<link rel="stylesheet" href="links.css" />
		<link rel="stylesheet" href="notallowed.css" />
		<link rel="stylesheet" href="loginfaq.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!--Fall back to local jquery if google fails -->
		<script>window.jQuery || document.write('<script src="../_scripts/jquery2.0.2.min.js"><\/script>')</script>
		<script src="../_scripts/jquery.timeago.js" type="text/javascript"></script>
	</head>
     
	<body>
		<?php
            $menuActiveFile = "css/loginfaq.php";
            include '/var/php/css/menu.php';
        ?>
        <?php
        	include '/var/php/loginfaq.php';
        ?>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-37989419-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>