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
    $anonymous = "false";
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $reason = $_POST['reason'];
    if(isset($_POST['oreason']))
    {
        $oreason = $_POST['oreason'];
    }
    if($reason == 'other')
    {
        $reason = $oreason;
    }
    if(isset($_POST['anonymous']))
    {
        $anonymous = $_POST['anonymous'];
    }
    if($anonymous == 'true')
    {
        $name = 'NULL';
    }
    $sql = "INSERT INTO donations(`name`, `amount`, `reason`) VALUES('$name','$amount','$reason')";
    if ($conn->query($sql) == TRUE) 
	{
  	    echo "<script>alert('You Will be Redirected');</script>";
    }
    else
    {
        echo "<script>alert('Error!!');</script>";       
    }
?>
    