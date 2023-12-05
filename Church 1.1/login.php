<html>
    <head>
        <link rel="stylesheet" href="CSS/login.css">
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <title>St. Peter's Marthoma Church | Login</title>
    </head>
    <body>
        <a href="main.html"><img src="assets/back.svg"></a>
        <div class="loginbox">
            <h1>Login</h1>
            <br>
            <form method="post" action="http://localhost/Church 1.1/church_db_connect/backend 2.php">
                <p>Username</p>
                <input type="text" name="user_name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <br>
                <select name="type">
                    <option value="user">User</option>
                    <option value="member">Member</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="submit" value="Login">
                <a href="http://localhost/Church 1.1/signup.php">Don't have an account?</a>
            </form>
        </div>
        <div class="sideboxl">
            <img src="assets/10.jpg">
        </div>
    </body>
</html>