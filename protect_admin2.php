<head>
   <title>
      Skyddad sida
   </title>
</head>
<?php
   include('template.php'); //inkluderar template-strukturen.

protect_page(); //Kräver att besökaren är inloggad  
$content = <<<END
            <div class="container">
            <div class="jumbotronbekraftat">
               <div class="jumbotron">
               <h2>Du har ej behörighet för denna sida</h2>
              <form action="index.php">
            <input id="tillbaka" type="submit" value="Gå tillbaka"> <!-- tar dig tillbaka till genereringsformuläret -->
        </form>
   
               </div> <!-- Stänger jumbotron --> 
             </div> <!-- Stänger jumbotronbekraftat --> 
           </div> <!-- Stänger container --> 
END;
     echo $navigation_useradmin;
     echo $header;
     echo $content;
     ?>