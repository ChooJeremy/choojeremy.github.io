<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mini CTFs</title>
		<meta charset="utf-8" />
		<meta name="description" content="Try some mini CTFs and complete a few challenges! Mainly based around html, css and javascript, these challenges do not require much and are easy to complete." />
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/links.css" />
		<link rel="stylesheet" href="../css/fieldsetfixer.css" />
		<link rel="stylesheet" href="css/minictf.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!--Fall back to local jquery if google fails -->
		<script>window.jQuery || document.write('<script src="../_scripts/jquery2.0.2.min.js"><\/script>')</script>
		<script src="../_scripts/jquery.timeago.js" type="text/javascript"></script>
		<script src="../_scripts/jquery.animate-colors.js" type="text/javascript"></script>
	</head>
     
	<body>
        <div style="margin: 20px;">
			<div id="rules">
				<strong>Rules:</strong>
				<ol>
					<li><a href="rules#rule1">No DDOS</a></li>
					<li><a href="rules#rule2">No Bruteforcing</a></li>
					<li><a href="rules#rule3">Don't use the redirector page to continue.</a></li>
					<li><a href="rules#rule4">There are no more rules.</a></li>
				</ol>
			</div>
        	<h1>My mini CTF</h1>
			<p>Hello, visitor. Up for some fun? Are you knowledgable about html, css and javascript? Here, you can try some of the challenges I've created over my free time.</p>
			<p>Note that I'm not really a pro or knowledgable at these languages at any means, these challenges will be pretty simple and won't require much. If you're still a student learning about these languages, you can still probably complete these! Good luck!</p>
			<div id="main">
				<fieldset class="fix">
					<legend>The main CTF</legend>
					<p>This is the main CTF I've created at the start. It contains 3 challenges, which tests your html, css and javascript.</p>
					<p>Note: the last page, on form creation, is not a real challenge, it was just created for fun. Do not stress yourself on how to get through that.</p>
					<a href="butthurt">
						<button type="button" class="btn btn-primary">Go!</button>
					</a>
					<br /><span>Side note: Found that you were redirected back here? If I detect that you've tried to hack through it by just circumventing the form, I'll redirect you back here. Just go back to the webpage you were on to continue!</span>
				</fieldset>
			</div>
			<br />
			<p>I have some other challenges as well, some easier, some harder. I've placed these in a separate section mostly so that you do not need to complete the main one to try these one, I wouldn't one anyone stuck in one part to be unable to experience the rest! Try them out if you like!</p>
			<legend>Other CTFs:</legend>
			<div id="loginrequired">
				<fieldset class="fix">
					<legend>Logging in madness</legend>
					<p>This...was a bug that hit me as I was developing my menu. See if you can get past it!</p>
					<a href="loginrequired">
						<button type="button" class="btn btn-info">Go!</button>
					</a>
				</fieldset>
			</div>
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