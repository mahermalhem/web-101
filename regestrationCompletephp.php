<!DOCTYPE html>
 <html>
 <head>
    <title>registerPage</title>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" 
     href="registerPageStyle.css">
      <script type="text/javascript"> 
      alert("register complete");
      </script>
   
  </head>
  <BODY id="BODY" >
  	 
    <?php
    header("location:FirstPage.php");
    $ID=$_POST["ID"];
  	$firstName=$_POST["firstName"]; 
  	$lastName=$_POST["lastName"];
  	$email=$_POST["email"];
    $fpassword=$_POST["fpassword"];
    $cpassword=$_POST["cpassword"];
    $liveIn=$_POST["liveIn"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $stdPhoto=$_POST["stdPhoto"];
    $story=$_POST["story"];

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'huarch');
    

    $st='insert into student values ("'.$ID.'","'.$firstName.'","'.$lastName.'","'.$email.'","'.$fpassword.'","'.$cpassword.'",
    "'.$liveIn.'","'.$phone.'","'.$gender.'","'.$stdPhoto.'","'.$story.'")';
    $he=$mysqli->query($st) or die("the query didn`t work");
    
    $mysqli->close();
    
    ?>

  </BODY>
  </html>