<html>
<head>
        <link rel="stylesheet" type="text/css" href="makeover2.css">
        <title>IRCTC WEBSITE</title>
        
    </head>
    <body>
        <div class="main">
                <div class="name">
                    <h1>IRCTC:LIFELINE OF MILLIONS</h1>
                    <h2>SAFETY | SECURITY | PUNCTUALITY </h2>
            </div> 
             <div class="image">
            <img src="small.jpg">
            
            </div>
<?php
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];
            
 if($w=="" || $x=="" || $y=="" || $z=="")
 {
  echo "Please Fill All Details<br>";
 }
 else
 {
  mysql_connect("localhost","root","");
  mysql_select_db("irctc");
  $query="SELECT * FROM user WHERE name='$w' AND password='$y'";
  $result=mysql_query($query);
  $row=mysql_num_rows($result);
  
  if($row==0)
  {
   $query1="INSERT INTO user (name,email,password,phone,confirmation) VALUES ('$w','$x','$y','$z',0)";
   mysql_query($query1);
   echo "<p align='center'><font color='green' size='10pt'>User Created</font></p><br>";
  }
  else
  { 
   echo "User already exists<br>";
   $result=mysql_query("SELECT confirmation FROM user WHERE name='$w' AND password='$y'");
   $row=mysql_fetch_array($result);
   
   if ($row[0]==1)
   {
    echo "You are confirmed<br>";
   }
   else
   {
    echo "You are not confirmed<br>";
   }
  }
 }
 echo "<center><a href='login.php'><p><font size='4pt'> Click here to Login</center></font></p><br>";
 
 ?>
        </div></body></html>