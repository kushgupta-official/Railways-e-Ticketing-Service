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
            <div class="nav">
            <nav>
        <a href='add.html'>ADD |</a>
        <a href='del.php'>DELETE |</a>
        <a href='up.php'>UPDATE |</a>
        <a href='all2.php'>TRAINS |</a>
        <a href='logout.php'>LOGOUT |</a>        
        
        </nav>
            </div>       
            
            
    <?php 
$ll = $_POST['l'];
$mm = $_POST['m'];
$nn = $_POST['n'];
            session_start();

if($ll=="" || $mm=="" || $nn=="")
{
  echo "Please Fill all the fields";
}
else
{
  mysql_connect("localhost","root","");
  mysql_select_db("irctc");
  $query="SELECT * FROM train WHERE trainid='$ll' AND train_name='$mm'";
  $result = mysql_query($query);
$row=mysql_num_rows($result);  
if($row==0)
  {
    echo "Train route does not exist";
  }
  else
  {
    $query1 = "UPDATE train SET seats ='$nn' WHERE trainid='$ll' AND train_name='$mm'";
	mysql_query($query1);
	echo "<p align='center'><font color=green size='10pt'>Database Updated</font></p>";
  }
 }


?>
        </div></body></html>