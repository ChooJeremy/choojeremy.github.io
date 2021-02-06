<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MiniCTF Shortcuts</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/links.css" />
		<link rel="stylesheet" href="../css/fieldsetfixer.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!--Fall back to local jquery if google fails -->
		<script>window.jQuery || document.write('<script src="../_scripts/jquery2.0.2.min.js"><\/script>')</script>
		<script src="../_scripts/jquery.timeago.js" type="text/javascript"></script>
		<style>
			button
			{
				width: 150px;
				margin-left: 20px;
				margin-right: 20px;
			}
			a:hover
			{
				text-decoration: none;
			}
		</style>
	</head>
     
	<body>
        <div style="width: 500px; margin: auto;">
        	<h1>Shortcuts</h1>
        	<p>This page contains quick links to all the CTFs</p>
			<fieldset class="fix">
				<legend>The main CTF</legend>
				<a href="butthurt">
					<button type="button" class="btn btn-primary">Go!</button>
				</a>
				<a href="index#main">
					<button type="button" class="btn btn-inverse">More info</button>
				</a>
			</fieldset>
			<fieldset class="fix">
				<legend>Logging in madness</legend>
				<a href="loginrequired">
					<button type="button" class="btn btn-info">Go!</button>
				</a>
				<a href="index#loginrequired">
					<button type="button" class="btn btn-inverse">More info</button>
				</a>
			</fieldset>
        </div>
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