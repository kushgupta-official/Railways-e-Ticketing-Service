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
            <a href='all'>YOUR BOOKING |</a>   
            <a href='logout.php'>LOGOUT</a> <br><br><br>   
            
            </nav>
            
            </div>
            
<?php
            session_start();
mysql_connect("localhost","root","");
mysql_select_db("irctc");

$query = "SELECT * FROM train";
$result = mysql_query($query);
$row = mysql_num_rows($result);
if($row == 0)
{
  echo "No trains available";
}
else
{
  echo"<center>";
  echo "<table border='6' width='75%'>";
  echo"<tr height = '5px'>";
  echo"<td width = '15%'>SOURCE</td>";
  echo"<td width = '15%'>DESTINATION</td>";
  echo"<td width = '15%'>DATE</td>";
  echo"<td width = '15%'>TIME</td>";
  echo"<td width = '15%'>TRAIN ID</td>";
  echo"<td width = '15%'>TRAIN NAME</td>";
  echo"<td width = '10%'>SEATS</td>";
    echo"</center>";

  while($row = mysql_fetch_array($result))
    {
	    echo"<center>";
      echo "<table border='3' width='75%'>";
      echo "<tr height='5px'>";
      echo "<td width='15%'>".$row[0]."</td>";
      echo "<td width='15%'>".$row[1]."</td>";
      echo "<td width='15%'>".$row[2]."</td>";
      echo "<td width='15%'>".$row[3]."</td>";
	  echo "<td width='15%'>".$row[4]."</td>";
	  echo "<td width='15%'>".$row[5]."</td>";
	  echo "<td width='10%'>".$row[6]."</td>";
	  
      echo "</tr>";
      echo "</table>";
	  echo"</center>";
	}
	
} 

?>       
        </div></body></html>