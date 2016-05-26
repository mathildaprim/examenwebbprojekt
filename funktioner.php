<?php
function logged_in(){
	return (isset($_SESSION['userID'])) ? true : false; //Kollar om användaren är inloggad
}

function logged_in_redirect(){ //Skyddar inloggade från sidor som endast utloggade besökare bör se
  if (logged_in() === true) {
    header('Location: index.php');
    exit();
  }
}

function protect_page(){        //Skyddar sidan från besökare som inte är inloggade
	if (logged_in() === false) {
		header('Location: index.php');
		exit();
		
	}
}

function protect_admin(){ //En funktion som gör att endast användaren med rollen som admin är tillåten.
  global $_SESSION;
  if ($_SESSION['role'] == 3){
    header('Location: protect_admin.php');
    exit();
  }
  if ($_SESSION['role'] == 2){
    header('Location: protect_admin2.php');
    exit();
  }
}
function protect_useradmin(){ //En funktion som gör att endast den administrativa användaren på företaget kan nå sidan.
  global $_SESSION;
  if ($_SESSION['role'] == 3){
    header('Location: protect_admin.php');
    exit();
  }
}
?>