<title>Beställningsförfrågan skickad</title>
<?php
   include('template.php');
   if(isset($_POST)) //Informationen från formuläret skickas i en post-funktion.
   {
   	$content = <<<END
   	<div class="row">
            <div class="container">
            <div class="jumbotronregistersend">
               <div class="jumbotron">
   	<h2>Beställningsförfrågan har skickats:</h2>
   	Förnamn: {$_POST["fname"]}
   	<br>
   	Företag: {$_POST["company"]}
   	<br>
   	Email: {$_POST["email"]}
   	<br>
   	Telefonnummer: {$_POST["tel"]}
   	<br>
   	Antal licenser: {$_POST["antal"]}
   	<br>
   	Utbildning i allmän brandskyddskunskap: {$_POST["courseID"]}
   	<br>
   	Meddelande: {$_POST["msg"]}
   	<br>
   	</div>
   	  </div><!-- Stänger jumbotronen --> 
   	  </div><!-- Stänger jumbotronregistersend -->
            </div><!-- Stänger container --> 
         </div><!-- Stänger row --> 
END;
   $to = "marilu14@student.hh.se"; //Vid beställning skickas mailet hit.
   $subject = "Beställningsförfrågan"; //Ämnet blir "Beställningsförfrågan".
   $fname = $_POST["fname"]; //Skickas från det namn som fylls i.
   $company = $_POST["company"]; //Skickas från det företag som fylls i.
   $email = $_POST["email"]; //Skickas från den email som fylls i.
   $tel = $_POST["tel"]; //Skickas från det telefonnummer som fylls i.
   $antal = $_POST["antal"]; //Skickar hur många licenser kunden vill ha.
   $courseID = $_POST["courseID"]; //Skickar vilket kurs kunden vill beställa.
   $msg = $_POST["msg"]; //Skickar det meddelandet som beställaren fyller i.
   $headers = "Från: " . $_POST["fname"]; //Mailet kommer ifrån namnet som fylls i formuläret.
   mail($to,$subject,$msg,$headers);
   }
     	echo $navigation_admin;
   	echo $content;
   	echo $header;
   
   ?>