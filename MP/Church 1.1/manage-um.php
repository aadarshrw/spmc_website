<html>
    <head>
        <title>St. Peters Marthoma Church | Accounts</title>
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="CSS/manage-um.css">
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
        ?>
    </head>
    <body>
        <a href="main (admin).php"><img src="assets/back.svg"></a>
        <table class="expenses">
            <caption>Users<a href="http://localhost/Church 1.1/edit-um.php" style="position: relative; left: 804px;">Edit</a></caption>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php

            $sql = "SELECT * FROM users";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);

            if($num > 0)
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr><td>".$row['name']."</td><td>".$row['user_name']."</td><td>".$row['password']."</td></tr>";
                };
                
            }
            else
            {
                echo "</table>";
            }
            ?>
        <table class="donations">
            <caption style="padding-top: 20px;">Members<a href="http://localhost/Church 1.1/edit-um.php" style="position: relative; left: 762px;">Edit</a></caption>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php

            $sql = "SELECT * FROM members";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);

            if($num > 0)
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr><td>".$row['name']."</td><td>".$row['user_name']."</td><td>".$row['password']."</td></tr>";
                };
                
            }
            else
            {
                echo "</table>";
            }
            ?>
    </body>
</html>