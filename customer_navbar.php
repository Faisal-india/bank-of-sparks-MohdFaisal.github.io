<?php
    include "connect.php";

    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['loggedIn_cust_id'])) {
        $sql0 = "SELECT * FROM customer WHERE cust_id=".$_SESSION['loggedIn_cust_id'];
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_navbar_style.css">
    
</head>

<body>
    <div class="nav-wrapper">
        <div class="topnav" id="theTopNav">
            
            </a>
            <a id="user">Welcome, &nbsp<?php echo $row["first_name"]; ?></a>
            <a id="logout" href="./logout_action.php" onclick="return confirm('Are you sure?')">Logout</a>
            <a id="profile" href="./customer_profile.php">My Profile</a>
        </div>
    </div>



</body>
</html>
