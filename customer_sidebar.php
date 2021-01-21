<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_sidebar_style.css">
</head>

<body>
    <div class="sidenav" id="theSideNav">
        
        <a href="./customer_home.php">Home</a>
        <a href="./customer_transactions.php">My Transactions</a>
        <a href="./send_funds.php">Send money</a>
        <a href="contact.php" id="label">Contact Us</a>
        
    </div>

<script>
// For-Loop below is used to create active links and accordingly color them.
// Helps in recognizing which tab is selected.
for (var i = 0; i < document.links.length; i++) {
    if (document.URL.indexOf('?') > 0) {
        sanitizedURL = document.URL.substring(0, document.URL.indexOf('?'));
    }
    else {
        sanitizedURL = document.URL;
    }
    if (document.links[i].href == sanitizedURL) {
        document.links[i].className = 'active';
    }
}

function openNav() {
    document.getElementById("theSideNav").style.width = "256px";
    var x = document.getElementById("theSideNav");
    if (x.className === "sidenav sidenav-fixed") {
        x.className += " responsive";
    }
}

// Never use get window size of jquery, in javascript, they dont work !
function closeNav() {
    if (document.documentElement.clientWidth < 856) {
        document.getElementById("theSideNav").style.width = "0";
    }
}

$(document).ready(function() {
    $(window).resize(function () {
        if ($(window).width() > 855)
            document.getElementById("theSideNav").style.width = "256px";

        if (($(window).width()) < 856){
            $('#closebtn').trigger('click');
        }
    });
});


</script>

</body>
</html>
