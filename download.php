<!doctype html>
<!--
	Copyright 2018-present Mooddy SAS. All Rights Reserved.
-->
<SCRIPT language=javascript>
function redirectOnUserAgent() {
var mapping = {
// scheme : market://details?id=<package_name>
'android': 'market://details?id=com.mooddy.app',

//scheme : itms-apps://itunes.apple.com/app/id<numeric_app_id>
'iphone': 'itms-apps://itunes.apple.com/fr/app/mooddy/id1105748988',

// if availables :
'ipad': 'itms-apps://itunes.apple.com/fr/app/mooddy/id1105748988',
'ipod':'itms-apps://itunes.apple.com/fr/app/mooddy/id1105748988',
}

var userAgent = navigator.userAgent.toLowerCase();
for (var dev in mapping) {
if (userAgent.search(dev) != -1) {
    window.location = mapping[dev];
    return;
}
}

 else #redirect to another page, or nothing
 window.location = 'https://www.final-fantasy.ch';
}
</SCRIPT>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="&Eacute;coutez la musique des personnes qui vous entourent">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mooddy - &Eacute;motion musicale</title>
		<link rel="shortcut icon" href="./favicon.ico" />
		<link href="css/style.css" rel="stylesheet">
		<link href="css/font.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body onload="redirectOnUserAgent();">
		<header class="container">
			<!--
			<div style="border-radius: 5px; margin-bottom: 5%; padding: 10px; text-align: center; color: #2a2f4f; background-color: yellow">
				<p style="font-size:14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			 -->
			<div class="responsive intro-container">
				<div class="app-icon">
					<a href="http://mooddy-app.com/">
						<img alt="App icon" src="img/app-icon.png">
					</a>
					<!-- <p>Rejoignez la beta public</p> -->
				</div>
				<div class="intro">
					<h2>Découvrez la musique de ceux qui vous entourent</h2>
				</div>


				<a class="fa fa-apple primary-btn app-store-btn" href="https://itunes.apple.com/fr/app/mooddy/id1105748988">Apple Store</a>
				<a class="fa fa-android primary-btn play-store-btn" href="https://play.google.com/store/apps/details?id=com.mooddy.app">Play Store</a>

				<div class="social">
                    <a href="https://www.facebook.com/mooddyapp/" class="fa fa-facebook-official" style="padding: 3px"></a>
                    <a href="https://twitter.com/mooddy_app" class="fa fa-twitter" style="padding: 3px"></a>
                    <a href="https://www.instagram.com/mooddy_app/" class="fa fa-instagram" style="padding: 3px"></a>
                </div>
			</div>
			<div class="responsive iphone">
				<div class="iphone-screenshot">
					<img src="img/app-screenshot.png" alt="App screenshot">
				</div>
				<img class="iphone-mask" src="img/iphone.png">
			</div>
		</header>
		<footer class="container footer">
			<div class="sep"></div>
			<p class="responsive credit">&copy; 2019 Mooddy SAS</p>
			<div class="responsive contact">
				<a href="mailto:contact@mooddy-app.com?subject=Hello">Contact</a>
				<a href="cgu.html">CGU</a>
				<a href="politique-de-confidentialite.html">Politique de Confidentialit&eacute;</a>
			</div>
		</footer>
		<!--
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'auto');
			ga('send', 'pageview');
		</script>
		-->
	</body>
</html>
