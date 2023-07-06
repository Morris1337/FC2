<?php
session_start();
$current_file_name = basename($_SERVER["PHP_SELF"]);

  include ("usermanagement/config.php");
  include ("config.php");
  // SESSION CHECK SET OR NOT
if (!isset($_SESSION["username"])) {
  unset($_SESSION["username"]);
  header('location: usermanagement/index.php');
  $_SESSION["usericonblinkdecide"] = "usericonblink";
} else {
  $_SESSION["username"] = $_SESSION["username"];
  $_SESSION["usericonblinkdecide"] = "usericonblinknone";
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
    <title><?php echo $lang["maintitle"] ?></title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
    
</head>
<style>
#more {display: none;}
#more2 {display: none;}
#more3 {display: none;}

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
        <a class="<?php echo $_SESSION["usericonblinkdecide"]?>" id="usericonactivepassive" href="usermanagement/index.php"><img class="usericon" src="images/usericon/usericon.png"/></a>
        <input id="menu-toggle" type="checkbox">
        <label id="menu-label" for="menu-toggle">
                  <img class="languagemain" src="<?php echo $lang["langmainselect"]?>"/>
                </label>
        <div id="collapse-menu">
          <a href="<?php echo $current_file_name."?".$lang["index_option2_link"]?>"><img class="language" src="<?php echo $lang["lang2select"]?>"></a>
          <a href="<?php echo $current_file_name."?".$lang["index_option3_link"]?>"><img class="language" src="<?php echo $lang["lang3select"]?>"></a>
        </div>
        
      </div>
    
              
                      <nav id="menu" class="menu">
                      <ul id="mainnav" class="level-1 slide-nav">

                        <li class="no-subnav">
                  <a href="https://funcatchers.lv/#home-marker"><?php echo $lang["home_link"]?></a>
                        </li>
                
                    <li class="no-subnav">
                          <a href="https://funcatchers.lv/#about-marker"><?php echo $lang["about_link"]?></a>
                        </li>
                
                    <li class="no-subnav">
                          <a href="https://funcatchers.lv/#services-marker"><?php echo $lang["events_link"]?></a>
                        </li>
        
                        <li class="no-subnav">
                  <a href="https://funcatchers.lv/#staff-marker"><?php echo $lang["the_team_link"]?></a>
                </li>
        
                <li class="no-subnav">
                  <a href="https://funcatchers.lv/#portfolio-marker"><?php echo $lang["portfolio_link"]?></a>
                </li>
                
                        <li class="no-subnav">
                          <a href="https://funcatchers.lv/#blog-marker"><?php echo $lang["content_link"]?></a>
                        </li>
                        
                                <li class="no-subnav">
                                  <a href="https://funcatchers.lv/#contact-marker"><?php echo $lang["contact_link"]?></a>
                                </li>

              </ul>
                  </nav>
                <!-- end menu -->   
                    <!-- add logo --> 
                   
                     <a href="<?php echo $lang['home_marker']?>"><img class="logo-image" src="images/logo/Logo-design_FunCatchers_2020_Agness_black.jpg"></a>
                    
                    <!-- end logo --> 
                    
                </div><!-- /main navigation --> 


    
   
    
    <!-- Blog Section
      ================================================== -->
        <section class="section-wrapper very-top-padding">
          <div class="background-inner1"><!-- add parallax background -->
              <div class="background-inner3"><!-- add background color css to this div -->
                <div class="section-inner"><!-- add background pattern css to this div -->
                        
                <!-- uncomment items below for shadows -->
              <img src="images/shadow-top.png" class="shadow-top" alt="shadow">  
                  <img src="images/shadow-bot.png" class="shadow-bot" alt="shadow">    
    
                <div class="container">
              
                
                    
            <!-- left column -->
            <div class="text-center">


              <div class="container sixteen-columns" >

                <?php
                

$current_file_name_id = basename($_SERVER["PHP_SELF"]);
$current_file_name_id = substr($current_file_name_id, 9);
$current_file_name_id = chop($current_file_name_id,".php");

                $sql = "select * from challenges WHERE id = $current_file_name_id";
$result = mysqli_query($con,$sql);            
while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){  ?>
  <table border="1" style="border-collapse: collapse;">
    
  
  <?php $row = array_filter($row, static function ($element) {
    return $element !== "";
    //                   ↑
    // Array value which you want to delete     
});
  unset($row['eventdate2']);
  $rowKeys = array_keys($row);
  $rowKeysValues = array_values($rowKeys);
  $rowValues = array_values($row);
  $arrayLength = count($row);
        
echo $lang["pubdatedata"].$row["dateandtime"];
        for ($i = 1; $i < $arrayLength-1; $i++)  { ?>
<?php if ($rowKeysValues[$i] == "filename") {
              // Get images from the database
                    $imageURL = "images/challenge/".$rowValues[$i]; $i++;?>
          <tr>
            <th>
                <img src="<?php echo $imageURL; ?>" alt="" />
            </th>
          </tr>
        <?php 
    } else { ?>      
        <tr>
          <th>
             <?php echo $lang[$rowKeysValues[$i]]."<br>"; ?>
          </th>
        </tr>
        <tr>
          <td>
            <?php if ($rowKeysValues[$i] == "adminlink") { ?>
              <?php echo $rowValues[$i]?>
              <?php
              $i++;
            } else {
             echo($rowValues[$i])."<br>"; } ?>         
          </td>
      </tr>
      <?php  }} ?>
       </table>
<?php } ?>


<?php
                

$current_file_name_id = basename($_SERVER["PHP_SELF"]);
$current_file_name_id = substr($current_file_name_id, 9);
$current_file_name_id = chop($current_file_name_id,".php");
$chX = "ch".$current_file_name_id;

                $sql = "select * from `" . $chX . "` ";
$result = mysqli_query($con,$sql);            
while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){  ?>
  <table border="1" style="border-collapse: collapse;">

    <?php $row = array_filter($row, static function ($element) {
    return $element !== "";
    //                   ↑
    // Array value which you want to delete     
});
  
  $rowKeys = array_keys($row);
  $rowKeysValues = array_values($rowKeys);
  $rowValues = array_values($row);
  $arrayLength = count($row);
        echo $lang["pubdatedata"].$row["dateandtime"];
        for ($i = 1; $i < $arrayLength-1; $i++)  {  ?>      
        <tr>
          <th>
             <?php echo $lang[$rowKeysValues[$i]]."<br>"; ?>
          </th>
        </tr>
        <tr>
          <td>
            <?php if ($rowKeysValues[$i] == "youtubelink") { ?>
              <?php echo $rowValues[$i]?>
              <?php
              
            } else {
             echo($rowValues[$i])."<br>"; } ?>         
          </td>
      </tr>
      <?php  }} ?>
       </table>
              

            <!-- Modal -->
            

                          
                
            

            

            <br/>
    

            
        </div>




                   
        
              
        
            </div><!-- /left column -->
                <img src="images/logo/Wallpaper-FunCatchers_2020.jpg"></img>
  
    
              </div><!-- /container -->
                            
                      </div><!-- /section-inner -->
                  </div><!-- /background-inner3 -->
          </div><!-- /background-inner1 -->
    </section>
    <!-- End Blog Section
      ================================================== -->
      
     

    
    <!-- Contact Section
      ================================================== -->
        
                  
                
                        <iframe width="100%" height="472" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2177.55237427337!2d24.376128415282334!3d56.92220060866286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e932c4ea294ce5%3A0x55aa989f71adca83!2sZah%C4%81rija%20Stopija%20iela%2C%20Upeslejas%2C%20Stopi%C5%86u%20novads%2C%20LV-2118!5e0!3m2!1slv!2slv!4v1624448159500!5m2!1slv!2slv" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


                            
                   
    <!-- End Contact Section
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
                
                      <h2 class="outlined-title"><?php echo $lang["stayconnected"]?></h2>
                        
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
                    <p class="creditsLeft">&copy;<script type="text/javascript">document.write(new Date().getFullYear())</script><?php echo $lang["reserved"]?></p>
                </div>
         
                <div class="eight columns">
                    <p class="creditsRight"><?php echo $lang["join"]?><a href="usermanagement/index.php"><?php echo $lang["maintitle"]?></a></p>
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
  <!-- Load the Twitch embed script -->
<script src="https://player.twitch.tv/js/embed/v1.js"></script>
<!-- Create a Twitch.Player object. This will render within the placeholder div -->
<script type="text/javascript">
  new Twitch.Player("twitch-embed", {
    video: "1185102736"
  });
</script>


    
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
     
    <script src="javascripts/<?php echo $lang["activelang"]?>"></script>
    <script src="javascripts/screen.js"></script>

    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "<?php echo $lang["readmore"]?>"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<?php echo $lang["readless"]?>"; 
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
    btnText2.innerHTML = "<?php echo $lang["readmore"]?>"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "<?php echo $lang["readless"]?>"; 
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
    btnText3.innerHTML = "<?php echo $lang["readmore"]?>"; 
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "<?php echo $lang["readless"]?>"; 
    moreText3.style.display = "inline";
  }
}
</script>

<script>
  function checkVal() {
  var count = document.getElementById("message").value;
  var countlength = count.length;
if (countlength != 0){
  $("button").removeAttr("disabled");
} else{
  document.getElementById("myBtn").disabled = true;
}
}

</script>
<script type="text/javascript">
            function sendRequest(){

                    // AJAX request
                    $.ajax({
                        url: "ajaxfilereload.php",
                        success: function(response){ 
                            // Add response in Modal body
                            $(".modal-body").html(response); 

                            // Display Modal
                            $("#empModal").modal("show"); 
                            
                        }
                    });
               
            };
            </script>
            <script>
              setInterval(function(){
                sendRequest(); //this will send request again and again;
            }, 500);
            </script>

</body>
</html>