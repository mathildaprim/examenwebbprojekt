<head>
   <title>
      Utbildningstest
   </title>
</head>
<?php
   include('template.php'); //inkluderar template-strukturen.
   protect_page(); //Kräver att besökaren är inloggad
    $content = <<<END
    <div class="row">
            <div class="container">
               <div class="jumbotron">
   
               <iframe src="test/story_html5.html" width="1020" height="658"></iframe>
   
   
   
             </div><!-- Stänger jumbotronen --> 
            </div><!-- Stänger container --> 
         </div><!-- Stänger row --> 
END;
     echo $navigation_user;
     echo $header;
     echo $content;
     ?>