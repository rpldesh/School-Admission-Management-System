<<<<<<< HEAD

<title>Add New Applicant</title>
=======
<title>Title</title>
>>>>>>> d15154cc5e001596f9adfab40e9f051b323ff556
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
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
                <li><a class="navifont" href="<?php echo URL?>schoolHome">Home</a></li>
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1600%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->


<div class="container">

    <form id="signup" action="<?php echo URL;?>addApplicant/checkAppID" method="post" id="searchStu">

        <div class="header">

            <h3>Add Applicant Details</h3>

        </div>


        <div class="inputs">
            <label for="application_ID"><b>Application ID</b></label><br />
            <input name="application_ID" type="text" placeholder=" Enter Applicant ID" autofocus />


            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>
