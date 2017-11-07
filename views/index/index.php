
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<meta chartset="utf-8">
<meta http-equiv="X-UA-Compatible" content="ID=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo URL?>public/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL?>public/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo URL?>public/css/animate.css" rel="stylesheet">
<link href="<?php echo URL?>public/css/landing.css" rel="stylesheet">
<link href="<?php echo URL?>/public/css/login.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form id="signup" action=login/loginDo method="post">

        <div class="header">

            <h3>LOGIN</h3>

            <p>You want to fill out this form</p>

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <label for="u_name"><b>Username</b></label><br />
            <input name="u_name" type="text" placeholder=" Enter Username" autofocus />
            <label for="psw"><b>Password</b></label><br />
            <input name="psw" type="password" placeholder=" Enter Password" autofocus />

            <lable></lable><input id="submit" type="submit"/>


        </div>

    </form>

</div>

<br />
<script src="<?php echo URL?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL?>public/js/bootstrap.min.js" type="text/javascript"></script>

</body>