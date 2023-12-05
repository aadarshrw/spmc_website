<html>
    <head>
        <link rel="stylesheet" href="CSS/subscribe.css">
        <title>St. Peters Marthoma Church | Subscribe</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
        <div class="loginbox"><br>
            <h1>Subscribe</h1><br>
            <form method="post" action="http://localhost/Church 1.1/church_db_connect/subscribe.php">
                <b>Type</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="type">
                    <option value="Monthly">Monthly</option>
                    <option value="Weekly">Weekly</option>
                </select><br>
                <p>Amount</p><br>
                <input type="text" name="amount" placeholder="Enter the amount">
                <p>Reason</p><br>
                <select name="reason" id="reason" onchange="EnableDisableTextBox(this)">
                    <option value="Birthday">Birthday</option>
                    <option value="Wedding">Wedding</option>
                    <option value="other">Other</option>
                </select>
                <p>Other:</p>
                <input type="text" id="other" name="oreason" disabled="disabled">
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </body>
</html>