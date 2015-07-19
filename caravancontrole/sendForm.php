<?php
 
if(isset($_POST['email'])) { 
    $email_to = "info@vvnbest.nl"; 
    $email_subject = "Contactformulier VVNBest";
 
    function died($error) {
 
        // your error code can go here
 
        echo "Oeps, de volgende dingen zijn er fout gegaan!<br />";
        echo $error."<br /><br />";
        die(); 
    }    
 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $email_from = $_POST['email'];
    $telephone = $_POST['telephone'];
    $preferredTime = $_POST['preferredTime'];
    $brandCaravan = $_POST['brandCaravan'];
    $modelCaravan = $_POST['modelCaravan'];
    $yearCaravan = $_POST['yearCaravan'];
    $licenseCaravan = $_POST['licenseCaravan'];
    $maxWeightCaravan = $_POST['maxWeightCaravan'];
    $brandAuto = $_POST['brandAuto'];
    $modelAuto = $_POST['modelAuto'];
    $yearAuto = $_POST['yearAuto'];
    $licenseAuto = $_POST['licenseAuto'];
    $maxWeightAuto = $_POST['maxWeightAuto'];
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Uw emailadres lijkt niet te kloppen.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
    $email_message = "Bericht verzonden vanaf het aanmeldingsformulier:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($first_name)."\n"; 
    $email_message .= "Achternaam: ".clean_string($last_name)."\n";
    $email_message .= "Adres :".clean_string($address)."\n";
    $email_message .= "Postcode :".clean_string($zipcode)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n"; 
    $email_message .= "Telefoon: ".clean_string($telephone)."\n"; 
    $email_message .= "Voorkeurstijd: ".clean_string($preferredTime)."\n\n";
    $email_message .= "Merk Caravan: ".clean_string($brandCaravan)."\n";
    $email_message .= "Type Caravan: ".clean_string($modelCaravan)."\n";
    $email_message .= "Bouwjaar Caravan: ".clean_string($yearCaravan)."\n";
    $email_message .= "Max.toelaatbaar gewicht: " .clean_string($maxWeightCaravan)."\n\n";
    $email_message .= "Merk Auto: ".clean_string($brandAuto)."\n";
    $email_message .= "Type Auto: ".clean_string($modelAuto)."\n";
    $email_message .= "Bouwjaar Auto: ".clean_string($yearAuto)."\n";
    $email_message .= "max.kg. trekkend voertuig geremd: " .clean_string($maxWeightAuto)."\n";

 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here --> 
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
          <p>Bedankt voor uw aanmelding, we zullen zo snel mogelijk een reactie terug sturen.</p>
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
 
 
<?php
}
 
?>