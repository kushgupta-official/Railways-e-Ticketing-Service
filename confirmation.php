<html>
      <head>
        <link rel="stylesheet" type="text/css" href="makeover1.css">
        <title>IRCTC WEBSITE</title>
        
    </head>
    <body>
        <div class="main">
                <div class="name">
                    <h1><u>IRCTC:LIFELINE OF MILLIONS</u></h1>
                    <h2>SAFETY | SECURITY | PUNCTUALITY </h2>
            </div>
        <div class="image">
            <img src="small.jpg">
            
            </div>
    <div class="nav">
            <nav>
        <a href='add.html'>ADD |</a>
        <a href='del.php'>DELETE |</a>
        <a href='up.php'>UPDATE |</a>
        <a href='all2.php'>TRAINS |</a>
        <a href='logout.php'>LOGOUT |</a> <br><br><br>       
        
        </nav>
            </div>        
<?php
session_start();
if(isset($_SESSION['name']))
{
$v1=$_GET['new'];
echo "<div class='form7'>";    
echo "<center><form method='POST' action=''><p><font size='5pt'>".$v1."</font></p> :<input type='number' name='a'><br><br><input id='submit' type='submit' value='SAVE'></form></center>";
echo "</div>";    
$val =$_POST['a'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
mysql_query("UPDATE user SET confirmation='$val' WHERE name='$v1'");

}
?>
        </div></body></html>