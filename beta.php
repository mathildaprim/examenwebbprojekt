<link rel="stylesheet" href="css/bootsrap.min.css">
<script src="js/quiz.js"></script>
<title>Gratisutbildningstest</title>
<?php
   include('template.php'); //inkluderar template-strukturen.
    $content = <<<END
   
   <div class="container">
             <div class="jumbotronbeta">
               <div class="jumbotron">
                  <h2>Gratisutbildningstest</h2>
   
                
                   <h2 id="test_status"> Gratis utbildning</h2> 
       <div id="test">
   
           <!-- Här kommer testet att visas -->
   
       </div>  
   
   
   
               </div><!-- Stänger jumbotronen --> 
               </div><!-- Stänger jumbotroninlogg --> 
            </div><!-- Stänger container --> 
   
   
   
END;
     echo $navigation_admin;
     echo $header;
     echo $content;
   
     ?>