<?php
  session_start();
  require "db.php";

  $data = $_POST;
  if(isset($data['do_register'])) {
    //echo "ok";
		
    $errors1 = array();
    if(empty($data['frsName'])) {
      $errors1[] = 'Invalid First Name!';
    }

    if(empty($data['login'])) {
      $errors1[] = 'Invalid Login!';
    }

    if(empty($data['lstName'])) {
      $errors1[] = 'Invalid Last Name!';
    }

    if(empty($data['usPasw'])) {
      $errors1[] = 'Invalid Password!';
    }

    if(empty($data['mnt'])) {
      $errors1[] = 'Invalid Birth Date!';
    }
    
    if(empty($data['gender'])) {
      $errors1[] = 'Invalid ваш пол!';
    }

    if(empty($data['phNumb'])) {
      $errors1[] = 'Invalid Phone Number!';
    }

    if(empty($data['eMail'])) {
      $errors1[] = 'Invalid Email!';
		}
		
		if(R::count('smt', "login = ?", array($data['login'])) > 0) {
			$errors1[] = "This login already have been used!";
		}

		if(R::count('smt', "e_mail = ?", array($data['eMail'])) > 0) {
			$errors1[] = "This Email already have been used!";
		}

    if(empty($errors1)) {
			$user = R::dispense('smt');

			$user->frsName = $data['frsName'];
			$user->login = $data['login'];
			$user->lstName = $data['lstName'];
			$user->eMail = $data['eMail'];
			$user->mnt = $data['mnt'];
			$user->gender = $data['gender'];
			$user->phNumb = $data['phNumb'];
      $user->password = md5($data['usPasw']);
      
      $_SESSION['username'] = $data['frsName'];

      R::store($user);
			echo '<div style="color: green;">Done!!</div><hr>';
    } else {
      echo '<div style="color: red;">' . array_shift($errors1) . '</div><hr>';
    }
  }

  if(isset($data['do_logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: index.php");
  }

  if(isset($data['do_login'])) {
    //echo "ok";
    $errors2 = array();
    $user = R::findOne('smt', 'login = ?', array($data['login1']));
    if($user) {
      if(md5($data['password']) == $user->password) {
        $_SESSION['login'] = $user->login;
        header("location: usercard.php");
      } else {
        $errors2[] = 'Invalid Password!';
      }
    } else {
      $errors2[] = 'Invalid Login!';
    }

    if(!empty($errors2)) {
      echo '<div style="color: red;">' . array_shift($errors2) . '</div><hr>';
    }
  }
?>