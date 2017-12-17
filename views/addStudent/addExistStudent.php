<title>Change Student Details</title>
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


<div class="sep"></div>
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

    Student is updated successfully!
</div>

<table>
    <?php
    foreach($this->Stu_Details as $row){

    }


    ?>
    <th colspan="2" class="change_stu_details">
        Student Details
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="addExistStudent/<?php echo $row['std_ID']; ?>"  method="post" id="edit_stu_det_table">
        <tr>

            <th>Student ID</th>
            <td><?php echo $row['std_ID']; ?></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><?php echo $row['first_name']; ?></td>
        </tr>

        <tr>
            <th>Mid Name</th>
            <td><?php echo $row['mid_name'] ;?></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><?php echo $row['last_name'] ;?></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><?php echo  $row['gender'] ;?></td>
        </tr>

        <tr>
            <th>DoB</th>
            <td><?php echo date('Y-m-d',strtotime($row['DoB'])) ;?> </td>
        </tr>

            <th>Land phone No</th>
            <td><?php  ;?></td>



        <tr>
            <th>Street No</th>
            <td><?php echo $row['street_no'] ?></td>
        </tr>

        <tr>
            <th>Street Name</th>
            <td><?php echo $row['street_name'] ?></td>
        </tr>

        <tr>
            <th>City</th>
            <td><?php echo $row['city'] ?></td>
        </tr>

        <tr>
            <th>District</th>
            <td><?php echo $row['district'] ?></td>
        </tr>

        <tr>
            <th>Date Of Admission</th>
            <td><input name="date_of_add" placeholder="Enter date of Admission" type="date" autofocus required/><br /></td>
        </tr>


        <tr>
            <th>Achievements</th>
            <td><?php echo $row['achievements'] ?><br /></td>
        </tr>

        <tr>
            <td colspan="2"><input class="Submit_btn" align ="center" name="Submit_change_Stu" type="submit"><br /></td>
        </tr>

    </tbody>
</table>


