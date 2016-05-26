<?php
   session_start(); //Startar sessionen.
   session_regenerate_id(); //Update the current session id with a newly generated one.

    $mysqli = new mysqli("localhost", "root", "", "Webbprojekt"); //Kopplar till en specifik databas
    mysqli_set_charset($mysqli,"utf-8"); //Sets the default client character set
?>