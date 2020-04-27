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
$aa = $_POST['a'];
$bb = $_POST['b'];
$cc = $_POST['c'];
$dd = $_POST['d'];
$ee = $_POST['e'];
$ff = $_POST['f'];
$gg = $_POST['g'];
            session_start();

if($aa=="" || $bb=="" || $cc=="" || $dd=="" || $ee=="" || $ff=="" || $gg=="")
{
  echo "Please Fill all details";
}
else
{
 mysql_connect("localhost","root","");
 mysql_select_db("irctc");
 $query="UPDATE train SET seats=seats-'$gg' WHERE trainid='$aa'";
 $result=mysql_query($query);
// $row=mysql_fetch_array($result);
 if($result==0)
 {
	echo "Entered wrong details.";
 }
 else
 {
   $val=mt_rand(3000,7000);
	$query2="INSERT INTO book (PNR,trainid,train_name,source,destination,time,date,seats) VALUES ('$val','$aa','$bb','$cc','$dd','$ee','$ff','$gg')";
		mysql_query($query2);
	
	echo "<p align='center'><font color=blue size='10pt'> Tickets booked succesfully!!</font></p><br>";
	echo "<p align='center'><font color=black size='10pt'> Your PNR no. is '$val'</font></p><br><br>";
	
 }
}
?>
        </div></body></html>            