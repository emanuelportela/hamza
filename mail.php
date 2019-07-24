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

         $header="MIME-Version: 1.0\r\n";
         $header.='From:"Formulaire de contact"<studio@gmail.com>'."\n";
         $header.='Content-Type:text/html;'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
   
      /* HEADER DES MAILS (end) */

      /* MAIL SI PACK MEDIA (start) */

         if ($_POST['pack'] == 'Media') {
		      $message='
		      <html>
		      	<body>
                  <div style="background-color:#DDDDDD; padding: 10%;">

                     <div style="background-color:#f49d2c; height: 40px; width: 100%; color: white; margin-bottom: 40px; font-size: 25px; padding: 5px 0; text-align:center;">Pack Media</div>

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

            mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
         }
      
      /* MAIL SI PACK MEDIA (end) */


      /* MAIL SI PACK WEB (start) */

         if ($_POST['pack'] == 'Web') {
            $message='
            <html>
               <body>
                  <div style="background-color:#DDDDDD; padding: 10%;">
   
                     <div style="background-color:#70b25b; height: 40px; width: 100%; color: white; margin-bottom: 40px; font-size: 25px; padding: 5px 0; text-align:center;">Pack Web</div>
   
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
   
            mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
         }
      
      /* MAIL SI PACK WEB (end) */


      /* MAIL SI PACK GRAPHISME (start) */

         if ($_POST['pack'] == 'Graphisme') {
            $message='
            <html>
               <body>
                  <div style="background-color:#DDDDDD; padding: 10%;">
      
                     <div style="background-color:#69b3ef; height: 40px; width: 100%; color: white; margin-bottom: 40px; font-size: 25px; padding: 5px 0; text-align:center;">Pack Graphisme</div>

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
      
            mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
         }
      
      /* MAIL SI PACK GRAPHISME (end) */


      /* MAIL SI PACK DUO (start) */

         if ($_POST['pack'] == 'Pack Duo') {
		      $message='
		      <html>
		      	<body>
                  <div style="background-color:#DDDDDD; padding: 10%;">

                     <div style="background-color:#f47373; height: 40px; width: 100%; color: white; margin-bottom: 40px; font-size: 25px; padding: 5px 0; text-align:center;">Pack Duo</div>

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

            mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
         }
      
      /* MAIL SI PACK DUO (end) */


      /* MAIL SI PACK TRIO (start) */

         if ($_POST['pack'] == 'Pack Trio') {
            $message='
            <html>
               <body>
                  <div style="background-color:#DDDDDD; padding: 10%;">
   
                     <div style="background-color: #cf8fea; height: 40px; width: 100%; color: white; margin-bottom: 40px; font-size: 25px; padding: 5px 0; text-align:center;">Pack Trio</div>
   
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
   
            mail("studio@gmail.com", "Contact - Studio Corporation", $message, $header);
         }
         
      /* MAIL SI PACK TRIO (end) */


      /* MAIL ACCUSE DE RECEPTION (start) */
      
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

         mail($_POST['mail'], "Accuse de reception - Studio Corporation", $message2, $header);

      /* MAIL ACCUSE DE RECEPTION (end) */
      
      
   /* POP UP (start) */

      $msg="<p class='mail1'>Nous avons bien reçu votre demande d'inscription !</p>";
   
  
   } else {
      $msg="<p class='mail2'>Tous les champs doivent être complétés !</p>";
   }

   /* POP UP (end) */

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