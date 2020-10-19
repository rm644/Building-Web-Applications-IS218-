<!DOCTYPE HTML>
<html>
<head>

<title>Login Form Data</title>
<link rel="icon" href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">


</head>

<body>
    <header class="main">
        <h1>Login Form Data</h1>
    </header>
    <section class="main">
        
    </section>
</body>
</html>





<?php
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $strResult = '';
  $isValidForm = true;

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

  if($isValidForm){
      echo "Here is your posted data<br/>";
      echo "$email, $password";
  }else
      echo $strResult;
   
?>