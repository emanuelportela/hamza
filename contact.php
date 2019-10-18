<?php include("mail.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Stylesheets -->
   <link rel="icon" type="image/png" href="img/logo-2.png" sizes="16x16" />
   <link rel="stylesheet" href="css/npm/bootstrap.min.css" />
   <link rel="stylesheet" href="css/npm/owl.carousel.css" />
   <link rel="stylesheet" href="css/npm/font-awesome.min.css" />
   <link rel="stylesheet" href="css/npm/flaticon.css" />
   <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/npm/imagehover.min.css">

   <!-- Pages -->
   <link rel="stylesheet" href="css/contact.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/responsive/contactR.css">
   <link rel="stylesheet" href="css/responsive/all.css">

   <!-- Font-->
   <!-- Font -->
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Montserrat|Source+Sans+Pro&display=swap" rel="stylesheet">


   <title>Atypeak - Contact</title>

</head>

<body id="up">

   <?php if( isset($msg) ) { echo $msg; } ?>

   <!-- Header section (start) -->

   <header class="header-1">

      <div class="header-1-1">
         <i class="fas fa-mobile-alt"></i><a href="tel:0032484547588">+32 484 54 75 88</a>
         <i class="fas fa-envelope ml-3"></i><a href="mailto:info@atypeak.be">info@atypeak.be</a>
      </div>

      <div class="header-1-2">
         <a href="https://www.facebook.com/Atypeak-105000600875221/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/atypeak.be/"><i class="fab fa-instagram"></i></a>
      </div>

   </header>

   <header class="header-2">

      <div class="header-logo" style="display: none;">
         <a href="index.html"><img src="./img/logo-3.png"></a>
      </div>

      <!-- Navigation -->
      <div class="responsive" id="burger">
         <i class="fa fa-bars bars"></i>
         <i class="fas fa-times times"></i>
      </div>

      <!-- Navbar -->
      <ul class="navbar">
         <!-- <li><a class="nonactive5" href="index.html">ACCUEIL</a></li> -->
         <li><a class="nonactive1" href="web.html">WEB</a></li>
         <li><a class="nonactive2" href="media.html">MÉDIA</a></li>
         <li><a class="nonactive3" href="graphisme.html">GRAPHISME</a></li>
         <li><a href="index.html"><img src="./img/logo-3.png"></a></li>
         <li><a class="nonactive5" href="realisations.html">RÉALISATIONS</a></li>
         <li><a class="nonactive4" href="apropos.html">À PROPOS</a></li>
         <li class="active"><a href="contact.php">CONTACT</a></li>
      </ul>

   </header>

   <!-- Header section (end) -->


   <!-- Burger (start) -->

   <div class="burger-1">

      <div><a class="b-2" href="index.html">Accueil</a></div>
      <div><a class="b-2" href="web.html">Web</a></div>
      <div><a class="b-2" href="media.html">Média</a></div>
      <div><a class="b-2" href="graphisme.html">Graphisme</a></div>
      <div><a class="b-2" href="realisations.html">Réalisations</a></div>
      <div><a class="b-2" href="apropos.html">À propos</a></div>
      <div><a class="b-2" href="contact.php" style="color:orange">Contact</a></div>

   </div>

   <!-- Burger (end)-->


   <!-- SECTION TOP - CONTACT (start) -->

   <div class="top-contact">

      <div class="top-contact-filtre">
         <h1>CONTACTEZ-NOUS</h1>
         <h5>Une réponse rapide assurée !</h5>
      </div>

   </div>

   <!-- SECTION TOP - CONTACT (end) -->



   <!-- BOX UP (start) -->

   <div class="box">
      <a href="#up"><i class="fas fa-arrow-up"></i></a>
   </div>

   <!-- BOX UP (end) -->


   <!-- FORMULAIRE DE CONTACT (start) -->


   <section>

      <div class="contact row">

         <div class="col-md-6 col-sm-12 contact-1">
            <div class="contact-1-filtre">

               <div class="contact-donnee">

                  <div class="contact-donnee-1"><i class="fas fa-map-marker-alt"></i></div>
                  <div class="contact-donnee-2">
                     <div class="contact-donnee-2-1">Adresse</div>
                     <div class="contact-donnee-2-2">Bruxelles - Belgique</div>
                  </div>

               </div>

               <div class="contact-donnee">

                  <div class="contact-donnee-1"><i class="fas fa-mobile-alt"></i></div>
                  <div class="contact-donnee-2">
                     <div class="contact-donnee-2-1">Appelez-nous</div>
                     <a class="contact-donnee-2-2" href="tel:0032484547588">0484/54.75.88</a>
                  </div>

               </div>

               <div class="contact-donnee">

                  <div class="contact-donnee-1"><i class="fas fa-envelope"></i></div>
                  <div class="contact-donnee-2">
                     <div class="contact-donnee-2-1">Posez-nous vos questions</div>
                     <a class="contact-donnee-2-2" href="mailto:info@atypeak.be">info@atypeak.be</a>
                  </div>

               </div>
            </div>
         </div>

         <div class="col-md-6 col-sm-12 contact-2">

            <form action="" method="POST" class="form-class contact-form">

               <h3 class="contact-form-h3">Envoyez-nous votre demande</h3>

               <div class="c-form">
                  <div class="c-form-1">ENTREZ VOTRE NOM COMPLET</div>
                  <input type="text" name="prenom" class="c-form-2" placeholder="Prénom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
                  

                  <input type="text" name="nom" class="c-form-3" placeholder="Nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                  
               </div>

               <div class="c-form-test">
                  <div class="c-form-1">ENTREZ VOTRE EMAIL</div>
                  <input type="text" name="mail" class="c-form-4" placeholder="example@gmail.com" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
                  
               </div>

               <div class="c-form-test-2">
                  <div class="c-form-1">ENTREZ VOTRE NUMÉRO</div>
                  <input type="text" name="numero" class="c-form-4" placeholder="+3247000000" value="<?php if(isset($_POST['numero'])) { echo $_POST['numero']; } ?>">
                  
               </div>

               <div class="c-form">
                  <div class="c-form-1">QUEL PACK DÉSIREZ-VOUS ?</div>
                  <select id="pack" class="c-form-4" name="pack" style="color:#000000" value="<?php if(isset($_POST['pack'])) { echo $_POST['pack']; } ?>">
                     
                     <option value="SERVICE MEDIA">SERVICE MÉDIA</option>
                     <option value="SERVICE WEB">SERVICE WEB</option>
                     <option value="SERVICE GRAPHISME">SERVICE GRAPHISME</option>
                     <option value="PACK DUO">PACK DUO</option>
                     <option value="PACK TRIO">PACK TRIO</option>
                     <option value="AUTRE">AUTRE</option>
                  </select>
               </div>

               <div class="c-form">
                  <div class="c-form-1">MESSAGE</div>
                  <textarea class="c-form-5" name="message" placeholder="Écrivez-nous un message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                  
               </div>

               <button type="submit" class="c-form-6" name="mailform">ENVOYER</button>

               
            </form>
            
            <?php if( isset($msge) ) { echo $msge; } ?>
         </div>

      </div>

   </section>


   <!-- FORMULAIRE DE CONTACT (end) -->


   <!-- FOOTER (start) -->

   <footer class="bas">

      <div class="bas-1">

         <div class="bas-1-1">
            <img class="bas-1-1-1" src="./img/logo.trio.titre.blanc.png">
         </div>

         <div class="bas-1-2">
            <h1>MENU</h1>
            <div class="bas-1-2-1">
               <a href="index.html"><i class="far fa-circle mr-4"></i><p>Accueil</p></a>
               <a href="web.html"><i class="far fa-circle mr-4"></i><p>Web</p></a>
               <a href="media.html"><i class="far fa-circle mr-4"></i><p>Média</p></a>
               <a href="graphisme.html"><i class="far fa-circle mr-4"></i><p>Graphisme</p></a>
               <a href="realisations.html"><i class="far fa-circle mr-4"></i><p>Réalisations</p></a>
               <a href="apropos.html"><i class="far fa-circle mr-4"></i><p>À propos</p></a>
               <a href="contact.php"><i class="far fa-circle mr-4"></i><p>Contact</p></a>
            </div>
         </div>

         <div class="bas-1-3">
            <h1>POSEZ VOS QUESTIONS</h1>
            <div class="bas-1-3-1">
               <a href="tel:0032484547588"><i class="fas fa-mobile-alt ml-1"></i></a>
               <a href="mailto:info@atypeak.be"><i class="fas fa-envelope"></i></a>
               <a href="https://www.instagram.com/atypeak.be/"><i class="fab fa-instagram"></i></a>
               <a href="https://www.facebook.com/Atypeak-105000600875221/"><i class="fab fa-facebook-f"></i></a>
            </div>
         </div>

      </div>

      <div class="bas-2">
         Agence de création et de communication web | Bruxelles | 2019
      </div>

   </footer>

   <!-- FOOTER (end) -->


   <!-- SCRIPT (start) -->

   <script src="js/jquery-2.1.4.min.js"></script>
   <script src="node_modules/bootstrap/js/dist/util.js"></script>
   <script src="node_modules/bootstrap/js/dist/carousel.js"></script>
   <script src="node_modules/jquery/dist/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/scroll.js"></script>
   <script src="js/burger.js"></script>

   <!-- SCRIPT (end) -->


</body>

</html>