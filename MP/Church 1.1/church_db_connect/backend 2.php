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
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $type=$_POST['type'];

    if($type == 'user')
    {
        $s = "SELECT * FROM users WHERE user_name = '$user_name' && password = '$password'";
        $res = mysqli_query($conn,$s);
        $num = mysqli_num_rows($res);
        if($num == 1)
        {
            $row = mysqli_fetch_array($res);
            $_SESSION['name'] = $row['name'];
            header('location:../main (user).php');
        }
        else 
        {
            $error = 'Username/Password is incorrect'; 
        }
    }

    else if($type == 'member')
    {
        $s = "SELECT * FROM members WHERE user_name = '$user_name' && password = '$password'";
        $res = mysqli_query($conn,$s);
        $num = mysqli_num_rows($res);
        if($num == 1)
        {
            $row = mysqli_fetch_array($res);
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['user_name'];
            header('location:../main (member).php');
        }
        else 
        {
            $error = 'Username/Password is Incorrect'; 
        }
    }
    else
    {
        $s = "SELECT * FROM admin WHERE user_name = '$user_name' && password = '$password'";
        $res = mysqli_query($conn,$s);
        $num = mysqli_num_rows($res);
        if($num == 1)
        {
            $row = mysqli_fetch_array($res);
            $_SESSION['name'] = $row['name'];
            header('location:../main (admin).php');
        }
        else 
        {
            $error = 'Username/Password is Incorrect'; 
        }
    }
?>
<html>
    <head>
        <title>St. Peter's Marthoma Church | Sign Up</title>
        <link rel="stylesheet" href="CSS/backend 2.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    echo'<a href="../login.php">Retry</a>';
                }
            ?>
        </div>
    </body>
</html>

