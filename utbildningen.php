<head>
   <link rel="stylesheet" href="css/bootsrap.min.css">
   <script src="js/quiz.js"></script>
   <title>Gratisutbildning teori</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php
   include('template.php');
    $content = <<<END
   
            <div class="container">
   
   
     <div class="utbildningscarousel">
          
     
          <div id="myCarousel"  class="carousel slide" data-ride="carousel" data-interval="false">
   
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
       <li data-target="#myCarousel" data-slide-to="5"></li>
       <li data-target="#myCarousel" data-slide-to="6"></li>
     </ol>
   
     <!-- Wrapper for slides -->
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img src="img/lightutbildning1.png" alt="Brandman som pratar">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning2.png" alt="Brandsläckare">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning3.png" alt="Brandsvarnare">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning4.png" alt="Brandbil">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning5.png" alt="Tummen upp">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning6.png" alt="Tummen upp">
       </div>
   
       <div class="item">
         <img src="img/lightutbildning7.png" alt="avslutning">
       </div>
     </div>
   
     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   
   
   </div>
                 <div class="utbildningsknapp">
                   <a href="beta.php" type="button" class="btn btn-btn-inverse">Gå vidare till testet</a>
                 </div>
            </div><!-- Stänger container --> 
   
   
   
   <script>
   $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();   
   });
   </script>
   
   
END;
     echo $content;
   
     ?>