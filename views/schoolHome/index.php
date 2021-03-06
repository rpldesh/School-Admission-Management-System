<head><style> footer{ position: absolute; right: 0; bottom: 0; left: 0;}</style></head>
<title>School Home</title>
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
                <li><a class="navifont" href="<?php echo URL?>schoolHome">Home</a></li>
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
            <a href="addApplicant/index"><h4 class="logo-small">Enter Applicant Data</h4></a>
            <p>Enter details of applicants of your school</p>
        </div>

        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="addStudent/index"><h4 class="logo-small">Add Students</h4></a>
            <p>Add new students to the school</p>
        </div>
        <br />
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="updateStudent/index"><h4 class="logo-small">Update Student</h4></a>
            <p>Update details of students of your school</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="viewSchoolResult/getResult"><h4 class="logo-small">Results</h4></a>
            <p>View final results of applicants of your school</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="addSchoolStaff/showStaff"><h4 class="logo-small">Add/Edit Staff</h4></a>
            <p>Add new members accounts for the system</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="interview/index"><h4 class="logo-small">Interview</h4></a>
            <p>Custom interface for interview</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt"></span>
            <a href="accSettings/index"><h4 class="logo-small">Account Settings</h4></a>
            <p>Change your username and password</p>
        </div>
    </div>
    <br><br>


    <!--<div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench"></span>
        <h4>HELP</h4>
        <p></p>
    </div>-->
</div>




<script src="<?php echo URL ?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

