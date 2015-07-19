<!DOCTYPE html>

<html>
	<head>
		<title>VVN Best - Aanmeldingsformulier</title>
		<link href="http://www.vvnbest.nl/style.css" rel = stylesheet /> 
		<link href="http://vvn.nl/sites/all/themes/vvn/favicon.ico" rel="shortcut icon">   
		<meta name="description" content="Aanmeldingsformulier voor de caravancontrole">
		<meta name="author" content="Code Panda - www.codepanda.nl">
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="header-bg">
			<!--Begin Wrapper-->
			<div class="wrapper">
				<!--Begin Header-->
				<div class="header">
					<a href="http://www.vvnbest.nl/">
						<img src="http://www.vvnbest.nl/images/header_logo.png" />
					</a>
				</div>
				<!--Einde Header-->
				<!--Begin Menu-->
				<div class="menu">
					<a href="http://www.vvnbest.nl/"><div class="item"><p>Home</p></div></a>
					<a href="http://www.vvnbest.nl/nieuws"><div class="item"><p>Nieuwsarchief</p></div></a>
					<a href="http://www.vvnbest.nl/fotoboek"><div class="item"><p>Fotoboek</p></div></a>
					<a href="http://www.vvnbest.nl/acties"><div class="item"><p>Acties</p></div></a>
					<a href="http://www.vvnbest.nl/contact"><div class="item"><p>Contact</p></div></a>
				</div>
				<!--Einde Menu-->
				<!--Begin Container-->
				<div class="container">
					<p><?php echo $feedback; ?></p>
					<form name="contactform" method="post" action="sendForm.php" style= "padding-top:10px;"> 
						<table width="500px">						 
							<tr>						 
								<td valign="top">						 
						 			<label for="first_name">Voornaam</label>						 
						 		</td>						 
								<td valign="top">						 
									<input  type="text" name="first_name" maxlength="50" size="30">						 
								</td>						 
							</tr>						 
							<tr>						 
								<td valign="top">						 
									<label for="last_name">Achternaam</label>						 
								</td>						 
								<td valign="top">						 
									<input  type="text" name="last_name" maxlength="50" size="30">						 
								</td>						 
							</tr>
							<tr>						 
								<td valign="top">						 
									<label for="zipcode">Adres</label>					 
								</td>						 
								<td valign="top">						 
									<input  type="text" name="address" maxlength="80" size="30">						 
								</td>						 
							</tr>
							<tr>						 
								<td valign="top">						 
									<label for="zipcode">Postcode</label>					 
								</td>						 
								<td valign="top">						 
									<input  type="text" name="zipcode" maxlength="80" size="30">						 
								</td>						 
							</tr>
							<tr>						 
								<td valign="top">						 
									<label for="city">Woonplaats</label>					 
								</td>						 
								<td valign="top">						 
									<input  type="text" name="city" maxlength="80" size="30"> 
								</td>						 
							</tr>						 
							<tr>						 
								<td valign="top">						 
									<label for="email">Email</label>						 
								</td>						 
								<td valign="top">						 
									<input  type="text" name="email" maxlength="80" size="30">						 
								</td>						 
							</tr>						 
							<tr>						 
								<td valign="top">						 
									<label for="telephone">Telefoon</label>
								</td>						 
								<td valign="top">						 
									<input  type="text" name="telephone" maxlength="30" size="30">						 
								</td>						 
							</tr>
							<tr>
								<td valign="top">
									<label for="preferredTime">Voorkeurstijd</label>
								</td>
								<td valign="top">
									<select name="preferredTime">
  										<option value="none">Geen voorkeur</option>
  										<option value="9AM">Tussen 09:00 en 09:30</option>
  										<option value="9.5AM">Tussen 09:30 en 10:00</option>
  										<option value="10AM">Tussen 10:00 en 10:30</option>
  										<option value="10.5AM">Tussen 10:30 en 11:00</option>
  										<option value="11AM">Tussen 11:00 en 11:30</option>
  										<option value="11.5AM">Tussen 11:30 en 12:00</option>
  										<option value="12AM">Tussen 12:00 en 12:30</option>
  										<option value="1PM">Tussen 13:00 en 13:30</option>
  										<option value="1.5PM">Tussen 13:30 en 14:00</option>
  										<option value="2PM">Tussen 14:00 en 14:30</option>
  										<option value="2.5PM">Tussen 14:30 en 15:00</option>
  										<option value="3PM">Tussen 15:00 en 15:30</option>
  										<option value="3.5PM">Tussen 15:30 en 16:00</option>
									</select>
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td valign="top">
									<label for="brandCaravan">Merk caravan</label>
								</td>
								<td valign="top">
									<input type="text" name="brandCaravan" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="modelCaravan">Type caravan</label>
								</td>
								<td valign="top">
									<input type="text" name="modelCaravan" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="yearCaravan">Bouwjaar caravan</label>
								</td>
								<td valign="top">
									<input type="text" name="yearCaravan" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="licenseCaravan">Kenteken caravan</label>
								</td>
								<td valign="top">
									<input type="text" name="licenseCaravan" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="maxWeightCaravan">Max. toelaatbaar gewicht:</label>
								</td>
								<td valign="top">
									<input type="text" name="maxWeightCaravan" maxlength="80" size="30">
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td valign="top">
									<label for="brandAuto">Merk auto</label>
								</td>
								<td valign="top">
									<input type="text" name="brandAuto" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="modelAuto">Type auto</label>
								</td>
								<td valign="top">
									<input type="text" name="modelAuto" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="yearAuto">Bouwjaar auto</label>
								</td>
								<td valign="top">
									<input type="text" name="yearAuto" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="licenseAuto">Kenteken auto</label>
								</td>
								<td valign="top">
									<input type="text" name="licenseAuto" maxlength="80" size="30">
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label for="maxWeightAuto">Max. gewicht trekkend voertuig geremd</label>
								</td>
								<td valign="top">
									<input type="text" name="maxWeightAuto" maxlength="80" size="30">
								</td>
							</tr>
							<tr>						 
								<td colspan="2" style="text-align:center">						 
									<input type="submit" value="Aanmelden">						 
								</td>						 
							</tr>						 
						</table>					 
					</form>
				</div>
				<!--Einde Container-->
			</div>
			<!--Einde Wrapper-->
		</div>
		<div class="footer">
			<p>&copy Copyright CodePanda 2014. Alle rechten voorbehouden.</p>
		</div>
	</body>
</html>