<html>
 
    <head>
	  <meta charset="utf-8">
	  <title> worksheet 19 </title>
	</head>
    
	<body>
	
	  <?php 
	  
	  extract($_POST);
	  
	   print("HI ".$fname." .Thank you for completing the survey. You have been added to the ".$book." mailing list <br>");
	   
	   print("The Following information has been saved in our database:<br>");
	   
	   print("Name: ".$fname." ".$lname."<br>");
	   print("Email: ".$email." <br>");
	   print("Phone:".$phone." <br>");
	   print("OS:". $os. "<br>");
	   
	   print("This is only a sample form. You have not been added to mailing list.");
	   
	   
	  
 
	  
	  
	  ?>
	
	</body>
 
 
 
  </html>