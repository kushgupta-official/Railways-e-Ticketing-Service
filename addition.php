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
            
$ll=$_POST['l'];
$mm=$_POST['m'];
$nn=$_POST['n'];
$oo=$_POST['o'];
$pp=$_POST['p'];
$qq=$_POST['q'];
$rr=$_POST['r'];
            session_start();

 if($ll==""||$mm==""||$nn==""||$oo==""||$pp==""||$qq==""||$rr=="")
 {
  echo "fill all";
 }
 else
 {
  mysql_connect("localhost","root","");
  mysql_select_db("irctc");

 $query="INSERT INTO train (source,destination,date,time,trainid,train_name,seats) VALUES('$ll','$mm','$nn','$oo','$pp','$qq','$rr')" ;
 mysql_query($query);
 echo "<p align='center'><font color='green' size='8pt'>Train added</font></p>";
 
 }
?>
        </div></body></html>