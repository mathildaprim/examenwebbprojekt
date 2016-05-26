<head>
   <link rel="stylesheet" href="css/bootsrap.min.css">
   <script src="js/quiz.js"></script>
   <title>Hem</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php
   include('template.php'); //Inkluderar template-filen
    $content = <<<END
   
           <div class="container">
             <div class="jumbotronindex">
               <div class="jumbotron">
                 
                 <h2>Välkommen till Räddningstjänst Väst intreraktiva utbildningsportal</h2>
                 
                 <p>Här kan du beställa tillgång till den fulla versionen av utbildningen 
                 i brandskyddskunskap, eller om du vill testa på vår gratisversion av samma utbildning.
                 
                 <br><br>Navigera dig i menyn till vänster och välj vad som passar just dig!<br>
                 Redan medlem? <a href="login.php">Tryck här</p>
   
   
               
                 
   
               </div> <!-- Stänger jumbotron --> 
             </div> <!-- Stänger jumbotronindex --> 
           </div> <!-- Stänger container --> 
   
   <div class="indexcarousel">
   <div class="bs-example">
       <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel" height="200">
         <!-- Carousel indicators -->
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
           </ol>   
          <!-- Carousel items -->
           <div class="carousel-inner">
               <div class="active item">
                 <img src="img/bild1.jpg" alt="Brandbil">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild2.jpg" alt="garage">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild3.jpg" alt="kläder">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild4.jpg" alt="hus">
                   <div class="carousel-caption">
                   </div>
               </div>
           </div>
           <!-- Carousel nav -->
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="carousel-control right" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
       </div>
   </div>
   </div>
END;
     echo $navigation_admin;
     echo $header;
     echo $content;
   
     ?>