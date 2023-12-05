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
    $name=$_POST['name'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $type=$_POST['type'];

    if($type == 'user')
    {
        $s = "SELECT * FROM users WHERE user_name = '$user_name'";
        $res = mysqli_query($conn,$s);
        $num = mysqli_num_rows($res);
        if($num == 1)
        {
            $error = 'Username Already Taken';
        }
        else
        {
            $sql = "INSERT INTO users VALUES('$name','$user_name','$password')";
            if ($conn->query($sql) === TRUE) 
	        {
  	            $error = 'Registration Successful';
            }
            else
            {
                $error = 'Registration Unsuccessful';        
            }
        }
    }
    else
    {
        $s = "SELECT * FROM members WHERE user_name = '$user_name'";
        $res = mysqli_query($conn,$s);
        $num = mysqli_num_rows($res);
        if($num == 1)
        {
            $error = 'Username Already Taken';
        }
        else
        {
            $sql = "INSERT INTO members VALUES('$name','$user_name','$password')";
            if ($conn->query($sql) === TRUE) 
	        {
                $error = 'Registration Successful';
            }
            else
            {
                $error = 'Registration Unsuccessful';        
            }
        } 
    }
?>
<html>
    <head>
        <title>St. Peter's Marthoma Church | Sign Up</title>
        <link rel="stylesheet" href="CSS/backend 1.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Registration Successful')
                    {
                        echo'<a href="../login.php">Login</a>';
                    }
                    else
                    {
                        echo'<a href="../signup.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>