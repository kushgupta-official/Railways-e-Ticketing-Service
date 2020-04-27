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
          <div class="nav">
            <nav>
            <a href='all3.php'>TRAINS |</a>
            <a href='book.php'>BOOK |</a>
            <a href='cancel.php'>CANCEL |</a>
            <a href='show.php'>YOUR BOOKING |</a>   
            <a href='logout.php'>LOGOUT</a>    
            
            </nav>
            
            </div>
<?php
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
            session_start();

mysql_connect("localhost","root","");
mysql_select_db("irctc");

$query="UPDATE train SET seats=seats+'$y' WHERE trainid='$x'";
$query2="UPDATE book SET seats=seats-'$y' WHERE PNR='$w'";
$query3="DELETE FROM book WHERE PNR='$w'";            

mysql_query($query);
mysql_query($query2);
mysql_query($query3);

echo "<p align='center'><font color=red size='8pt'>Your ticket is cancelled</font></p>";

?>
        </div></body></html>