<?php
mysql_connect("localhost","root", ""); //Hämtar kopplingen till databasen.
mysql_select_db("Webbprojekt"); //Väljer en specifik databas.

$fail_id = $_GET['fail'];

$fail = 'Failed'; //Sätter $fail till värdet Failed.

global $_SESSION; //Gör sessionen global.

$query = "update user
set test_status = '$fail' 
where licenseID ='$fail_id'"; //Uppdaterar den valde användarens test_status till "failed".

if(mysql_query($query)){ //refreschar sidan om användaren tagits bort
	echo "<script>window.open('company.php?uppdaterad=Uppdaterad','_self')</script>";
}

?>