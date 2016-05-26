
<title>Licenserna är tillagda</title>
<?php
include('template.php');
if(isset($_POST)) //Detta skickasut som ett kvitto.
{
	$content = <<<END
	<div class="row">
         <div class="container">
         <div class="jumbotronregistersend">
            <div class="jumbotron">
	<h2>Genereringen av licenser är skickad:</h2>
	Företag: {$_POST["company"]}
	<br>
	Kontaktperson förnamn: {$_POST["fname"]}
	<br>
	Kontaktperson email: {$_POST["email"]}
	<br>
	Antal licenser: {$_POST["antal"]}
	<br>
	Webbutbildning i brandskyddskunskap: {$_POST["antal"]}
	<br>
	Webbutbildning i brandskyddskunskap: {$_POST["courseID"]}
	<br>
	</div>
	  </div><!-- Stänger jumbotronen --> 
         </div><!-- Stänger container --> 
      </div><!-- Stänger row --> 
END;
$to = "marilu14@student.hh.se";
$subject = "Kvitto på licenser för interaktiva webbutbildningar";
$company = $_POST["company"];
$fname = $_POST["fname"];
$email = $_POST["email"];
$antal = $_POST["antal"];
$courseID = $_POST["courseID"];
$headers = "Från: " . $_POST["email"];
mail($to,$subject,$headers);
}
  	echo $navigation_admin;
	echo $content;
	echo $header;

?>