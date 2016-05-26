<?php
mysql_connect("localhost","root", "");
mysql_select_db("Webbprojekt");

$update_id = $_GET['update'];

global $_SESSION;

$query = "update user
set test_status = '$fail' 
where licenseID ='$fail_id'"; //Uppdaterar den valde användarens test_status till "failed".

if(mysql_query($query)){ //refreschar sidan om användaren tagits bort
	echo "<script>window.open('company.php?uppdaterad=Uppdaterad','_self')</script>";
}

?>