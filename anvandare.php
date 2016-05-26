<head>
   <title>
      Användare
   </title>
</head>
<?php
 include('template.php'); //inkluderar template-strukturen.
protect_page(); //Kräver att besökaren är inloggad
protect_admin(); //Endast en admin kan komma åt denna sida
?>

<div class="container">
   <div class="jumbotronanvandare">
      <div class="jumbotron">
         <h2> Alla användare </h2>
         <table id="anvandar_tabell"> <!-- tabell över alla användare från databasen -->
            <p> Här kan du ta bort enskilda användare eller hela företag som inte längre<br>
               har behörighet på sidan </p>
           <p class="tagitsbort"> <?php echo @$_GET['deleted']; ?>  </p> <!-- Ger feedback om användaren/företaget tas bort -->
            <tr>
               <th>UserId</th>
               <th>Email</th>
               <th>Företag</th>
               <th>Namn</th>
               <th>Telefon</th>
               <th>Datum</th>
               <th>Status</th>
               <th>Roll</th>
               <th>Ta bort</th>
               <th>Hela företaget</th>
            <tr>
            <tr>
               <?php
             
                        $query = "select * from user order by date DESC"; //Hämtar alla användare och listar de efter senast tillagda.

                        $run = $mysqli->query($query); //$run kör frågan till databasen.
                  
                  while($row=mysqli_fetch_array($run)){ //hämtar vissa rader från user-tabellen 
                  
                        $userID = $row['userID']; //Hämtar användarens user id.
                        $email = $row['email']; //Hämtar användarens email.
                        $company = $row['company']; //Hämtar användarens företag.
                        $fname = $row['fname']; //Hämtar användarens förnamn.
                        $tel = $row['tel']; //Hämtar användarens telefonnummer.
                        $test_status = $row['test_status']; //Hämtar användarens test-status.
                        $date = $row['date']; //Hämtar när användaren lades till.
                        $role = $row['role']; //Hämtar användarens roll-värde (1 = admin, 2 = useradmin, 3 = user).
                  
                  ?>
               <td><?php echo $userID; ?></td> <!-- alla user idn -->
               <td><?php echo $email; ?></td>  <!-- vilken email användaren är registrerad på -->
               <td><?php echo $company; ?></td>  <!-- vilket företag användaren kommer ifrån -->
               <td><?php echo $fname; ?></td> <!-- alla förnamn, kan vara NULL -->
               <td><?php echo $tel; ?></td> <!-- telefonnummer, kan vara NULL-->
               <td><?php echo $date; ?></td> <!-- När de var tillagda i systemet -->
               <td><?php echo $test_status; ?></td> <!-- Status på testet -->
               <td><?php echo $role; ?></td> <!-- vilket rollvärde användaren har  (1 = admin, 2 = useradmin, 3 = user). -->
               <td><a class="deletebutton" href='delete.php?del=<?php echo $userID;?>'><img src="img/delete.ico"></a></td> <!-- tar bort ett objekt -->
               <td align="center"><a class="deletebutton" href='delete2.php?dele=<?php echo $company;?>'><img src="img/delete.png"></a></td> <!-- tar bort alla från samma företag -->
            </tr>
            <?php } ?>
         </table>
      </div><!-- Stänger jumbotron --> 
   </div><!-- Stänger jumbotronanvandare --> 
</div><!-- Stänger container --> 


<?php        
   echo $navigation_admin; //Visar admins navbar.
   echo $header;
   ?>