<!doctype html>
<html>
<head>
<script src="https://kit.fontawesome.com/eca43c78f4.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/contactStyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	
	<header>
	<div class="banner">

	<nav class="main-menu">
	
		<ul>
			<li><a href="#">face</a></li>
			<li><a href="#">lip</a></li>
			<li><a href="#">eyes</a></li>
			<li><a href="#">Brows</a></li>
			<li><a href="#">Brushes</a></li>
			<li><a href="#">Sales</a></li>
		</ul>
	</nav>
	<span class="bar-hamburger">
	<i class="far fa-user fas"><i class="fas fa-search"></i>
		<i class="fas fa-shopping-bag"></i></i>
		<!--<img src="img/logo2.png" id="logo-img">
	
		<input class="search_input" type="text" id="q" name="q" maxlength="200" value="" placeholder="Search" autocomplete="off">-->
	</span>
	</div>
	</header>
		
		
	
		<div class="containerContent">
		
		<h1>Contact</h1>
	
	<div class="table">
				<form action="inschrijven.php" method="POST">
					<table class="form-table">
					<tr>
						<td><label for="naam">Naam:</label></td>
	                      <td><input id="naam" type="text" placeholder="Naam" placeholder="naam" name="naam"/></td>
						</tr>
						<tr>
							<td><label for="voornaam"> Voornaam: </label></td>
							<td><input type="text" id="voornaam" name="voornaam" placeholder="voornaam" name="voornaam"></td>
						</tr>
						<tr>	
							<td><label for="email" >Email:</label></td>
							<td><input id="email" type="email" placeholder="Email" name="email"/></td>
						</tr>
						<tr>
						 <td><label for="bericht">Bericht:</label> </td>
						  <td><textarea id="bericht" placeholder="Bericht" rows ="2" cols="30" name="bericht">  </textarea></td>
						</tr>
						<tr>
							<td colspan="2"> <input type="submit" value="verzenden"></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
	
	<footer>
		
	<div class="socialMedia footerdiv">
		<h4 id="followparagraaf">Follow us</h4>
		<a href="https://www.facebook.com/facebookapp" class="socialMedia"><i class="fab fa-facebook-square"></i></a>
		<a href="https://www.instagram.com/" class="socialMedia"><i class="fab fa-instagram"></i></a>
		<a href="https://twitter.com/" class="socialMedia"><i class="fab fa-twitter"></i></a>
		<a href="https://www.snapchat.com/l/nl-nl/" class="socialMedia"><i class="fab fa-snapchat-ghost"></i></a>
	</div>
		
		
	<div class="bankKarten footerdiv">
		<h4>Betaalmethoden</h4>
		<i class="fab fa-cc-paypal"></i>
		<i class="fab fa-cc-visa"></i>
		<i class="fab fa-cc-mastercard"></i>
		<i class="fas fa-credit-card"></i>
		<i class="fab fa-cc-diners-club"></i>
	</div>
		
	
		<div id="copyRight">
		<p >2019 &copy; Joy Beauty</p>
		</div>
	
	
	</footer>
</body>
</html>
	
	<script src="js/script.js"></script>
</body>
</html>
<?php /*Ik open php */
$naam = $voornaam = $email = $bericht = $error = ""; // Ik definieer enkele lege variabelen.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Ik controleer of er iets verzonden is geweest.
		if(isset($_POST['naam'])){ // Ik controleer of de naam goed is doorgestuurd.
			if(!empty($_POST['naam'])){ // Ik controleer of de gebruiker wel degelijk een naam heeft opgegeven.
				$naam = $_POST['naam']; // Ik schrijf de opgegeven naam over naar de variabele naam.
			}
			else {
			$error += "Gelieve een naam op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		if(isset($_POST['voornaam'])){ // Ik controleer of de voornaam goed is doorgestuurd.
			if(!empty($_POST['voornaam'])){ // Ik controleer of de gebruiker wel degelijk een voornaam heeft opgegeven.
				$voornaam = $_POST['voornaam']; // Ik schrijf de opgegeven voornaam over naar de variabele voornaam.
			}
			else {
			$error += "Gelieve een voornaam op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		if(isset($_POST['email'])){ // Ik controleer of het email-adres goed is doorgestuurd.
			if(!empty($_POST['email'])){ // Ik controleer of de gebruiker wel degelijk een email-adres heeft opgegeven.
				$email = $_POST['email']; // Ik schrijf het opgegeven email-adres over naar de variabele email.
			}
			else {
			$error += "Gelieve een e-mailadres op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		
		if(isset($_POST['bericht'])){ // Ik controleer of het bericht goed is doorgestuurd.
			if(!empty($_POST['bericht'])){ // Ik controleer of de gebruiker wel degelijk een bericht heeft opgegeven.
				$bericht = $_POST['bericht']; // Ik schrijf het opgegeven bericht over naar de variabele email.
			}
			else {
			$error += "Gelieve een bericht op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		
		if(empty($error)){
		
		$bericht = "Beste <br><br> $naam $voornaam heeft u het onderstaande bericht gestuurd. <br><br> <b>Bericht:</b> <br> $bericht <br><br> U kan deze persoon contacteren via volgend e-mailadres: $email";
		$ontvanger = "rojeeh8877@gmail.com"; //Geef hier het e-mailadres van de ontvanger op.
		$onderwerp = "Makeup Joy- Meer info";
		$headers = "From: joy@rojeeh.be " . "\r\n"; //Geef hier je eigen e-mailadres op dat waaruit de mail verzonden moet worden.
		$headers .= "Reply-To: rojeeh8877@gmail.com" . "\r\n"; //Geef hier je eigen e-mailadres op.
		$headers .= "CC: \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		
			mail($ontvanger, $onderwerp, $bericht, $headers) or die ("De mail kon niet worden verstuurd."); //Hier wordt de mail verzonden.
		echo "Uw bericht werd verzonden.";
		} else {
		echo $error;
			
			
		}
		
	}

?>

