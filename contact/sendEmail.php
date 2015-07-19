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
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('U heeft bepaalde velden niet ingevuld.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Uw emailadres lijkt niet te kloppen.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'U heeft geen voornaam opgegeven.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'U heeft geen achternaam opgegeven.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Uw bericht is te kort.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Bericht verzonden vanaf het contactformulier: \n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($first_name)."\n";
 
    $email_message .= "Achternaam: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telefoon: ".clean_string($telephone)."\n";
 
    $email_message .= "Bericht:\n".clean_string($comments)."\n";
 
     
 
     
 
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
          <p>Bedankt voor uw bericht, we zullen zo snel mogelijk een reactie terug sturen.</p>
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
 
 
<?php
}
 
?>