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
            <a href='all3.php'>TRAINS |</a>
            <a href='book.php'>BOOK |</a>
            <a href='cancel.php'>CANCEL |</a>
            <a href='all'>YOUR BOOKING |</a>   
            <a href='logout.php'>LOGOUT</a> <br><br>   
            
            </nav>
            
            </div>
            
<?php
            session_start();
  $x=$_POST['a'];
  mysql_connect("localhost","root","");
  mysql_select_db("irctc");
  $query = "SELECT * FROM book WHERE PNR='$x'";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
  if($row==0)
  {
    echo"Wrong PNR Entered!";
  }
  else
  {
 echo "<p align='center'><font color=black size='8pt'>TICKET DETAILS</font></p>" ; 
 echo "<center>";      
  echo "<table border='6' width='75%'>";
  echo"<tr height = '5px'>";
  echo"<td width = '10%'>PNR</td>";
  echo"<td width = '20%'>TRAIN ID</td>";
  echo"<td width = '20%'>TRAIN NAME</td>";
  echo"<td width = '10%'>SOURCE</td>";
  echo"<td width = '10%'>DESTINATION</td>";
  echo"<td width = '10%'>TIME</td>";
  echo"<td width = '10%'>DATE</td>";
  echo"<td width = '10%'>SEATS</td>";
  echo "</tr>";
  echo "</table>";
  
      echo "<table border='1' width='75%'>";
      echo "<tr height='5px'>";
      echo "<td width='10%'>".$row[0]."</td>";
      echo "<td width='20%'>".$row[1]."</td>";
      echo "<td width='20%'>".$row[2]."</td>";
      echo "<td width='10%'>".$row[3]."</td>";
	  echo "<td width='10%'>".$row[4]."</td>";
	  echo "<td width='10%'>".$row[5]."</td>";
	  echo "<td width='10%'>".$row[6]."</td>";
      echo "<td width='10%'>".$row[7]."</td>";
      echo "</tr>";
      echo "</table>";
      echo "</center>"; 
	
  } 
  


?>
       
        </div></body></html>