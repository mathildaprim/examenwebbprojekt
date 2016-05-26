<title>Logga in</title>
<?php
include('template.php'); //inkluderar template-strukturen.
logged_in_redirect(); //Skyddar inloggade från sidor som endast utloggade besökare bör se
$role = array("1"=> "admin.php", "2"=> "company.php", "3"=> "user.php"); //Visar vilken sida varje roll skall skickas vid inlogg.

if(isset($_POST['licenseID'])) //Loggar in med LicenseID
{
  $query ="
  SELECT email, licenseID, password, userID, fname, company, tel, role FROM user
  WHERE licenseID = '{$_POST['licenseID']}'
  AND password = '{$_POST['password']}'";

// Ska vara skydd mot SQL-injections?
$sql = addslashes($query);

$res = $mysqli->query($query);
if ($res->num_rows > 0)
{
    $row = $res->fetch_object();
    $_SESSION["userID"] = $row->userID;
    $_SESSION["email"] = $row->email;
    $_SESSION["fname"] = $row->fname;
    $_SESSION["role"] = $row->role;
    $_SESSION["tel"] = $row->tel;
    $_SESSION["licenseID"] = $row->licenseID;
    $_SESSION["company"] = $row->company;

$query2 = <<<END
  SELECT role FROM user 
  WHERE role = '{$row->role}'


END;
     $res2 = $mysqli->query($query2) or die ($mysqli->error);
     $row2 = $res2->fetch_object();    //Kör alla tre frågor vid login.
     $sql = $mysqli->query($sql);
   
     header("Location: ".$role[$row2->role]); //Skickar användaren till en sida beroende på rollvärdet.
     }
     else
     {
       echo "Fel licens ID eller lösenord."; //Om fel information skrivs i vid inlogg visas detta felmeddelande.
     }
   }
    $content = <<<END
   
   
   
   
            
            <div class="container">
             <div class="jumbotroninlogg">
               <div class="jumbotron">
   
   
                  <h2>Logga in med</h2>
                  
                             <ul class="nav nav-tabs">
     <li role="presentation" ><a href="login.php">Email</a></li>
     <li role="presentation" class="active"><a href="loginlicens.php">Licens ID</a></li>
   </ul>
   
             <form method="post" action="loginlicens.php" >
               
                   <div class="form-group">
                       <input name="licenseID" type="tel" class="form-control" placeholder="Licens ID" maxlength="10" patter="[A-Za-z0-9]+$" title="10 tecken (A-Z & 0-9)" required>
                   </div>
     
                   <div class="form-group">
                       <input type="password" name="password" class="form-control"  placeholder="Lösenord">
                   </div>
                   <input type="submit" class="btn btn-default" value="Logga in">
   
   
               </form>
   
               </div><!-- Stänger jumbotronen --> 
               </div><!-- Stänger jumbotroninlogg --> 
            </div><!-- Stänger container --> 
   
     
   <div class="indexcarousel">
   <div class="bs-example">
       <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel" height="200">
         <!-- Carousel indicators -->
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
           </ol>   
          <!-- Carousel items -->
           <div class="carousel-inner">
               <div class="active item">
                 <img src="img/bild1.jpg" alt="Brandbil">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild2.jpg" alt="garage">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild3.jpg" alt="kläder">
                   <div class="carousel-caption">
                   </div>
               </div>
               <div class="item">
                 <img src="img/bild4.jpg" alt="hus">
                   <div class="carousel-caption">
                   </div>
               </div>
           </div>
           <!-- Carousel nav -->
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="carousel-control right" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
       </div>
   </div>
   </div>
   
END;
     echo $navigation_admin;
     echo $header;
     echo $content;
     ?>