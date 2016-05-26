<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
      <link rel="icon" type="img/x-icon"
         href="img/favicon.ico"/>
      <link rel="stylesheet" 
         href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
      <!-- Är med för bildspelet -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <!-- för custom font "hand of sean" -->
      <style type="text/css">
         @font-face {
         font-family: MyCustomFont;
         src: url("Hand_Of_Sean_Demo.eot") /* EOT file for IE */
         }
         @font-face {
         font-family: MyCustomFont;
         src: url("Hand_Of_Sean_Demo.ttf") /* TTF file for CSS3 browsers */
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="jquery/jquery-2.2.1.min.js"></script>
      <script src="jquery/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
      <script> 
         // Can also be used with $(document).ready()
         $(window).load(function() {
           $('.flexslider').flexslider({
             animation: "slide",
             controlNav: "thumbnails"
           });
         });
      </script>
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="favicon.ico" />
   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php
include('databas.php');
require 'funktioner.php';
$header = <<<END
<img src="img/logotype.png" class="logotype">

END;
         
         
         $navigation_admin = <<<END
            <nav class="navbar navbar bs-docs-nav">
         
                  <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
         
               </button>
             </div>
         
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
         
                
               
                              
                 
END;

if(isset($_SESSION['userID']))/* Här är det userID. Såhär kommer menyn se ut för en inloggad användara */
  $navigation_admin .= <<<END
<p class="inloggadsom"><b>{$_SESSION['fname']}</b> du är inloggad!</p>

    <li><a href="logout.php">Logga ut</a></li>
     <li><a href="admin.php">Generera licenser</a></li>
      <li><a href="anvandare.php">Användare</a></li>


END;
         else{
           $navigation_admin .= ' <li><a href="login.php">Logga in</a></li> ';
           $navigation_admin .= ' <li><a href="register.php">Beställ utbildning</a></li> ';
           $navigation_admin .= ' <li><a href="utbildningen.php" target="_blank">Gratisutbildning</a></li>';
         }
          $navigation_admin .= ' </ul>
                           </div><!-- /.navbar-collapse -->
                           <h2 class="slogan">Alltid, tryggt och nära!</h2>
                           </div><!-- /.container-fluid -->
                           </nav> ';  
         
         
         $navigation_user = <<<END
            <nav class="navbar navbar bs-docs-nav">
         
                  <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
         
               </button>
             </div>
         
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
         
                
               
                              
                 
END;

if(isset($_SESSION['userID'])) /* Här är det userID Såhär kommer menyn se ut för en inloggad användare */
  $navigation_user .= <<<END
<p class="inloggadsom"><b>{$_SESSION['fname']}</b> du är inloggad!</p>

    <li><a href="logout.php">Logga ut</a></li>
     <li><a href="user.php">Utbildningar</a></li>
     <li><a href="settings.php">Profil</a></li>


END;
         else{
           $navigation_user .= ' <li><a href="login.php">Logga in</a></li> ';
           $navigation_user .= ' <li><a href="register.php">Beställ utbildning</a></li> ';
           $navigation_user .= ' <li><a href="utbildningen.php" target="_blank">Gratisutbildning</a></li>';
         }
          $navigation_user .= ' </ul>
                           </div><!-- /.navbar-collapse -->
                           <h2 class="slogan">Alltid, tryggt och nära!</h2>
                           </div><!-- /.container-fluid -->
                           </nav> ';                      
         
         
         $navigation_useradmin = <<<END
            <nav class="navbar navbar bs-docs-nav">
         
                  <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
         
               </button>
             </div>
         
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
         
                
               
                              
                 
END;

if(isset($_SESSION['userID'])) /* Här är det userID .Såhär kommer menyn se ut för en inloggad användaradmin */
  $navigation_useradmin .= <<<END
<p class="inloggadsom"><b>{$_SESSION['fname']}</b> du är inloggad!</p>

    <li><a href="logout.php">Logga ut</a></li>

END;
         else{
           $navigation_useradmin .= ' <li><a href="login.php">Logga in</a></li> ';
           $navigation_useradmin .= ' <li><a href="register.php">Beställ utbildning</a></li> ';
           $navigation_useradmin .= ' <li><a href="utbildningen.php">Gratisutbildning</a></li>';
         }
          $navigation_useradmin .= ' </ul>
                           </div><!-- /.navbar-collapse -->
                           <h2 class="slogan">Alltid, tryggt och nära!</h2>
                           </div><!-- /.container-fluid -->
                           </nav> ';                      
         
         
         ?>
   </body>
</html>