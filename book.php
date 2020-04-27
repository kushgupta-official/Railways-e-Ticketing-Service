<!DOCTYPE html>
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
            <a href='all3.php'>TRAINS |</a>
            <a href='book.php'>BOOK |</a>
            <a href='cancel.php'>CANCEL |</a>
            <a href='all'>YOUR BOOKING |</a>   
            <a href='logout.php'>LOGOUT</a>    
            
            </nav>
            
            </div>

<center>
    <div class="book">
<form method = "POST" action = "booking.php">
    <h2>BOOK YOUR TICKETS HERE</h2><br>
    <strong>Train_Id  : </strong>        <input type="text" name="a" size="30"><br><br>
    <strong>Train Name : </strong>       <input type="text" name="b" size="30"><br><br>
    <strong>Enter Source : </strong>     <input type="text" name="c" size="30"><br><br>
    <strong>Enter Destination :</strong> <input type="text" name="d" size="30"><br><br>
    <strong>Enter Time :   </strong>     <input type="time" name="e" size="30"><br><br>
    <strong>Enter Date : </strong>       <input type="date" name="f" size="30"><br><br>
    <strong>Enter Seats : </strong>      <input type="number" name="g" size="30"><br><br>
<input type="submit" value="book">

        </form></div>






            </center></div></body>
</html>

