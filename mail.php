<?php
if(isset($_POST['mailform'])) {

   /* CONDITIONS D'ENVOI (start) */

      if(!empty($_POST['prenom']) AND 
         !empty($_POST['nom']) AND 
         !empty($_POST['mail']) AND 
         !empty($_POST['numero']) AND 
         !empty($_POST['pack']) AND 
         !empty($_POST['message']))
	   {

   /* CONDITIONS D'ENVOI (end) */

      /* HEADER DES MAILS (start) */

         $subject1='Accuse de reception';
         $header1="MIME-Version: 1.0\r\n";
         $header1.='From:"Atypeak"<info@atypeak.be>'."\n";
         $header1.='Content-Type:text/html;'."\n";
         $header1.='Content-Transfer-Encoding: 8bit';

         
         $subject2='Contact';
         $header2="MIME-Version: 1.0\r\n";
         $header2.='From:"Client : '.$_POST['prenom'].' '.$_POST['nom'].'"<'.$_POST['mail'].'>'."\n";
         $header2.='Content-Type:text/html;'."\n";
         $header2.='Content-Transfer-Encoding: 8bit';
   
      /* HEADER DES MAILS (end) */

      /* MAIL POUR CLIENT (start) */

		   $message1='
         <html>
            <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Montserrat|Source+Sans+Pro&display=swap" rel="stylesheet">
      
            <body style="margin:0;font-family:"Montserrat",sans-serif;">
         
               <div style="background-color:#FFFFFF;">
         
                  <div style="background-color:#222;height:250px;width:100%;display:flex;align-items:center;">
                     <img src="http://atypeak.be/img/atypeak1.png" style="width:300px;margin-left:10%;">
                  </div>
         
                  <div style="background-color:#fe9f00;width:80%;height:160px;margin:auto;margin-top:-80px;display:flex;align-items:center;justify-content:center;"><h1 style="font-size:30px;color:white;text-align:center;width:100%;">'.$_POST['pack'].'</h1></div>

                  <div>
         
                     <p style="color:#262626;margin:50px 10% 10px">Cher/Chère '.$_POST['prenom'].' '.$_POST['nom'].'</p><br/>
                     <p style="color:#262626;margin:0 10% 10px">Nous avons bien reçu votre demande de <b>'.$_POST['pack'].'.</b></p><br/>
                     <p style="color:#262626;margin:0 10%">Vous trouverez ci-dessous les informations du contact.</p><br/>
                     <p style="color:#666B6F;margin:0 12% 10px">adresse email : <i>'.$_POST['mail'].'</i><br/>
                        numéro de téléphone : <i>'.$_POST['numero'].'</i>
                     </p><br/>
                     <p style="color:#262626;margin:0 10%">Ainsi que votre message :</p><br/>
                     <p style="color:#666B6F;margin:0 12% 10px"><i>" '.nl2br($_POST['message']).' "</i></p><br/>
                     <p style="color:#262626;margin:0 10% 40px">Nous vous remercions pour la confiance que vous nous accordez et vous contacterons dans les plus brefs délais.</p>
                     <p style="color:#262626;margin:0 10% 40px">Cordialement,</p>
                     <img src="http://atypeak.be/img/logo-2.png" style="margin:0 11% 10px;height:100px;width:100px;">
                     <p style="color:#262626;margin:0 10% 80px">L\'équipe Atypeak.</p>
         
                  </div>

                  <div style="height:100px;background-color:#191A1A;font-size:15px;color:white;display:flex;justify-content:center;align-items:center;flex-wrap:wrap;padding:20px;">
                     <div style="width:100%;display:flex;justify-content:center;">
                        <a style="text-decoration:none;color:white;margin:0 15px" href="tel:0032484547588">Appelez-nous</a>|
                        <a style="text-decoration:none;color:white;margin:0 10px" href="#">Instagram</a>|
                        <a style="text-decoration:none;color:white;margin:0 10px" href="#">Facebook</a>
                     </div>
                     <a style="text-decoration:none;color:rgb(190,190,190);width:100%;text-align:center;" href="http://www.atypeak.be">Retour sur le site</a>
                  </div>
         
                  <div style="height:60px;background:#222222;border-top:1px solid #2a2a2a;color:#ccc;display:flex;justify-content: center;align-items:center;padding: 0 10%;font-size:13px">
                     Agence de création et de communication web | Bruxelles | 2019
                  </div>

               </div>
            </body>
         </html>
         '; 

         mail($_POST['mail'], $subject1, $message1, $header1);
      
      /* MAIL POUR CLIENT (end) */



      /* MAIL POUR NOUS (start) */
      
         $message2='
            <html>
               <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Montserrat|Source+Sans+Pro&display=swap" rel="stylesheet">
                  
               <body style="margin:0;font-family:"Montserrat",sans-serif;">
                  
                  <div style="background-color:#FFFFFF;">
                  
                     <div style="background-color:#222;height:250px;width:100%;display:flex;align-items:center;">
                        <img src="http://atypeak.be/img/atypeak1.png" style="width:300px;margin-left:10%;">
                     </div>
                  
                     <div style="background-color:#fe9f00;width:80%;height:160px;margin:auto;margin-top:-80px;display:flex;align-items:center;justify-content:center;"><h1 style="font-size:30px;color:white;text-align:center;width:100%;">'.$_POST['pack'].'</text-align:center;width:100%;"></div>
                     
                     <div>
                  
                        <p style="color:#262626;margin:50px 10% 10px">Cher Atypeak,</p><br/>
                        <p style="color:#262626;margin:0 10% 10px">Vous avez reçu une demande de <b>'.$_POST['pack'].'.</b></p><br/>
                        <p style="color:#262626;margin:0 10%">Vous trouverez ci-dessous les informations du contact.</p><br/>
                        <p style="color:#666B6F;margin:0 12% 10px">
                           nom et prénom : <i>'.$_POST['nom'].' '.$_POST['prenom'].'</i><br/>
                           adresse email : <i>'.$_POST['mail'].'</i><br/>
                           numéro de téléphone : <i>'.$_POST['numero'].'</i>
                        </p><br/>
                        <p style="color:#262626;margin:0 10%">Ainsi que son message :</p><br/>
                        <p style="color:#666B6F;margin:0 12% 10px"><i>" '.nl2br($_POST['message']).' "</i></p><br/>
                        <p style="color:#262626;margin:0 10% 80px">N\'hésitez pas à le/la contacter dans les plus brefs délais.</p>
                  
                     </div>
                     
                     <div style="height:100px;background-color:#191A1A;font-size:15px;color:white;display:flex;justify-content:center;align-items:center;flex-wrap:wrap;padding:20px;">
                        <div style="width:100%;display:flex;justify-content:center;">
                           <a style="text-decoration:none;color:white;margin:0 10px" href="#">Instagram</a>|
                           <a style="text-decoration:none;color:white;margin:0 10px" href="#">Facebook</a>
                        </div>
                        <a style="text-decoration:none;color:rgb(190,190,190);width:100%;text-align:center;" href="http://www.atypeak.be">Retour sur le site</a>
                     </div>
                  
                     <div style="height:60px;background:#222222;border-top:1px solid #2a2a2a;color:#ccc;display:flex;justify-content: center;align-items:center;padding: 0 10%;font-size:13px">
                        Agence de création et de communication web | Bruxelles | 2019
                     </div>
                     
                  </div>
               </body>
            </html>
		   ';

         mail("info@atypeak.be", $subject2, $message2, $header2);

      /* MAIL POUR NOUS (end) */
      
      
   /* POP UP (start) */

      $msg="<p class='reponse-positive'>Votre mail a bien été envoyé !</p>";
   
  
   } else {
      $msg="<p class='reponse-negative'>Tous les champs doivent être complétés !</p>";
   }

   /* POP UP (end) */

}
?>

<style>

.reponse-positive {
   color: green;
   font-size: 13px;
   margin-top: 20px;
   margin-bottom: -40px
}

.reponse-negative {
   color: red;
   font-size: 13px;
   margin-top: 20px;
   margin-bottom: -40px
}

</style>