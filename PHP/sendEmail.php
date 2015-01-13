<?php
 
if(isset($_POST['email'])) 
{
    $email_to = "sandergeraedts@live.nl"; 
    $email_subject = "Contactformulier website"; 
	
    function died($error) 
	{
		echo "De volgende dingen zijn fout gegaan: <br/>";
        echo $error; 
        die();
 
    } 
	
    // validation expected data exists 
    if(!isset($_POST['tbSender']) ||
 
        !isset($_POST['tbEmail']) ||
 
        !isset($_POST['tbPhone']) ||
 
        !isset($_POST['taReaction'])) {
 
        died('Niet alle velden zijn ingevuld.');      
 
    }    
 
    $name = $_POST['tbSender']; // required
    $email_from = $_POST['tbEmail']; // required 
    $telephone = $_POST['tbPhone']; // not required 
    $comments = $_POST['comments']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) 
  {
 
    $error_message .= 'Het E-mailadres is niet valide, controleer nog een keer of het adres klopt.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) 
  {
 
    $error_message .= 'Controleer uw naam nog een keer alstublieft.<br />';
 
  }
 
  if(strlen($comments) < 2) 
  {
 
    $error_message .= 'Uw bericht moet minimaal 2 tekens lang zijn.<br />';
 
  }
 
  if(strlen($error_message) > 0) 
  {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Naam: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n"; 
    $email_message .= "Telefoon: ".clean_string($telephone)."\n"; 
    $email_message .= "Bericht: \n".clean_string($comments)."\n";    
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>

Thank you for contacting us. We will be in touch with you very soon.
 

<?php
 
}
 
?>