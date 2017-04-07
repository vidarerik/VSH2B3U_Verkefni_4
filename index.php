<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Skilaverkefni 4</title>
	<link rel="stylesheet" type="text/css" href="css/allstyles.css">
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/bf0c7f3582/UntitledProject/style.css">
	<link rel="icon" href="img/reptthumb.png">
</head>
<body class="body">
	<?php
				$servername = "tsuts.tskoli.is";
				$username = "1008912399";
				$password = "mypassword";
				$myDb = "1008912399_verkefni4_vsh";
				// Create connection
				$conn = new mysqli($servername, $username, $password,$myDb);

				// Check connection $conn->connect_error
				if ($conn === false) {
				    die("Villa, getum ekki tengst: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM fanclub";
				$result = $conn->query($sql);

				
				
				
				mysqli_close($conn);

			?>
	<div class="flexin">
	<h1 class="borderbox haed breidd headcolor">Welcome to David Icke Official Website</h1>
	<!--
	<input type="checkbox" id="toggle" class="menuInput">
	<label for="toggle" class="menuLabel">&#9776;Menu</label>
	<nav>
	-->
	<!--
		<ul class="topMenu">
			<li class="button one"><a href="#">Home</a></li>
			<li class="button two"><a href="videos.html">Videos</a></li>
			<li class="button three"><a href="links.html">Links</a></li>
			<li class="button four"><a href="webgl/webgl.html">Games *Firefox*</a></li>
			<li class="button five"><a href="contacts.html">Contacts</a></li>
		</ul>

	-->
	<div class="navbar">
	  		<a href="http://share2.earthlinktele.com.hypestat.com/"><div class="icon-share2"></div></a>
			<a href="https://www.facebook.com/tbfprulz"><div class="icon-facebook2"></div></a>
			<a href="https://www.youtube.com/user/Vikinggamingandvids"><div class="icon-youtube2"></div></a>
			<a href="https://github.com/vidarerik/hopverkefni"><div class="icon-github"></div></a>
			<a href="https://www.reddit.com/r/gaming/"><div class="icon-reddit"></div></a>
	</div>
	</nav>
	<header class="mainHeader">
		
	</header>

	<div class="mainContent">
		<article>
			<div class="parallaxnmeitt"></div>

			
			<content>
				
				<a class="tengill" href="http://www.mbl.is">
					<div class="verticalauglysing">
						<p class="tossing"><span>Do you wan't to get rid of annoying ads. This is the right place click here below</span></p>
						<button class="buttonicon pulse">Click Me</button>
					</div>
				</a>
				<h2 class="borderbox Hugleft ">David Vaughan Icke is an English writer, public speaker, and former media personality best known for his views on what he calls "who and what is really controlling the world". Describing himself as the most controversial speaker and author in the world, he has written many books explaining his position, dubbed "New Age conspiracism", and has attracted a substantial following across the political spectrum. His 533-page The Biggest Secret (1999) has been called the conspiracy theorist's Rosetta Stone.</h2>

				<div class="parallaxnmtvo"></div>

				<h2 class="borderbox Hugleft">"David Icke makes his First Live Appearance in Iceland, a country that in David's very own words "Doesn't take Sh*t" and that's something to be internationally celebrated. David's Full 12 Hour show that takes the Audience on a Journey from the World they see today (Terrorism, Media Bias, Illuminati, Secret Society's) right through to the Nature of Reality and Who We Really Are and What We Are..."

				<br>

				<br>

				"David's Live Events are something truely unique, so many people wonder how one man can speak for 12 hours, and hold an audience, the hardest thing for David is keeping the event to that time, with the mountain of information he has uncovered during his 26 years of research into these topics these events  could span an entire week."

				<br>

				<br>

				"These events act as a simple step by step guide that leads the Audience from A to B to C and beyond, and leaves the audience at the end of the day with knowledge, understanding and explanations you'll find no where else."

				<br>

				<br>

				"What's all the hype about? Come and Find Out on Sunday 26th March..."</h2>

				<div class="parallaxnmthrju">
					<div class="borderbox moveInside">
						<h3>Join the fanclub !!</h3>
							<form action="insert.php" method="post">
							<table>
								
									<tr >
										<td>
											<label class="phpLabelTop">Nafn: </label>
										</td>
										<td>
											<input type="text" name="name" class="phpInputTop" placeholder="Full name" required title="Vinsamlegast skráið nafn">
										</td>
									</tr>
									<tr>
										<td>
											<label class="phpLabelBot">Símanúmer: </label>
										</td>
										<td>
											<input type="text" name="simanmr" class="phpInputBot" placeholder="123 4567" pattern="\d{3}(?:[\-\s]?)\d{4}" title="Vinsamlegast skráið 7 tölustafi" required>
										</td>
									</tr>
									<tr>
										<td>
										<button type="submit" class="takki">Click Me!</button>
										</td>
									</tr>
								
							</table>
							</form>
					</div>
				</div>

			</content>
			
		</article>
	</div>

	<footer>
		<p class="footertxt"> #1 Rule on this site is: No hate speech / No illegal activity. [Reptilians  &copy;]</p>

		<hr>

		<div>
			<figure class="resize"><img src="img/giphyreptile.gif"></figure>	
		</div>

		<hr>

		<div class="flexbot">
			<a href="http://share2.earthlinktele.com.hypestat.com/"><div class="icon-share2"></div></a>
			<a href="https://www.facebook.com/tbfprulz"><div class="icon-facebook2"></div></a>
			<a href="https://www.youtube.com/user/Vikinggamingandvids"><div class="icon-youtube2"></div></a>
			<a href="https://github.com/vidarerik/hopverkefni"><div class="icon-github"></div></a>
			<a href="https://www.reddit.com/r/gaming/"><div class="icon-reddit"></div></a>
		</div>

		</div>
	</footer>
		
	</div>
</body>
</html>