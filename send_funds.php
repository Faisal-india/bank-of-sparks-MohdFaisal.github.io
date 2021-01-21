<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="send_funds_action.php" method="POST">
        <div class="flex-container-form_header">
            <h1 id="form_header">Transfer Funds</h1>
        </div>

            <div class="flex-container">
            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="25" type="text" required />
            </div>


        <div class="flex-container">
            <div class=container>
                <label>Enter Amount :</label><br>
                <input name="amt" size="24" type="number" required />
            </div>
        </div>

        <div class="flex-container">
            <div  class=container>
                <label>Enter your password :</b></label><br>
                <input name="password" size="24" type="password" required />
            </div>
        </div>
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
