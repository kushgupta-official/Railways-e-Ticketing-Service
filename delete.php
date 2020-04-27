<html>
      <head>
        <link rel="stylesheet" type="text/css" href="makeover2.css">
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
$w=$_POST['a'];
            session_start();

mysql_connect("localhost","root","");
mysql_select_db("irctc");

$query="DELETE FROM train WHERE trainid='$w'";
mysql_query($query);
echo "<p align='center'><font color=red size='8pt'>Train record deleted</font></p><br>";

?>
        </div></body></html>