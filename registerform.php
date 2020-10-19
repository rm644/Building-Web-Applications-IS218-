<!DOCTYPE HTML>
<html>
<head>

<title>Registration Form Data</title>
<link rel="icon" href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">


</head>

<body>
    <header class="main">
        <h1>Registration Form Data</h1>
    </header>
    <section class="main">
        
    </section>
</body>
</html>

<?php
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $birthday = $_REQUEST['birthday'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $strResult = '';
  $isValidForm = true;

  if(strlen(trim($firstname)) == 0){
    $isValidForm = false;
    $strResult .= 'Name is empty<br/>';
  }

 
  if(strlen(trim($lastname)) == 0){
    $isValidForm = false;
    $strResult .= 'Name is empty<br/>';
  }

  if(strlen(trim($birthday)) == 0){
    $isValidForm = false;
    $strResult .= 'Date is empty<br/>';
  }

  if(strlen(trim($email)) == 0){
      $isValidForm = false;
      $strResult .= 'Email is empty<br/>';
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $isValidForm = false;
      $strResult .= 'Email is invalid<br/>';
  }

  if( !preg_match( '/[^A-Za-z0-9]+/', $password) || strlen( $password) < 8){
      $isValidForm = false;
      $strResult .= 'Password is invalid <br/>';
  }

  if (true|| $isValidForm){
      echo "Here is your posted data: <br/>";
      echo "<br>Name: $firstname $lastname<br>
      <br>Birthday: $birthday<br>
      <br>Email: $email<br>
      <br>Password: $password";
  }else
      echo $strResult;
   
?>

