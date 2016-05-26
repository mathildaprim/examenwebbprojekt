<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <title>Profilinställningar</title>
</head>

<?php
include('template.php');
protect_page(); //Kräver att besökaren är inloggad
$content = '';
if (isset($_SESSION['email']))
 {
    if(isset($_POST['email']))
{
  $query = <<<END


    UPDATE user
    SET fname = '{$_POST["fname"]}',
    email = '{$_POST["email"]}',
    tel = '{$_POST["tel"]}',
    password = '{$_POST["password"]}'
    WHERE userID = '{$_GET["userID"]}'

END;
    $mysqli->query($query) or die($mysqli->errors);
}


    $query = <<<END
    SELECT * FROM user
    WHERE userID = '{$_SESSION["userID"]}'
END;
    $res = $mysqli->query($query);
    if($res->num_rows > 0)
{
    $row = $res->fetch_object();
    $content = <<<END
         <div class="container">
         <div class="jumbotronsettings">
            <div class="jumbotron">
          <div class="container">

          <h2> Profilinställningar för <strong>{$_SESSION['fname']}</strong></h2>
<form action="settings.php?userID={$row->userID}" method="post">
   <form role="form">

        <div class="form-group">
          <input name="fname" type="text" class="form-control" placeholder="Förnamn" value="{$row->fname}">
        </div>

        <div class="form-group">
          <input name="email" type="email" class="form-control" placeholder="Email" value="{$row->email}">
        </div>

        <div class="form-group">
          <input name="tel" type="text" class="form-control" value="{$row->tel}" placeholder="Telefonnummer">
        </div>

    

  <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Lösenord" value="{$row->password}">
        </div>

           <button type="submit" class="btn btn-default">Spara uppgifter</button>



</form> 
          </div><!-- Stänger jumbotronen -->
          </div><!-- Stänger jumbotronsettings -->
         </div><!-- Stänger container --> 
END;
}
}
  echo $navigation_user;
  echo $header;
  echo $content;
?>