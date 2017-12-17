
<title>Interviewer's custom interface</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}
    .navifont{
        font-size: 150%;
    }

</style>
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
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1550%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<table>
    <?php
    foreach($this->applicant_details as $row){
    }
    ?>
    <th colspan="2" class="change_stu_details">
        Applicant information
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action=""  method="post" id="edit_stu_det_table">
        <tr>
            <th>Applicant ID</th>
            <td><input name="application_ID" type="text" value="<?php echo $row['application_ID'] ?> " autofocus readonly/></td>
        </tr>

        <tr>
            <th>Distance to school(Km)</th>
            <td><input name="distanceToSchl" type="text" value="<?php echo $row['distanceToSchl'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Academic Staff Reference</th>
            <td><input name="academic_staff_ref" type="text" value="<?php echo $row['academic_staff_ref'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>State Employee Reference</th>
            <td><input name="state_emp_ref" type="text" value="<?php echo $row['state_emp_ref'] ?> "  autofocus readonly/></td>
        </tr>





    </tbody>
</table>


