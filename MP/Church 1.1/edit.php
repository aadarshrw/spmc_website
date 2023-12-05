<html>
    <head>
        <link rel="stylesheet" href="CSS/edit.css">
        <title>St. Peters Marthoma Church | Edit</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    </head>
    <body>
        <div class="loginbox"><br>
            <h1>Edit</h1><br>
            <form method="post" action="http://localhost/Church 1.1/church_db_connect/edit.php">
                <b>Table</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="table">
                    <option value="donations">Donations</option>
                    <option value="expenses">Expenses</option>
                    <option value="subscriptions">Subscriptions</option>
                </select><br>
                <b>CMD</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="command">
                    <option value="UPDATE">Update</option>
                    <option value="DELETE">Delete</option>
                </select><br>
                <p>New Value</p><br>
                <select name="columnnew">
                    <option value="name">Name</option>
                    <option value="amount">Amount</option>
                    <option value="reason">Reason</option>
                    <option value="type">Type</option>
                    <option value="user_name">Username</option>
                </select>
                <input type="text" name="valuenew" placeholder="Enter a new value">
                <p>Old Value</p><br>
                <select name="columnold">
                    <option value="name">Name</option>
                    <option value="amount">Amount</option>
                    <option value="reason">Reason</option>
                    <option value="type">Type</option>
                    <option value="user_name">Username</option>
                </select>
                <input type="text" name="valueold" placeholder="Enter the old value"><br>
                <input type="submit" value="Edit">
            </form>
        </div>
    </body>
</html>