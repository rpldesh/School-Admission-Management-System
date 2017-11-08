
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<meta chartset="utf-8">
<meta http-equiv="X-UA-Compatible" content="ID=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>School Page</title>
<link href="<?php echo URL ?>public/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/bootstrap-theme.min.css" rel="stylesheet">

<link href="<?php echo URL ?>public/css/homePage.css" rel="stylesheet">

</head>

<body>

<div class="jumbotron">
    <h3>Grade Entry Management system</h3>
</div>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Member Profile</a></li>
                <li><a href="#">About</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<div class="container-fluid text-center">
    <h2 class="logo-small">SERVICES</h2>
    <br />
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-file"></span>
            <a href="addSchool/index"><h4 class="logo-small">Add school</h4></a>
            <p>Add details of schools</p>
        </div>

        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="" ><h4 class="logo-small">List of schools</h4></a>
            <p>View details of schools</p>
            <br />
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href=""> <h4 class="logo-small">Qualified lists of schools</h4></a>
            <p>View qualification results of schools</p>
        </div>
        <br />
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href=""><h4 class="logo-small">Add Staff</h4></a>
            <p>Add new members accounts for the system</p>
        </div>
    </div>
    <br><br>


    <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench"></span>
        <h4>Contact</h4>
        <p></p>
    </div>
</div>




<script src="<?php echo URL ?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
