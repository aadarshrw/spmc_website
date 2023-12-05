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
    $table=$_POST['table'];
    $command=$_POST['command'];
    $valuenew=$_POST['valuenew'];
    $valueold=$_POST['valueold'];
    $columnnew=$_POST['columnnew'];
    $columnold=$_POST['columnold'];

    if($command == 'UPDATE')
    {
        $sql="UPDATE $table SET $columnnew = '$valuenew' WHERE $columnold = '$valueold'";
        if ($conn->query($sql) == TRUE) 
	    {
            $error = 'Updation Successful';
        }
        else
        {
            $error = 'Updation Failed';        
        }
    }
    if($command == 'DELETE')
    {
        $sql="DELETE FROM $table WHERE $columnold = '$valueold'";
        if ($conn->query($sql) == TRUE) 
	    {
            $error = 'Deletion Successful';
        }
        else
        {
            $error = 'Deletion Failed';        
        }
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
                    if($error == 'Updation Successful' || $error == 'Deletion Successful')
                    {
                        echo'<a href="../e-expenses.php">Expenses</a>';
                    }
                    else
                    {
                        echo'<a href="../edit.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>