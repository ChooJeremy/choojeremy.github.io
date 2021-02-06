<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MiniCTF Rules</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/links.css" />
		<link rel="stylesheet" href="css/rules.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!--Fall back to local jquery if google fails -->
		<script>window.jQuery || document.write('<script src="../_scripts/jquery2.0.2.min.js"><\/script>')</script>
		<script src="../_scripts/jquery.timeago.js" type="text/javascript"></script>
		<script src="../_scripts/jquery.animate-colors.js" type="text/javascript"></script>
	</head>
	 
	<body>
		<div id="contents">
			<h1>Rules:</h1>
			<p>The rules of the CTF are simple.
			<ol>
				<li>No DDOSing.</li>
				<li>No bruteforcing.</li>
				<li>Don't use the redirector page to continue.</li>
				<li>There are no more rules</li>
			</ol>
			<p>That's all!</p>
			<button id="rules-show" type="button" class="btn btn-info" onclick="onExplain();">Explain them!</button>
			<div id="rules-explain" style="margin-right: 20px;">
				<fieldset><h3>Rules, explained:</h3></fieldset>
				<dl>
					<div id="rule1">
						<dt >No DDOSing</dt>
							<dd>Let's face it, there's really no point in DDOSing this site to get the information. All you'll do is bring the site down and leave you unable to verify if what you did worked or not, and that's kind of pointless, isn't it?
								Therefore, no DDOSing. It wouldn't help you solve the problem easier, trust me. Attacking it with many computers isn't the way to go. Attacking it with your brain works though *hint Hint*
							</dd>
					</div>
					<div id="rule2">
						<dt>No Bruteforcing</dt>
							<dd>For those who don't know, bruteforcing is basically constantly trying and sending stuff to the server hoping you get it right. The most common example is a password field, where people keep on guessing passwords one by one until they hit it.
								Well, in this case, bruteforcing might work in getting the answer, but don't do it. Why? Becuase the rules say so. That's why. And because by bruteforcing, you're already sending a lot of requests to the server, thereby overloading the server and bringing it down. See above to why that is bad.
								Oh, and also becuase the point of this CTF is for you to learn how to get pass certain challenges, how to reverse engineer the website or the source to try to get past it. Bruteforcing isn't really teaching you that, and thus you're not learning anything.
							</dd>
					</div>
					<div id="rule4">
						<dt>Don't use the redirector page to continue</dt>
							<dd>The redirector page is the page that you visit after attempting to solve a challenge. IF you solved it successfully, the page will redirect you to the next page, otherwise it will redirect you back. While this is easy to circumvent - you can read the page source to find the next page, or just find out what you need to send to have it redirect you forward, this is not the intended solution. This page is required becaus github pages doesnt support server sided code, which otherwise this page would be done such that you can't find the next page or required data based on the page source. If you use this solution, it will work for solving all the challenges, which defeats the purpose of having multiple challenges.
							</dd>
					</div>
					<div id="rule4">
						<dt>There are no more rules</dt>
							<dd>At first look, this rule may seem stupid. It looks like there's kind of no point putting it there. "There are no more rules". Isn't it obvious? If you didn't put the rule there, doesn't it mean the same thing? What's up with that?
								Well, this rule clearly states that there are no more rules. You will become very irritated on trying to solve the puzzle if you keep on constraining yourself and thinking at a certain angle.
								Remember, there are no more rules. Anything might be creating the challenge, and something else may solve it. It may not be what you are thinking of at the time. Don't be afraid to try other tactics or look elsewhere. 
								Do not constrain yourself in thinking a certain method is the only way to solve the challenge. It's very likely it's not.
							</dd>
					</div>
				</dl>
			</div>
		</div>
		<script>
			function onExplain() {
				$('#rules-show').slideUp();
				$('#rules-explain').slideDown();
			}
			var currentHash = window.location.hash;
			currentHash = currentHash.substring(1);
			if(currentHash == "rule1" || currentHash == "rule2" || currentHash == "rule3")
			{
				document.getElementById("rules-show").setAttribute("style", "display: none;");
			}
			else
			{
				document.getElementById("rules-explain").setAttribute("style", "margin-right: 20px; display: none;");
			}
		</script>
		<?php
			$colorAnimateValues = array('rule1', 'rule2', 'rule3');
			include('/var/www/php/coloranimate.php');
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