<?php
if(isset($_POST['mailform']))
{
   if(!empty($_POST['prenom']) AND 
      !empty($_POST['nom']) AND 
      !empty($_POST['mail']) AND 
      !empty($_POST['numero']) AND 
      !empty($_POST['pack']) AND 
      !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Formulaire de contact"<studio@gmail.com>'."\n";
		$header.='Content-Type:text/html;'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
            <div style="background-color:#DDDDDD; padding: 10%;">

               <h3 style="color: #153350; margin-bottom: 40px;">Vous avez reçu un message !</h3>
               <h4 style="color:rgb(20,14,7)"><u>Informations du contact :</u></h4>
      
               <p>Prénom, Nom : <i>'.$_POST['prenom'].' '.$_POST['nom'].'</i><br/>
                  Mail : <i>'.$_POST['mail'].'</i><br/>
                  Numero : <i>'.$_POST['numero'].'</i><br/>
               </p>

               <h4 style="color:rgb(20,14,7)"><u>Pack demandé :</u> <i>'.$_POST['pack'].'</i></h4>

               <h4 style="color:rgb(20,14,7)"><u>Message :</u></h4>
               <p><i>" '.nl2br($_POST['message']).' "</i></p>

               <h4 style="text-align:right; color:#345f87; margin-top: 30px;">N\'hésitez pas à lui répondre.</h4>
               <h4 style="text-align:right; color:#939393">Studio Corporation - Site</h4>

            </div>
			</body>
		</html>
      ';
      
      $message2='
		<html>
			<body>
            <div style="background-color:#DDDDDD; padding: 10%;">

               <h3 style="color: #153350; margin-bottom: 40px;">Merci pour votre message !</h3>
               <h4 style="color:rgb(20,14,7)"><u>Informations du contact :</u></h4>
      
               <p>Prénom, Nom : <i>'.$_POST['prenom'].' '.$_POST['nom'].'</i><br/>
                  Mail : <i>'.$_POST['mail'].'</i><br/>
                  Numero : <i>'.$_POST['numero'].'</i><br/>
               </p>   

               <h4 style="color:rgb(20,14,7)"><u>Message :</u></h4>
               <p><i>" '.nl2br($_POST['message']).' "</i></p>

               <h4 style="text-align:right; color:#345f87; margin-top: 30px;">Nous vous répondrons au plus vite.</h4>
               <h4 style="text-align:right; color:#939393">Studio Corporation</h4>

            </div>
			</body>
		</html>
		';

      mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
      mail($_POST['mail'], "Accuse de reception - Studio Corporation", $message2, $header);
		$msg="<p class='mail1'>Votre message a bien été envoyé !</p>";
	}
	else
	{
		$msg="<p class='mail2'>Tous les champs doivent être complétés !</p>";
	}
}
?>

<style>

.mail1 {
   color: green;
   font-size: 13px;
}

.mail2 {
   color: red;
   font-size: 13px;
}

</style>