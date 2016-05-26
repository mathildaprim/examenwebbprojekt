<head>
   <title>
      Anställda
   </title>
</head>
<script>
</script>
<?php
 include('template.php'); //inkluderar template-strukturen.
protect_page(); //Kräver att besökaren är inloggad
protect_useradmin(); //Kräver att användaren är administrativanvändare
?>

<div class="container">
   <div class="jumbotronanvandare">
      <div class="jumbotron">
         <h2> Mina anställda </h2>
         <table id="anvandar_tabell"> <!-- tabell över alla användare från databasen -->
            <p> Här kan du godkänna/underkänna dina anställda genom att <br>
               klicka på någon av knapparna. </p>
            <p class="tagitsbort"> <?php echo @$_GET['uppdaterad']; ?></p> <!-- Ger feedback om användaren har uppdaterats -->
            <tr>
               <th>Licens-ID</th>
               <th>Lösenord</th>
               <th>Email</th>
               <th>Namn</th>
               <th>Telefon</th>
               <th>Status</th>
               <th>Godkänn</th>
               <th>Underkänn</th>
            <tr>
            <tr>
               <?php
                global $_SESSION;
                
                        $mycompany = $_SESSION['company']; //$mycompany är samma som den inloggades företag.
   

                        $query = "select * from user 
                        where company = '$mycompany' order by test_status"; //Hämtar alla användare från samma företag som den inloggade.

                        $run = $mysqli->query($query);  //$run kör frågan till databasen.
                  
                  while($row=mysqli_fetch_array($run)){ //hämtar vissa rader från user-tabellen 
                  
                        $email = $row['email']; //Hämtar användarnas email.
                        $password = $row['password']; //Hämtar användarnas lösenord.
                        $fname = $row['fname']; //Hämtar användarnas förnamn.
                        $tel = $row['tel']; //Hämtar användarnas telefonnummer.
                        $test_status = $row['test_status']; //Hämtar användarnas test-status.
                        $licenseID = $row['licenseID']; //Hämtar användarnas licenseID.
                  
                  ?>
               <td><?php echo $licenseID; ?></td> <!-- alla user idn -->
               <td><?php echo $password; ?></td> <!-- alla user idn -->
               <td><?php echo $email; ?></td>  <!-- vilken email användaren är registrerad på -->
               <td><?php echo $fname; ?></td> <!-- alla förnamn, kan vara NULL -->
               <td><?php echo $tel; ?></td> <!-- telefonnummer, kan vara NULL-->
               <td><?php echo $test_status; ?></td> <!-- Status på testet -->
               <td><a class="deletebutton" href='finished.php?done=<?php echo $licenseID;?>'><img src="img/check.png"></a></td> <!-- godkänner användaren -->
               <td><a class="deletebutton" href='failed.php?fail=<?php echo $licenseID;?>'><img src="img/fail.png"></a></td> <!-- underkänner användaren -->
            </tr>
            <?php } ?>
         </table>
      </div><!-- Stänger jumbotron --> 
   </div><!-- Stänger jumbotronanvandare --> 
</div><!-- Stänger container --> 


<?php        
   echo $navigation_useradmin;
   echo $header;
   ?>