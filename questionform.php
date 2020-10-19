<!DOCTYPE HTML>
<html>
<head>

<title>Question Form Data</title>
<link rel="icon" href="https://png.pngtree.com/png-clipart/20190516/original/pngtree-arrow-icon-in-flat-style-arrow-symbol-web-design-logo-png-image_3548330.jpg">


</head>

<body>
    <header class="main">
        <h1>Question Form Data</h1>
    </header>
    <section class="main">
        
    </section>
</body>
</html>




<?php
  $questionName = $_REQUEST['questionName'];
  $questionBody = $_REQUEST['questionBody'];
  $questionSkills = $_REQUEST['questionSkills'];

  $strResult = '';
  $isValidForm = true;

  if(strlen($questionName) == 0){
      $isValidForm = false;
      $strResult .= 'Question Name is empty<br/>';
  }
  else if(strlen($questionName) < 3) {
    $isValidForm = false;
    $strResult .= 'Question Name is too short<br/>';

  }
  else if(strlen($questionName) > 500) {
    $isValidForm = false;
    $strResult .= 'Question Name is too long<br/>';

    
  }
  
  if(strlen($questionBody) == 0){
      $isValidForm = false;
      $strResult .= 'Question Body is empty<br/>';
  }

  else if(strlen($questionBody > 500)) {
    $isValidForm = false;
    $strResult .= 'Question Body is too long<br/>';
  }
  

  if($isValidForm){
      echo "Here is your posted data<br/>";
      echo "$questionName<br>";
      echo "$questionBody<br>";
      $str = implode (", ", $questionSkills);
      echo $str;
  }else
      echo $strResult;
   
?>

