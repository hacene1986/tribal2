<?php include('form_log.php'); ?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Tbband</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/tbb1.jpg" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- tribal Color CSS -->
    <link rel="stylesheet" href="css/tribal-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner2" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/tbb1.jpg" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        

                    </div>
                    <!--End of Logo-->

                    <aside>

                        <!--Social Icons in Header-->
                        <ul class="social-icons">
                            <li>
                            <a target="_blank" title="Facebook" href="https://www.facebook.com/TribalBonneTBand/">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Google+" href="http://google.com/+username">
                                    <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                </a>
                            </li>
                            <li>
                            <a target="_blank" title="Instagram" href="https://www.instagram.com/tribalbonnetband/">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                            </li>
                            <li>
                            <a target="_blank" title="behance" href="https://www.youtube.com/channel/UCSimvwNSdvOaFVAB0uVOJjg/featured">
                                    <i class="fa fa-youtube fa-1x"></i><span>Youtube</span>
                                </a>
                            </li>
                        </ul>
                        <!--End of Social Icons in Header-->

                    </aside>

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                        <li>
                                <a href="index.html">Acceuil</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="videos.html">Videos</a>
                            </li>
                            <li>
                                <a href="evenements.html">évenements</a>
                            </li>
                            <li>
                                <a href="espacepro.html">espace pro</a>
                            </li>
                            <li>
                                <a href="form.php">Commentaires</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Main Content Area-->
<main id="content">

    <!--Forms-->
    <section id="pricing" class="secondary-color text-center scrollto clearfix ">
           <div class="row clearfix">

               <div class="section-heading">
                <h3><i class="fa fa-pencil-alt"></i> Laissez nous vos commentaires</h3>
                <h2 class="section-title"><i class="fa fa-file"></i> Nouveau Commentaire</h2>
               </div>

             <fieldset>
              <legend><i class="fa fa-file"></i> Nouveau Commentaire</legend>
               <form class="" action="" method="post">
                 <h3>nom:</h3>
                 <input type="text" name="name" value="" placeholder="nom" required>
                 <h3>Prénom:</h3>
                 <input type="text" name="lastname" value="" placeholder="prénom" required>
                 <h3>Mail:</h3>
                 <input type="text" name="email" value="" placeholder="Contac@mail.fr" required>
                 <h3>Commentaire:</h3>
                 <textarea name="commentaire" rows="10" cols="50"></textarea required></br>
                 <div class="btn">
                 <button type="submit" name="submit_commentaire" class="btn btn-primary"></i>Ajouter</button>
           </div>

            </form>
            </fieldset>
      
<div class="com">
  <?php

     if(isset($c_erreur)){ echo $c_erreur; }

    foreach ($c as $key => $value) {

       echo "<h3>".$value['lastname']."</h3>";
       echo "<p>".$value['commentaire']."</p>";
    }

    

     ?>
</div>

           

        </div>
    </section>
    <!--End of Pricing Tables-->

</main>
<!--End Main Content Area-->

 <!--Footer-->
 <footer id="landing-footer" class="clearfix">
    <div class="row clearfix">

        <p id="copyright" class="col-2">©Made with love Tbband</p>

        <!--Social Icons in Footer-->
        <ul class="col-2 social-icons">
            <li>
            <a target="_blank" title="Facebook" href="https://www.facebook.com/TribalBonneTBand/">
                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                </a>
            </li>
            <li>
                <a target="_blank" title="Google+" href="http://google.com/+username">
                    <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                </a>
            </li>
            <li>
                <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                </a>
            </li>
            <li>
            <a target="_blank" title="Instagram" href="https://www.instagram.com/tribalbonnetband/">
                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                </a>
            </li>
            <li>
            <a target="_blank" title="behance" href="https://www.youtube.com/channel/UCSimvwNSdvOaFVAB0uVOJjg/featured">
                    <i class="fa fa-youtube fa-1x"></i><span>Youtube</span>
                </a>
            </li>
        </ul>
        <!--End of Social Icons in Footer-->
    </div>
</footer>
<!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<!--<script src="js/jquery.stickyNavbar.min.js"></script>-->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>