<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/signup.css">
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <title>St. Peter's Marthoma Church | Sign Up</title>
    </head>
    <body>
        <div class="sideboxr">
            <img src="assets/11.jpg">
        </div>
        <div class="loginbox">
            <h1>Sign Up</h1><br>
            <form method="post" action="http://localhost/Church 1.1/church_db_connect/backend 1.php">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter Name">
                <p>Username</p>
                <input type="text" name="user_name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <br>
                <select name="type">
                    <option value="user">User</option>
                    <option value="member">Member</option>
                </select>
                <input type="submit" name="" value="Sign Up">
                <a href="http://localhost/Church 1.1/login.php">Already have an account?</a>
            </form>
        </div>
    </body>
</html>
