<title>Chang School Details</title>
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
    foreach($this->Stu_details as $row){

    }


    ?>
    <th colspan="2" class="change_stu_details">
        Change Student Details
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="updateDetails"  method="post" id="edit_stu_det_table">
        <tr>

            <th>Student ID</th>
            <td><input name="student_ID" type="text" value="<?php echo $row['std_ID'] ?> " autofocus readonly/></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><input name="student_f_name" type="text" value="<?php echo $row['first_name'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>Mid Name</th>
            <td><input name="student_m_name" type="text"  value="<?php echo $row['mid_name'] ?> "autofocus /></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><input name="student_l_name" type="text" value="<?php echo $row['last_name'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><select id="student_gender" name="gender" required>
                    <option value="male" <?php if($row['gender']=='male') echo 'selected'; ?>  >Male</option>
                    <option value="female" <?php if($row['gender']=='female') echo 'selected'; ?>  >Female</option></select></td>
        </tr>

        <tr>
            <th>DoB</th>
            <td><input name="dob" type="date" autofocus value="<?php echo date('Y-m-d',strtotime($row['DoB'])) ?> "/><br /></td>
        </tr>

        <tr>
            <th>Land phone No</th>
            <td><input name="land_phone" type="text"  autofocus /></td>
        </tr>


        <tr>
            <th>Street No</th>
            <td><input name="street_no" type="text" value="<?php echo $row['street_no'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>Street Name</th>
            <td><input name="street_name" type="text" value="<?php echo $row['street_name'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>City</th>
            <td><input name="city" type="text" value="<?php echo $row['city'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>District</th>
            <td><select id="district" name="district" required>
                    <option value="Ampara" <?php if($row['district']=='Ampara') echo 'selected'; ?> >Ampara</option><option value="Anuradhapura" <?php if($row['district']=='Anuradhapura') echo 'selected'; ?> >Anuradhapura</option><option value="Badulla" <?php if($row['district']=='Badulla') echo 'selected'; ?> >Badulla</option>
                    <option value="Batticaloa" <?php if($row['district']=='Batticaloa') echo 'selected'; ?> >Batticaloa</option><option value="Colombo" <?php if($row['district']=='Colombo') echo 'selected'; ?> >Colombo</option><option value="Galle" <?php if($row['district']=='Galle') echo 'selected'; ?>>Galle</option>
                    <option value="Gampaha" <?php if($row['district']=='Gampaha') echo 'selected'; ?> >Gampaha</option><option value="Hambantota" <?php if($row['district']=='Hambantota') echo 'selected'; ?> >Hambantota</option><option value="Jaffna" <?php if($row['district']=='Jaffna') echo 'selected'; ?>>Jaffna</option>
                    <option value="Kalutara" <?php if($row['district']=='Kalutara') echo 'selected'; ?>>Kalutara</option><option value="Kandy" <?php if($row['district']=='Kandy') echo 'selected'; ?> >Kandy</option><option value="Kegalle" <?php if($row['district']=='Kegalle') echo 'selected'; ?> >Kegalle</option>
                    <option value="Kilinochchi" <?php if($row['district']=='Kilinochchi') echo 'selected'; ?> >Kilinochchi</option><option value="Kurunegala" <?php if($row['district']=='Kurunegala') echo 'selected'; ?> >Kurunegala</option><option value="Mannar" <?php if($row['district']=='Mannar') echo 'selected'; ?> >Mannar</option>
                    <option value="Matale" <?php if($row['district']=='Matale') echo 'selected'; ?> >Matale</option><option value="Matara" <?php if($row['district']=='Matara') echo 'selected'; ?> >Matara</option><option value="Monaragala" <?php if($row['district']=='Monaragala') echo 'selected'; ?> >Monaragala</option>
                    <option value="Mullaitivu" <?php if($row['district']=='Mullaitivu') echo 'selected'; ?> >Mullaitivu</option><option value="Nuwara_Eliya" <?php if($row['district']=='Nuwara_Eliya') echo 'selected'; ?> >Nuwara Eliya</option><option value="Polonnaruwa" <?php if($row['district']=='Polonnaruwa') echo 'selected'; ?>>Polonnaruwa</option>
                    <option value="Puttalam" <?php if($row['district']=='Puttalam') echo 'selected'; ?> >Puttalam</option><option value="Rathnapura" <?php if($row['district']=='Rathnapura') echo 'selected'; ?> >Rathnapura</option><option value="Trincomalee" <?php if($row['district']=='Trincomalee') echo 'selected'; ?> >Trincomalee</option>
                    <option value="Vavuniya" <?php if($row['district']=='Vavuniya') echo 'selected'; ?> >Vavuniya</option></select>
        </tr>

        <tr>
            <th>Date Of Admission</th>
            <td><input name="date_of_add" value="<?php echo date('Y-m-d',strtotime($row['dateOfAdmission'])) ?>" type="date" required/><br /></td>
        </tr>

        <tr>
            <th>Acievements</th>
            <td><input name="achievements" value="<?php echo $row['achievements'] ?> " type="text" required/><br /></td>
        </tr>

        <tr>
            <td colspan="2"><input class="Submit_btn" align ="center" name="Submit_change_Stu" type="submit"><br /></td>
        </tr>

    </tbody>
</table>


