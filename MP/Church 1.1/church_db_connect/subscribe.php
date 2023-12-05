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
    $username=$_SESSION['username'];
    $type = $_POST['type'];
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

    $sql="INSERT INTO subscriptions VALUES ('$username','$type','$amount','$reason')";
    if ($conn->query($sql) == TRUE) 
	{
        $error = 'Subscription Successful';
    }
    else
    {
        $error = 'Subscription Failed';        
    }
?>
<html>
    <head>
        <title>St. Peter's Marthoma Church | Sign Up</title>
        <link rel="stylesheet" href="CSS/edit.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Subscription Successful')
                    {
                        echo'<a href="../main (member).php">Done</a>';
                    }
                    else
                    {
                        echo'<a href="../subscribe.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>