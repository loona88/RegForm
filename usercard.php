<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    *{
      font-family: Verdana;
    }
    .usercard{
      padding: 15px;
      font-size: 20px;
      background-color: rgb(73, 139, 161);
			width: 330px
    }
    input{
      margin-top: 15px;
    }
  </style>
  <title>Usercard</title>
</head>
<body>

  <?php
    $user = R::findOne('smt', 'login = ?', array($_SESSION['login']));
    echo "<div class='usercard'>
           <p> First Name: $user->frs_name </p>
           <p> Last Name: $user->lst_name </p>
           <p> Email: $user->e_mail </p>
           <p> Birth date: $user->mnt </p>
           <p> Gender: $user->gender </p>
           <p> Ph. Number: $user->ph_numb </p>
          </div>
         ";

         if((2018 - substr($user->mnt, 0, 4)) >= 50) {
           echo "Акция другая для всех старше 50";
         } else if((2018 - substr($user->mnt, 0, 4)) < 18){
           echo "Акция для всех моложе 18 ";
         } else {
           echo "Your age is " . (2018 - substr($user->mnt, 0, 4));
         }
  ?>

  <form action="server.php" method="post">
    <input id="logout" type="submit" value="Logout" name="do_logout">
  </form>
</body>
</html>