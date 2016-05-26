<?php
mysql_connect("localhost","root", ""); //Hämtar kopplingen till databasen.
mysql_select_db("Webbprojekt"); //Väljer en specifik databas.

$done_id = $_GET['done'];

$finished = 'Finished'; //Sätter $finished till värdet Finished.

global $_SESSION; //Gör sessionen global.

$query = "update user 
set test_status = '$finished' 
where licenseID ='$done_id'";  //Uppdaterar den valde användarens test_status till "Finished".

if(mysql_query($query)){ //refreschar sidan om användaren tagits bort
	echo "<script>window.open('company.php?uppdaterad=Uppdaterad','_self')</script>";
}

?>