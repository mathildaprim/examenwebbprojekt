<?php
mysql_connect("localhost","root", ""); //Hämtar kopplingen till databasen.
mysql_select_db("Webbprojekt"); //Väljer en specifik databas.

$delete_id = $_GET['dele'];

$query = "delete from user where company='$delete_id'"; //Hämtar och tar bort företaget som klickas på.

if(mysql_query($query)){ //refreschar sidan om användaren tagits bort
	echo "<script>window.open('anvandare.php?deleted=Företaget har tagits bort','_self')</script>";
}

?>