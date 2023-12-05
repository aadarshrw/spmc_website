<html>
    <head>
        <title>St. Peters Marthoma Church | Expenses</title>
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="CSS/e-expenses.css">
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
            <caption>Expenses<a href="http://localhost/Church 1.1/edit.php" style="position: relative; left: 753px;">Edit</a></caption>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Reason</th>
            </tr>
            <?php

            $sql = "SELECT name, amount, reason FROM expenses";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);

            if($num > 0)
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr><td>".$row['name']."</td><td>".$row['amount']."</td><td>".$row['reason']."</td></tr>";
                };
                
            }
            else
            {
                echo "</table>";
            }
            ?>
        <table class="donations">
            <caption style="padding-top: 20px;">Donations<a href="http://localhost/Church 1.1/edit.php" style="position: relative; left: 743px;">Edit</a></caption>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Reason</th>
            </tr>
            <?php

            $sql = "SELECT name, amount, reason FROM donations";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);

            if($num > 0)
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr><td>".$row['name']."</td><td>".$row['amount']."</td><td>".$row['reason']."</td></tr>";
                };
                
            }
            else
            {
                echo "</table>";
            }
            ?>
        <table class="subscriptions">
            <caption style="padding-top: 20px;">Subscriptions<a href="http://localhost/Church 1.1/edit.php" style="position: relative; left: 710px;">Edit</a></caption>
            <tr>
                <th>Username</th>
                <th>Amount</th>
                <th>Reason</th>
                <th>Type</th>
            </tr>
            <?php

            $sql = "SELECT user_name, amount, reason, type FROM subscriptions";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);

            if($num > 0)
            {
                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr><td>".$row['user_name']."</td><td>".$row['amount']."</td><td>".$row['reason']."</td><td>".$row['type']."</td></tr>";
                };
                
            }
            else
            {
                echo "</table>";
            }
            ?>
    </body>
</html>