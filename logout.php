<?php
 include('template.php');
protect_page(); //Kräver att besökaren är inloggad 
unset($_SESSION['userID']); //Free all session variables.


header("Location: login.php"); 
    die("Redirecting to: login.php"); //Besökaren hamnar på login-sidan vid utlogg.
 ?>