<html>
    <head>
        <link rel="stylesheet" href="CSS/donate.css">
        <link rel="icon" href="assets/icon.png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <title>St. Peter's Marthoma Church | Donate</title>
        <script type="text/javascript">
            function EnableDisableTextBox(reason) 
            {
                var selectedValue = reason.options[reason.selectedIndex].value;
                var other = document.getElementById("other");
                other.disabled = selectedValue == 'other' ? false : true;
                if (!other.disabled) 
                {
                    other.focus();
                }
            }
        </script>
    </head>
    <body>
        <div class="sideboxr">
        </div>
        <div class="loginbox">
            <br><br><h1>Donate</h1><br><br>
            <form method="post" action="http://localhost/Church 1.1/church_db_connect/backend 3.php">
                <p>Name</p>
                <input type="text" name="name" placeholder="Your Name"><br>
                <p>Amount</p>
                <input type="number" name="amount" placeholder="Amount"><br>
                <select name="reason" id="reason" onchange="EnableDisableTextBox(this)">
                    <option value="offering">Offering</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="other">Other</option>
                </select><br>
                <p>Other</p>
                <input type="text" id="other" name="oreason"><br>
                <input type="checkbox" id="anonymous" name="anonymous" value="true">
                <label for="anonymous">Donate Anonymously</label><br><br>
                <br>
                <input type="submit" name="" value="Proceed to Payment">
            </form>
        </div>
    </body>
</html>
