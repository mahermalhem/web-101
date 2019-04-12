<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <title> HU Architecture </title>
    <link rel="stylesheet" type="text/css" href="halo.css">
  </head>
  <body class="body">


    <?php
    $id=$_POST["id"];
    $fpassword=$_POST["fpassword"];
    if(!empty($id)){
      if(!empty($fpassword)){
         $mysqli = new mysqli('127.0.0.1', 'root',
          '', 'huarch');
         $st="select id,fpassword from student where id=".$id." and fpassword =".$fpassword ;
         
         $result=$mysqli -> multi_query($st) or die("worng id or password");
         if($result -> num_row > 0)
         while ($row = $result -> fetch_assoc())) {
           print("fafa");
         }
         else{print("wut")}
      else{
          print("the password souldn`t be empty");
      }}
        else{
          print("the ID souldn`t be empty");
        }  
       
      $mysqli->close();
    
    ?>



      <table width="100%">
        <tr>
         <h1><?php print("hello ".$id) ?> </h1>
        </tr>
        <tr>
          <th colspan="5" width="100%" height="200"> <img src="huuni.png" width="100%" height="200" ></th>
        </tr>
        <tr>
          <th id="tec">Best of
            <br>
            <ul class="tec">
            <li><a href="https://web.facebook.com">project</a></li>
            <li><a href="">books</a></li>
            <li><a href="">technologies</a></li>
          </ul>
          </th>
        <th id="tec">Projects
          <br>
          <ul class="tec">
          <center>
            <li><a href=""> first year</a></li>
            <li><a href=""> second year</a></li>
            <li><a href="">third year</a> </li>
            <li><a href=""> fourth year</a></li>
            <li><a href=""> final projects</a></li>
          </ul>
        </th>
        <th id="tec">Books
          <br>
          <ul class="tec">  
            <li><a href=""> Architecture: Form, Space, and Order</a></li>
            <li><a href=""> The Future of Architecture in 100 Buildings </li></a>
            <li><a href=""> Architecture: A World History</li></a>
            <li><a href=""> Architecture: Residential Drafting and Design</li></a>
            <li><a href=""> World Architecture: The Masterworks</li></a>
            <li><a href=""> Modern Architecture Since 1900</li></a>
            <li><a href=""> Craftsman Homes (Dover Architecture)</li></a>
          </ul>
        </th>
        <th id="tec">technologies
          <br>
          <ul class="tec">
            <li><a href=""> autocad</li></a>
            <li><a href=""> 3d max</li></a>
            <li><a href=""> fuzor</li></a>
            <li><a href=""> curv</li></a>
            <li><a href=""> google cardboard</li></a>
            <li><a href=""> the cube</li></a>
          </ul>
        </th>
        <th id="tec">About
          <br>
          <ul class="tec">
          <li><a href="">us</a></li>
          <li><a href=""> hashmite university</a></li>
          <li><a href=""> archetecture engineers</a></li>
          </center>
        </ul>
        </th>
        </tr>
        <br>
        <table width="80%" style="margin-left:5% ">
          <tr>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
          </tr>
          <tr>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
          </tr>
          <tr>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
          </tr>
          <tr>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
            <th><img src="huuni.png" width="400" height="
              200"></th>
          </tr>
        </table>
       </table>
      
  </body>
  </html>