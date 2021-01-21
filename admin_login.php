<?php
    include "header.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
   
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="admin_login_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <form action="./admin_login_action.php" method="post">
        <div class="flex-container-1">
            <div class="flex-item">
                <h2>Administrator Login</h2>
            </div>

           
            <div class="flex-item">
                <input type="text" placeholder="enter username" name="admin_uname" required>
            </div>

           
            <div class="flex-item">
                <input type="password" placeholder="enter password" name="admin_psw" required>
            </div>
        

        
            <div class="flex-item">
                <button type="submit">Login</button>
            </div>

           
        </div>
    </form>

</body>
</html>
