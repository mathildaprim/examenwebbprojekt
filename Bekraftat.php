<head>
   <title>
      Bekräftat
   </title>
</head>
<?php
   include('template.php');
   protect_page(); //Kräver att besökaren är inloggad  
    $content = <<<END
            <div class="container">
            <div class="jumbotronbekraftat">
               <div class="jumbotron">
               <h2> Licenserna är nu genererade </h2>
               <img src="img/confirm.png" class="confirmbild"><br>

              <form action="admin.php">
            <input id="tillbaka" type="submit" value="Gå tillbaka" class="btn btn-default"> <!-- tar dig tillbaka till genereringsformuläret -->
        </form>
   
               </div> <!-- Stänger jumbotron --> 
             </div> <!-- Stänger jumbotronbekraftat --> 
           </div> <!-- Stänger container --> 
END;
     echo $navigation_admin;
     echo $header;
     echo $content;
     ?>