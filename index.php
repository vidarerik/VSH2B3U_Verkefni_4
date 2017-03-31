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

				//print("Row cnt : ". $result->num_rows); debug...
				//print("Field cnt : ". mysqli_num_fields($result)); debug...
				
				//Haus á töflu

				
				//innihald
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_array()) {
				        print('<tr><td><a href="update.php?kt='. $row[0] . '">'. $row[0] . '</a></td>'. ' <td> ' . $row[2] . ' <td> ' . $row["name"] . '</td></tr>');
				    }
				} else {
				    print("<tbody><tr><td>0 raðir í töflu = engin skráður</td></tr>");
				}
				
				mysqli_close($conn);

			?>
	<div class="flexin">
	<h1 class="borderbox haed breidd">Welcome to David Icke Official Website</h1>
	<input type="checkbox" id="toggle" class="menuInput">
	<label for="toggle" class="menuLabel">&#9776;Menu</label>
	<nav>
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
				

				<h2 class="borderbox">Vefurinn fjallar um samsæriskenningar David Icke og hans samkomu sem mun verða haldin hér á landi á næstu dögum í sumar, á vefnum koma fram upplýsingar um hvenær og hvar samkoman verður haldin, tími samkomu og hverning fólk getur nálgast miða og gefa email fyrir fréttir.</h2>

				<div class="parallaxnmtvo"></div>

				<h2 class="borderbox">Markmið með gerð vefsins er að reyna auglýsa samsæriskennigar David Iceke og hans samkomur betur hér á landi og hvað við getum lært varðandi samsæriskenningamenningu. Á sama tíma reyna líka að fá fólk til að hafa hugan meira opinn fyrir samsærum og óþekktum hlutum sem við skiljum ekki til fulls.</h2>

				<div class="parallaxnmthrju">
					<div class="borderbox moveInside">
						<h3>Join the fanclub !!</h3>
							<!--form action="#" method="post"-->
							<table>
								
									<tr>
										<td>
											<label>Nafn: </label>
										</td>
										<td>
											<input type="text" name="nafn">
										</td>
									</tr>
									<tr>
										<td>
											<label>Email: </label>
										</td>
										<td>
											<input type="text" name="Email">
										</td>
									</tr>
								
							</table>
							<!--/form-->
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
		</div>
	</footer>
		
	</div>
</body>
</html>