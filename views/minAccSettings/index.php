<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 10:30 PM
 */
?>

<title>Change Account Settings</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
<script type="text/javascript">
    <!--
    function validatePWD(){
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        var ok = true;
        if (pass1 != pass2) {
            alert("Re-entered passwoed does not match");
            ok = false;
        }
        return ok;
    }
    //-->
</script>

</head>
<body>
<!-------------    Navigation Bar  ------------>
<nav class="navbar navbar-inverse navbarmod">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a class="navifont" href="<?php echo URL?>ministryHome">Home</a></li>
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1600%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<div class="container">

    <form action="minChange" method="post" id="signup" onsubmit="return validatePWD();">

        <div class="header">

            <h2>Change your username and password</h2>

        </div>

        <div class="sep"></div>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            Username and password changed successfully
        </div>

        <div class="inputs">
            <label for="username" ><b>Username</b></label><br />
            <input name="username" type="text" autofocus />
            <label for="pwd"><b>Password (minimum 8 characters)</b></label><br />
            <input id="pass1" name="pwd" type="password" pattern=".{8,}"   required />
            <label for="pwd2"><b>Re-enter Password</b></label><br />
            <input id="pass2" name="pwd2" type="password" pattern=".{8,}"   required />

            <input id="submit" type="submit"  value="Save Changes"/>

        </div>

    </form>

</div>
​
</body>
</html>