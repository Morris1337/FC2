<?php
session_start();
$current_file_name = basename($_SERVER["PHP_SELF"]);
  include ('usermanagement/config.php');
  include ('config.php');
  // SESSION CHECK SET OR NOT
if (!isset($_SESSION['username'])) {
  unset($_SESSION['username']);
  $_SESSION['usericonblinkdecide'] = "usericonblink";
} else {
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['usericonblinkdecide'] = "usericonblinknone";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
    <title><?php echo $lang['maintitle'] ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

  <!-- CSS
  ================================================== -->

  <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/style.css">

   <!-- Modernizr
  ================================================== -->
    <script src="javascripts/modernizr.js"></script>
    
    
</head>
<style>
#more {display: none;}
#more2 {display: none;}
#more3 {display: none;}
#more4 {display: none;}

.usericonblinknone{
  animation:none;
}

.usericonblink {
    animation:blinkingIcon 2.5s infinite;
}
@keyframes blinkingIcon{
    0%{     opacity: 0;   }
    5%{     opacity: 0.1; }
    10%{    opacity: 0.2; }
    15%{    opacity: 0.3; }
    20%{    opacity: 0.4; }
    25%{    opacity: 0.5; }
    30%{    opacity: 0.6; }
    35%{    opacity: 0.7; }
    40%{    opacity: 0.8; }
    45%{    opacity: 0.9; }
    50%{    opacity: 1.0; }
    55%{    opacity: 0.9; }
    60%{    opacity: 0.8; }
    65%{    opacity: 0.7; }
    70%{    opacity: 0.6; }
    75%{    opacity: 0.5; }
    80%{    opacity: 0.4; }
    85%{    opacity: 0.3; }
    90%{    opacity: 0.2; }
    95%{    opacity: 0.1; }
    100%{   opacity: 0;   }
    
}


</style>

<body>



<div id="main-wrapper">

        <!-- main navigation -->
        <div class="menusurround">
                    
      
      <div class="header-inner d-none d-lg-flex flex-container space-between social-icons">
        <a class="<?php echo $_SESSION['usericonblinkdecide']?>" id="usericonactivepassive" href="usermanagement/index.php"><img class="usericon" src="images/usericon/usericon.png"/></a>
        <input id="menu-toggle" type="checkbox">
        <label id="menu-label" for="menu-toggle">
                  <img class="languagemain" src="<?php echo $lang['langmainselect']?>"/>
                </label>
        <div id="collapse-menu">
          <a href="<?php echo $current_file_name."?".$lang["index_option2_link"]?>"><img class="language" src="<?php echo $lang['lang2select']?>"></a>
          <a href="<?php echo $current_file_name."?".$lang["index_option3_link"]?>"><img class="language" src="<?php echo $lang['lang3select']?>"></a>
        </div>
        
      </div>
    
              
                      <nav id="menu" class="menu">
                      <ul id="mainnav" class="level-1 slide-nav">

                      <li class="has-subnav">
                                  <a><?php echo $lang['info_dropdown']?></a>
                                  <ul class="level-2">
					  						<li><a href="<?php echo $lang['staff_marker']?>"><?php echo $lang['staff_link']?></a></li>
                      						<li><a href="<?php echo $lang['calendar_marker']?>"><?php echo $lang['calendar_link']?></a></li>
                      						<li><a href="<?php echo $lang['posts_marker']?>"><?php echo $lang['publications_link']?></a></li>
                    					</ul>
                    </li>
                    
                    <li class="no-subnav">
                    <a href="<?php echo $lang['training_marker']?>"><?php echo $lang['training_link']?></a>
                      </li>
                
                    <li class="no-subnav">
                          <a href="#about-marker"><?php echo $lang['about_link']?></a>
                        </li>
                
                    <li class="no-subnav">
                          <a href="#media-marker"><?php echo $lang['media_link']?></a>
                        </li>
        
                        
        
                <li class="no-subnav">
                  <a href="#important-marker"><?php echo $lang['important_link']?></a>
                </li>
                
                        <li class="no-subnav">
                          <a href="#blog-marker"><?php echo $lang['content_link']?></a>
                        </li>
                        
                                <li class="no-subnav">
                                  <a href="#contact-marker"><?php echo $lang['contact_link']?></a>
                                </li>

              </ul>
                  </nav>
                <!-- end menu -->   
                    <!-- add logo --> 
                   
                     <a href="<?php echo $lang['home_marker']?>"><img class="logo-image" src="images/logo/Logo-design_FunCatchers_2020_Agness_black.jpg"></a>
                    
                    <!-- end logo --> 
                    
  </div><!-- /main navigation --> 
      



  <a id="staff-marker" class="anchor"></a>
    
    
    <!-- Staff Section
      ================================================== -->
        <section id="staff-section" class="very-top-padding section-wrapper staff-section"><!-- add main section background here -->
          <div class="background-inner1"><!-- add parallax background -->
              <div class="background-inner3"><!-- add background color css to this div -->
                <div class="section-inner"><!-- add background pattern css to this div -->
                        
                <!-- uncomment items below for shadows -->   
              <img src="images/shadow-top.png" class="shadow-top" alt="shadow">  
                  <img src="images/shadow-bot.png" class="shadow-bot" alt="shadow">    
    
            <div class="container">
                
                  <h2 class="section-title"><?php echo $lang['ourstaff']?><br /><span><?php echo $lang['thefaces']?></span></h2>
                
                  <p class="section-text"><?php echo $lang['inthissection']?> </p>
                
                
                  <!-- row -->
                <div class="row">
    
                    <!-- col -->
                    <div class="ourstaff columns">
        
                        <!-- staff member -->
                        <div class="port-item-container">
                            <div class="port-box staff-port-box">
                                <div class="email staff-member">
                                    <div class="zoom-holder">
                                        <img  src="images/crew/Ilja.jpg" alt="staff">
                                    </div>
                                </div>
    
                                    <div class="port_item_title">
                                        <h4 class="staff-name"><?php echo $lang['ilja']?><br><?php echo $lang['kozukovskis']?></h4>
                                            <p class="staff-title"><em><?php echo $lang['founder']?></em></p>
                                                <p><?php echo $lang['ihavecompleted']?><span id="dots"></span><span id="more"> <br>

<?php echo $lang['ihavebeen']?><br><br>

<?php echo $lang['iparticipated']?><br><br>

<?php echo $lang['ialso']?><br><br>

<?php echo $lang['idoalotofsports']?><br><br>

<?php echo $lang['atthemoment']?></span></p>
<button onclick="myFunction()" id="myBtn"><?php echo $lang['readmore']?></button>
    
                                                    <div class="staff social">
                                                        <a href="https://www.facebook.com/ilja.kozukovskis" target="blank" class="tip facebook" title="Facebook"><i class="icon-facebook iconsocial"></i></a>
                                                        <a href="https://www.instagram.com/ilja.mor" target="blank" class="tip pin" title="Instagram"><i class="icon-instagram iconsocial"></i></a>
                        
                                                    </div>
                                    </div>
                            </div>
                        </div><!-- /staff member -->
    
                    </div><!-- /col -->


<!-- col -->
                            <div class="ourstaff columns">
        
                                <!-- staff member -->
                                <div class="port-item-container">
                                    <div class="port-box staff-port-box">
                                        <div class="email staff-member">
                                            <div class="zoom-holder">
                                                <img  src="images/crew/Nastja.jpg" alt="staff">
                                            </div>
                                        </div>
    
                                            <div class="port_item_title">
                                                <h4 class="staff-name"><?php echo $lang['anastasija']?><br><?php echo $lang['kozukovska']?></h4>
                                                    <p class="staff-title"><em><?php echo $lang['VIP']?></em></p>
<p><?php echo $lang['aboutmyself']?><br>
<?php echo $lang['asfar']?><span id="dots3"></span><span id="more3"><br>
<?php echo $lang['willhelp']?><br><br>
<?php echo $lang['attended']?><br><br>
<?php echo $lang['completed']?></span></p>
<button onclick="myFunction3()" id="myBtn3"><?php echo $lang['readmore']?></button>
                                                            <div class="staff social">
                                                                <a href="#" class="tip facebook" title="Facebook"><i class="icon-facebook iconsocial"></i></a>
                                                                
                                                            </div>
                                            </div>
                                    </div>
                                </div><!-- /staff member -->
    
                            </div><!-- /col -->


                            <div class="ourstaff columns">
        
                                <!-- staff member -->
                                <div class="port-item-container">
                                    <div class="port-box staff-port-box">
                                        <div class="email staff-member">
                                            <div class="zoom-holder">
                                                <img  src="images/crew/Vika.jpg" alt="staff">
                                            </div>
                                        </div>
    
                                            <div class="port_item_title">
                                                <h4 class="staff-name"><?php echo $lang['vika']?><br><?php echo $lang['dangele']?></h4>
                                                    <p class="staff-title"><em><?php echo $lang['VIP']?></em></p>
<p><?php echo $lang['aboutmyself']?><br>
<?php echo $lang['myname']?><span id="dots4"></span><span id="more4"><br>
<?php echo $lang['attracted']?><br><br>
<?php echo $lang['ihave']?><br><br>
<?php echo $lang['atthemoment2']?></span></p>
<button onclick="myFunction4()" id="myBtn4"><?php echo $lang['readmore']?></button>
                                                            <div class="staff social">
                                                                <a href="#" class="tip facebook" title="Facebook"><i class="icon-facebook iconsocial"></i></a>
                                                                
                                                            </div>
                                            </div>
                                    </div>
                                </div><!-- /staff member -->
    
                            </div><!-- /col -->
                            
                            
                            <!-- col -->
                    <div class="ourstaff columns">
        
                        <!-- staff member -->
                        <div class="port-item-container">
                            <div class="port-box staff-port-box">
                                <div class="email staff-member">
                                    <div class="zoom-holder">
                                        <img src="images/crew/Aleksandr.jpg" alt="staff">
                                    </div>
                                </div>
    
                                    <div class="port_item_title">
                                        <h4 class="staff-name"><?php echo $lang['aleksandrs']?><br><?php echo $lang['aniscenko']?></h4>
                                            <p class="staff-title"><em><?php echo $lang['cofounder']?></em></p>
                                                <p><?php echo $lang['acoachof']?><br>
<?php echo $lang['brmed2021']?><span id="dots2"></span><span id="more2"><br>
<?php echo $lang['simed2021']?><br>
<?php echo $lang['22place']?><br>
<?php echo $lang['brmed2018']?><br>
<?php echo $lang['brmed2017']?><br>
<?php echo $lang['simed2016']?><br><br>

<?php echo $lang['asformer']?><br>
<?php echo $lang['semi2012']?><br>
<?php echo $lang['simed2012']?><br>
<?php echo $lang['semi2011']?><br>
<?php echo $lang['simed2011']?><br>
<?php echo $lang['15place']?><br>
<?php echo $lang['simed20112']?> <br><br>

<?php echo $lang['education']?><br>
<?php echo $lang['professionalmaster']?><br>
<?php echo $lang['inyear2020']?><br>
<?php echo $lang['professionalbachelor']?><br><br>

<?php echo $lang['alsotomention']?><br>
<?php echo $lang['inyear20202']?><br>
<?php echo $lang['sinceyear2018']?><br>
<?php echo $lang['sinceyear2020']?>
</span></p>
<button onclick="myFunction2()" id="myBtn2"><?php echo $lang['readmore']?></button>
    
                                                    <div class="staff social">
                                                        
                                                        <a href="https://www.facebook.com/aleksandr.aniscenko.3/" target="blank" class="tip facebook" title="Facebook"><i class="icon-facebook iconsocial"></i></a>
                                                        
                                                    </div>
                                    </div>
                            </div>
                        </div><!-- /staff member -->
    
                    </div><!-- /col -->


                
                    

            
              </div><!-- /row -->
                
                    </div><!-- /container -->
                            
                      </div><!-- /section-inner -->
                  </div><!-- /background-inner3 -->
          </div><!-- /background-inner1 -->
    </section>
    <!-- End Staff Section
      ================================================== -->
    
    
    
    
    
    
    
    
    
    
      
      
    <!-- Footer Social Section
      ================================================== -->
        <section id="footer-social-section" class="section-wrapper footer-social-section"><!-- add main section background here -->
          <div class="background-inner1"><!-- add parallax background -->
              <div class="background-inner3 black70"><!-- add background color css to this div -->
                <div class="section-inner overlay6-20"><!-- add background pattern css to this div -->
                        
                <!-- uncomment items below for shadows -->
              <!-- <img src="images/shadow-top.png" class="shadow-top" alt="shadow"> -->  
                  <!-- <img src="images/shadow-bot.png" class="shadow-bot" alt="shadow"> -->
    
                    <div class="container">
                
                      <h2 class="outlined-title"><?php echo $lang['stayconnected']?></h2>
                        
                            <div class="sixteen columns">
                                     
                            <div class="widget-box-content no-svg">
                                <a href="https://www.facebook.com/groups/FunCatchersLV/" target="blank"><i class="fc-webicon facebook large"></i></a>
                              <a href="https://www.instagram.com/funcatcherslv/" target="blank"><i class="fc-webicon instagram large"></i></a>
                                </div>
                            
                              
                              </div>                      
                
            </div><!-- /container -->
                           
                      </div><!-- /section-inner -->
                  </div><!-- /background-inner3 -->
          </div><!-- /background-inner1 -->
    </section>
    <!-- End Footer Social Section
      ================================================== -->
      


    <!-- Footer
      ================================================== -->
        <footer class="footCreditsContainer">
            <div class="container footerCredits">
         
                <div class="eight columns">
                    <p class="creditsLeft">&copy;<script type="text/javascript">document.write(new Date().getFullYear())</script><?php echo $lang['reserved']?></p>
                </div>
         
                <div class="eight columns">
                    <p class="creditsRight"><?php echo $lang['join']?><a href="usermanagement/index.php"><?php echo $lang['maintitle']?></a></p>
                </div>
            </div>  
        </footer>        
    <!-- End Footer
      ================================================== -->
  
    <!-- to top button -->
    <p id="back-top">
    <a href="#home-marker"><i class="icon-up-open-big"></i></a>
  </p><!-- /to top button -->
    
</div><!-- /#main wrapper -->
    
   <!-- JS
  ================================================== -->
    
  <script src="javascripts/jquery-1.11.3.min.js"></script> 


    <!-- preloader -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
  jQuery("body").addClass("hidden_body");
   })
        jQuery(window).load(function() { // makes sure the whole site is loaded
          jQuery("#status").fadeOut(); // will first fade out the loading animation
          jQuery("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
          jQuery("body").removeClass("hidden_body"); 
       })
  </script>

    <!-- google map -->
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="javascripts/jquery.gmap.min.js"></script>
    <!-- end google map -->

    <!-- camera slider -->
  <script src="assets/camera/scripts/camera.js"></script> 
    <!-- end camera slider -->
    
     <script src="javascripts/jquery.validate.pack.js"></script>
     
    <script src="javascripts/<?php echo $lang['activelang']?>"></script>
    <script src="javascripts/screen.js"></script>

    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "<?php echo $lang['readmore']?>"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<?php echo $lang['readless']?>"; 
    moreText.style.display = "inline";
  }
}
</script>

    <script>
function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "<?php echo $lang['readmore']?>"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "<?php echo $lang['readless']?>"; 
    moreText2.style.display = "inline";
  }
}
</script>
<script>
function myFunction3() {
  var dots3 = document.getElementById("dots3");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "<?php echo $lang['readmore']?>"; 
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "<?php echo $lang['readless']?>"; 
    moreText3.style.display = "inline";
  }
}
</script>
<script>
function myFunction4() {
  var dots4 = document.getElementById("dots4");
  var moreText4 = document.getElementById("more4");
  var btnText4 = document.getElementById("myBtn4");

  if (dots4.style.display === "none") {
    dots4.style.display = "inline";
    btnText4.innerHTML = "<?php echo $lang['readmore']?>"; 
    moreText4.style.display = "none";
  } else {
    dots4.style.display = "none";
    btnText4.innerHTML = "<?php echo $lang['readless']?>"; 
    moreText4.style.display = "inline";
  }
}
</script>





</body>
</html>