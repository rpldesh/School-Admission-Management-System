
<title>Title</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
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
                <li><a class="navifont" href="#">Home</a></li>
                <li><a class="navifont" href="#">Member Profile</a></li>
                <li><a class="navifont" href="#">About</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<?php Session::init();
        $app_ID=Session::get('application_ID'); ?>
<div class="container">

    <form action="addExistApplicantDet" method="post" id="signup">

        <div class="header">

            <h3>Application</h3>

            <p>You want to fill out this form</p>

        </div>

        <div class="sep"></div>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            Applicant is added successfully
        </div>

        <div class="inputs">
            <label for="application_ID"><b>Application ID</b></label><br />
            <input name="application_ID" value="<?php echo $app_ID;?> " type="text" readonly />
            <label for="distanceToSchl"><b>Distance to School</b></label><br />
            <input name="distanceToSchl" type="text" placeholder="To nearest two decimal places in km" autofocus />
            <label for="academic_staff_ref"><b>Academic Staff references</b></label><br />
            <input name="academic_staff_ref" type="text" placeholder="Academic Staff references" autofocus />
            <label for="state_emp_ref"><b>State employee reference</b></label><br />
            <input name="state_emp_ref" type="text" placeholder="state employee reference" autofocus />
            <label for="parent_ref"><b>Parent Reference</b></label><br />
            <input name="parent_ref" type="text" placeholder="Enter Parent's Student Id" autofocus />
            <label for="sibling_ref"><b>Sibling Reference</b></label><br />
            <input name="sibling_ref" type="text" placeholder="Enter Sibling's Student Id" autofocus />




            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>