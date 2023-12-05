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
    $user_name=$_POST['username'];
    $password=$_POST['password'];

    if($user_name == 'admin' && $password == 'admin69420')
    {
        header('location:http://localhost/phpmyadmin/');
    }
    else
    {
        echo "<script>alert('username or password incorrect');</script>";
    }
?>