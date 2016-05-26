<head>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
      $(function() {
        $( "#accordion" ).accordion({
          collapsible: true //dragspelsfunktion för att separera tillgängliga och utförda utbildningar.
        });
      });
   </script>
   <title>Användare</title>
</head>
<?php
   include('template.php');
   protect_page(); //Kräver att besökaren är inloggad
    $content = <<<END
            <div class="container">
            <div class="jumbotronuser">
               <div class="jumbotron">
               <h2>Utbildningar för <strong>{$_SESSION['fname']}</h2>
             <div class="container">
                 
                   
                   
                 
                     <p>Här kan du gå vidare till att utföra utbildningen i brandskyddskunskap.<br>
                     Lycka till!</p>
   
   
                   <a href="test/story_html5.html" id="utbildningstest" class="btn btn-default" target="_blank">Utför utbildning</a>
                 
                  
   
   
                   
             
             </div><!-- Stänger container --> 
             </div><!-- Stänger jumbotronuser-->
            </div><!-- Stänger jumbotron--> 
END;
     echo $navigation_user;
     echo $header;
     echo $content;
     ?>