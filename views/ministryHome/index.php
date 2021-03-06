<head>
    <style> footer{ position: absolute; right: 0; bottom: 0; left: 0;}</style>
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
            <a href="showSchool/index" ><h4 class="logo-small">List of schools</h4></a>
            <p>View details of schools</p>
            <br />
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="viewAllResults/index"> <h4 class="logo-small">Entry evaluation results of schools</h4></a>
            <p>View qualified applicants list of each school</p>
        </div>
        <br />
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="addMinStaff/showStaff"><h4 class="logo-small">Add/Edit Staff</h4></a>
            <p>Add new members accounts for the system</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="minAccSettings/index"><h4 class="logo-small">Account Settings</h4></a>
            <p>Change your username and password</p>
    </div>
    </div>

</div>




<script src="<?php echo URL ?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
