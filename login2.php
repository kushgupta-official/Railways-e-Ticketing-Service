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
session_start();
$m=$_POST['a'];
$o=$_POST['b'];

$_SESSION['name']=$m;
$_SESSION['pswd']=$o;

mysql_connect("localhost","root","");
mysql_select_db("irctc");

$query="SELECT * FROM user WHERE name='$m' AND password='$o'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$query1="SELECT * FROM admin WHERE name='$m' AND password='$o'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);


if(name==""||pswd=="")
{
 echo "Plz fill all fields";
 echo "<a href='login.php'>Try Again</a>";
}
else if($row1 != 0)
{
    echo "<a href='add.php'>ADD |</a>";
        echo "<a href='del.php'>DELETE |</a>";
        echo "<a href='up.php'>UPDATE |</a>";
        echo "<a href='all2.php'>TRAINS |</a>";
        echo "<a href='logout.php'>LOGOUT |</a><br><br>";
 $query = "SELECT * FROM user";
 $result=mysql_query($query);
echo "<center>";    
 echo"<table border='6' width='75%'>";
 echo"<tr height='5'>";
 echo"<td width='15%'>NAME</td>";
 echo"<td width='25%'>EMAIL</td>";
 echo"<td width='15%'>PASSWORD</td>";
 echo"<td width='15%'>PHONE</td>";
 echo"<td width='15%'>PNR</td>";
 echo"<td width='15%'>CONFIRMATION</td>";
 echo"</tr>";
 echo"</table>";

 
 while($row=mysql_fetch_array($result))
 {
  echo "<center>";
  echo"<table border='1' width='75%'>";
 echo"<tr height='5'>";
 echo"<td width='15%'>".$row[0]."</td>";
 echo"<td width='25%'>".$row[1]."</td>";
 echo"<td width='15%'>".$row[2]."</td>";
 echo"<td width='15%'>".$row[3]."</td>";
 echo"<td width='15%'>".$row[4]."</td>";
 echo"<td width='15%'>".$row[5]."<a href='confirmation.php?new=$row[0]'> Verify </a></td>";
 echo"</tr>";
 echo"</table>";
 echo "</center>";
     

 }

}
else
{
    
 if($row==0)
 {
  echo "Please Register Here<a href='form.php'><br><br>Register</a></center>";
 }
 else
 {
  $result=mysql_query("SELECT confirmation FROM user WHERE name='$m' AND password='$o'");
  $row=mysql_fetch_array($result);
  if($row[0]==1)
  {
      echo "<a href='all3.php'>TRAINS &nbsp |</a>";
    echo "<a href='book.php'>BOOK &nbsp |</a>";
    echo "<a href='cancel.php'>CANCEL &nbsp |</a>";
    echo "<a href='all.php'>YOUR BOOKING &nbsp |</a>";   
    echo "<a href='logout.php'>LOGOUT &nbsp </a>";    
   echo "<p align='center'><font color=green size='10pt'>Successfully Logged In</font></p>";
   echo "<p align='center'><font color=green size='10pt'>You are confirmed!!!</font></p>";
       
   
            
        
  }
  else
  {
      echo "<a href='all3.php'>TRAINS |</a>";
    echo "<a href='book.php'>BOOK |</a>";
    echo "<a href='cancel.php'>CANCEL |</a>";
    echo "<a href='all.php'>YOUR BOOKING |</a>";   
    echo "<a href='logout.php'>LOGOUT</a>";    
   echo "<p align='center'><font color=red size='10pt'>You are not confirmed !!!</font></p><br>";
  }

}
}
?>
        </div></body></html>
     