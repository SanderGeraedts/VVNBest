<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>VVN Best</title>
		<link href="http://www.vvnbest.nl/style.css" rel = stylesheet />
		<link href="http://vvn.nl/sites/all/themes/vvn/favicon.ico" rel="shortcut icon">  
		<meta name="description" content="Veilig Verkeer Nederland Afdeling Best.">
		<meta name="author" content="Code Panda - www.codepanda.nl">
		<meta charset="UTF-8">
		<script language="javascript" src="http://www.vvnbest.nl/javascript/jquery.js"></script>
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
					<!--Slideshow-->
					<div id="slider">
						<ul class="slides">
		                    <li class="slide"><img src="http://www.vvnbest.nl/images/slide_1.jpg" /></li>
		                    <li class="slide"><img src="http://www.vvnbest.nl/images/slide_2.jpg" /></li>
		                    <li class="slide"><img src="http://www.vvnbest.nl/images/slide_3.jpg" /></li>
		                    <li class="slide"><img src="http://www.vvnbest.nl/images/slide_4.jpg" /></li>
		                    <li class="slide"><img src="http://www.vvnbest.nl/images/slide_1.jpg" /></li>
		                </ul>               
					</div>
					<script type="text/javascript" src="http://www.vvnbest.nl/javascript/slideshow.js"></script>
					
					<!--Rechter menubalk -->
					<a href="http://www.vvnbest.nl/webmail"><div class="HP_sideBar"><p>VVN Intranet</p></div><a/>
					<a href="http://www.vvnbest.nl/caravancontrole"><div class="HP_sideBar"><p>Caravan Controle</p></div><a/>
					<a href="http://www.vvnbest.nl/verkeersexamen"><div class="HP_sideBar"><p>Verkeersexamen</p></div><a/>
					<a href="http://www.vvnbest.nl/agenda"><div class="HP_sideBar"><p>Agenda</p></div><a/>
					
					<!--Acties-->
					<div class="HP_eventsOutside">
						<h1><?php perch_content('Titel linker textveld');?></h1>
						<p>
							<?php perch_content('Linker textveld');?>
						</p>
					</div>
					<div class="HP_eventsMiddle">
						<h1><?php perch_content('Titel middelste textveld');?></h1>
						<p>
							<?php perch_content('Middelste textveld');?>
						</p>
					</div>
					<div class="HP_eventsOutside">
						<h1><?php perch_content('Titel rechter textveld');?></h1>
						<p>
							<?php perch_content('Rechter textveld');?>
						</p>
					</div>						
					</div>
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