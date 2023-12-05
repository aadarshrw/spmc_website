<?php
	session_start();
  
	$servername = "localhost";
	$username = "root";
	$pword = "";
	$dbname="church_db";

	$conn = new mysqli($servername, $username, $pword, $dbname);

	if ($conn->connect_error) 
	{
		echo "<script>alert('Connection failed');</script>";
	}
    if(!isset($_SESSION['name']))
    {
        header('location:login.php');
    }
?>
<html>
    <head>
        <title>St. Peter's Marthoma Church | Admin</title>
        <script lang="javascript" src="JS/nav.js"></script>
        <link rel="stylesheet" href="CSS/main (admin).css">
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/9bc2a6e0e2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="accounts.html" target="mainframe">Accounts</a>
            <a href="manageexpenses.html" target="mainframe">Expenses</a>
            <a href="church_db_connect/logout.php" target="_parent" style="position: absolute; bottom: 10%;">Logout</a>
        </div>
        <div id="main">
            <div class="topnav">
                <img onclick="openNav()" src="assets/menu.png">
                <?php
                {
                    echo'<img class="pfp" src="assets/pfp.png"><b><a class="account" href="">'.$_SESSION['name'].'</a></b>';
                }
                ?> 
                <a href="intro (admin).html" target="mainframe"><img src="assets/logo 1.png"  style="float: right; width: 160px; right: 12px; bottom: 2px;"></a>
            </div>
            <iframe name="mainframe"></iframe>
        </div>
    </body>
</html>