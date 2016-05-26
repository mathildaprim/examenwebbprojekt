<?php
mysql_connect("localhost","root", ""); //Hämtar kopplingen till databasen.
mysql_select_db("Webbprojekt"); //Väljer en specifik databas.

$delete_id = $_GET['del'];

$query = "delete from user where userID='$delete_id'"; //Hämtar och tar bort användaren som klickas på.

if(mysql_query($query)){ //refreschar sidan om användaren tagits bort
	echo "<script>window.open('anvandare.php?deleted=Användaren har tagits bort','_self')</script>";
}

?>