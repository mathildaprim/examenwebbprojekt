<link rel="stylesheet" href="css/bootsrap.min.css">
<title>Beställ utbildning</title>
<script src="javascript.js"></script>
<?php
   include('template.php'); //inkluderar template-strukturen.
    $content = <<<END
   
            <div class="container">
            <div class="jumbotronregister">
               <div class="jumbotron">
                 <h2>Beställ utbildning</h2>
   
   
                 <form method="post" action="send.php" >
                 <div class="form-group">
                 <input type="text" class="form-control" aria-describedby="basic-addon1" name="fname" placeholder="Förnamn" maxlength="30" patter="[A-Za-z0-9]+$" required>
                 </div>
                 <div class="form-group">
                 <input type="text" class="form-control" aria-describedby="basic-addon1" name="company" placeholder="Företag" maxlength="50" patter="[A-Za-z0-9]+$" required>
                 </div>
                 <div class="form-group">
                 <input type="email" class="form-control" aria-describedby="basic-addon1" name="email" placeholder="Email" maxlength="50" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Exempel username@gmail.com" required>
                 </div>
                  <div class="form-group">
                 <input type="tel" class="form-control" aria-describedby="basic-addon1" name="tel" placeholder="Telefonnummer" maxlength="10" pattern="[0-9]+$" title="Endast siffror krävs" required>
                 </div>
                   <div class="form-group">
                 <input type="tel" class="form-control" aria-describedby="basic-addon1" name="antal" placeholder="Antal licenser" maxlength="3" pattern="[0-9]+$" title="Endast siffror krävs" required>
                 </div>
                   <div class="checkbox">
                       <label>
                           <p><input type="checkbox" aria-describedby="basic-addon1" name="courseID" required>Webbutbildning i brandskyddskunskap</p>
                       </label>
                   </div>
     
                 <br>
                 <textarea name="msg" class="form-control" placeholder="Meddelande"></textarea>
                 <br>
                 <input type="submit" class="btn btn-default" value="Beställ">
                 </form>
                 </div><!-- Stänger jumbotronen --> 
               </div><!-- Stänger jumbotronen -->
            </div><!-- Stänger container --> 
        
END;
     echo $navigation_admin;
     echo $header;
     echo $content;
   
     ?>