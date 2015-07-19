<!DOCTYPE html>

<html>
	<head>
		<title>VVN Best - Contact</title>
		<link href="http://www.vvnbest.nl/style.css" rel = stylesheet /> 
		<link href="http://vvn.nl/sites/all/themes/vvn/favicon.ico" rel="shortcut icon">   
		<meta name="description" content="Stuur ons een berichtje als je vragen hebt!">
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
					<div class="contact">
						<p><?php echo $feedback; ?></p>
						<form name="contactform" method="post" action="sendEmail.php"> 
							<table width="450px">						 
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
										<label for="comments">Bericht</label>						 
									</td>						 
									<td valign="top">						 
										<textarea  name="comments" maxlength="1000" cols="25" rows="6" size ="30"></textarea>						 
									</td>						 
								</tr>						 
								<tr>						 
									<td colspan="2" style="text-align:center">						 
										<input type="submit" value="Verzenden">						 
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
			<p>&copy Copyright CodePanda 2015. Alle rechten voorbehouden.</p>
		</div>
	</body>
</html>