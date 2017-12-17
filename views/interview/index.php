
<title>Interview</title>
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
                <li><a class="navifont" href="<?php echo URL?>schoolHome">Home</a></li>
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1600%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<div class="container">

    <form action="<?php echo URL;?>interview/loadApplicant" method="post" id="signup">

        <div class="header">

            <h3>LOAD APPLICANT DETAILS</h3>

            <p>Enter Applicantion ID</p>

        </div>


        <div class="inputs">
            <label for="application_ID"><b>Application ID</b></label><br />
            <input name="application_ID" type="text" placeholder=" Enter Application ID" autofocus />


            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>
