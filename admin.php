<head>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <meta charset="UTF-8">
   <title>Generera licenser</title>
   <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
</head>

<?php
include('template.php'); //inkluderar template-strukturen.
protect_page(); //Kräver att besökaren är inloggad
protect_admin(); //Endast en admin kan komma åt denna sida
if(isset($_POST['email']))            //inkluderar template och hämtar inlogg//
{
$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"; //Genereringen väljer bland dessa tecken

function genRandomString($length = 10) { //Funktionen som genererar slumpmässiga tecken.
    $characters ='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; //Genereringen väljer bland dessa tecken
    $string = '';
    for ($p = 0; $p < $length; $p++) {
    $string .= $characters[mt_rand(0, strlen($characters))];        //funktion för slumpmässig kod//
    }
    return $string;
}
  $courseID = '1'; //Sätter värdet i courseID till 1, då det endast finns 1 kurs för tillfället (bör ändras vid expandering).
  $antal = $_POST['antal']; //sätter $antal till det värdet som skrivs i antal i formuläret.
  $role = '3'; //Detta gör att användaren som skapas får rollvärdet 3//
  $role2 = '2'; //Detta gör att användaren som skapas får rollvärdet 2//
  $password = genRandomString();//genererar slumpmässig kod för licens och lösenord//
  $licenseID = genRandomString();
  $test_status = 'Started'; //Sätter test_resultatet hos användaren till 'started'.
  $tel = $_POST['tel']; //adminuser är den som får ett telefonnummer direkt.
  $query2 = "insert into user(email, company, password, role, tel) 
  values('{$_POST['email']}','{$_POST['company']}', '$password', '$role2', '$tel')"; //Lägger till en adminuser för varje företag

mysql_query('SET character_set_results=utf8');
mysql_query('SET names=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_connection=utf8');       //dessa löser åäö inmatningar till databasen.(Kan vara redundanta).
mysql_query('SET character_set_results=utf8');
mysql_query('SET collation_connection=utf8_swedish_ci');


for($tmp = 1; $tmp <= $antal; $tmp++){ //En loop som genererar x-antal användare, beroende på värdet i antal.
    $password = genRandomString();
    $licenseID = genRandomString();
    $query = <<<END
    INSERT INTO user(email, company, courseID, password, licenseID, role, test_status)   
    VALUES('{$_POST['email']}','{$_POST['company']}', '$courseID', '$password','$licenseID', '$role', '$test_status');  

END;
      //För in data från formuläret till databasen via poster.//
    $mysqli->query($query) or die(mysql_error()); //Lägger till användare.
}
$mysqli->query($query2) or die(mysql_error()); //Lägger till en administrativ användare.

$to = $_POST['email'];
$subject = "Era inloggningskoder för utbildning";
$antal = $_POST["antal"];
$courseID = $_POST["courseID"];
$headers = "Från: " . $_POST["fname"];
mail($to,$subject,$antal,$courseID,$headers);

header('Location:Bekraftat.php'); //När genereringen är genomförd skickas man till en bekräftelse sida.
}
 $content = <<<END
 <div class="row">
         <div class="container">
         <div class="jumbotronadmin">
            <div class="jumbotron" id="genereringjumbo">
              
  <h2>Generera licenser</h2>

 

   
            <form action="admin.php" method="post">

              <div class="form-group">

              <input type="email" class="form-control" aria-describedby="basic-addon1" name="email" placeholder="Email" maxlength="50" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Exempel username@gmail.com" required>
              </div>
               <div class="form-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="company" placeholder="Företag" maxlength="50" patter="[A-Za-z0-9]+$" required>
              </div>
              <div class="form-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="antal" placeholder="Antal licenser" maxlength="3" pattern="[0-9]+$" title="Endast siffror krävs" required>
              </div>
              <div class="form-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="tel" placeholder="Telefonnummer" maxlength="25" pattern="[0-9]+$" title="Endast siffror krävs" required>
              </div>
                  <div class="checkbox">
                       <label>
   
                          <p><input type="checkbox" aria-describedby="basic-addon1" name="courseID" required>Webbutbildning i brandskyddskunskap</p>
                          <input type="submit" class="btn btn-default" value="Generera">
                       </label>
                   </div>
                 </form>
               </div><!-- Stänger jumbotronen --> 
               </div><!-- Stänger jumbotronadmin -->
            </div><!-- Stänger container --> 
         </div><!-- Stänger row --> 
END;
   
       //innehållet på admin.php med formulär//
   
     echo $navigation_admin; 
     echo $content;
     echo $header;
       // hämtar navigationsmenyn för admin, innehåll och logotyper.//
     ?>