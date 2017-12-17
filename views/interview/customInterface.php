
<title>Interviewer's custom interface</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>

<table>

    <th colspan="2" class="change_stu_details">
        Applicant information
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="<?php echo URL ?>interview/submitResult/<?php echo $this->applicantion_details[0]['application_ID']?>"  method="post" id="edit_stu_det_table">
        <?php
        foreach($this->applicantion_details as $row){?>

        <tr>
            <th>Applicant ID</th>
            <td><input name="application_ID" type="text" value="<?php echo $row['application_ID'] ?> " autofocus readonly/></td>
        </tr>

        <tr>
            <th>Applicant Name</th>
            <td><input name="applicant_Name" type="text" value="<?php echo $row['first_name'].' '.$row['last_name'] ?> " autofocus readonly/></td>
        </tr>

        <tr>
            <th>Mother's Name</th>
            <td><input name="mother_Name" type="text" value="<?php echo $row['mother_fName'].' '.$row['mother_LName'] ?> " autofocus readonly/></td>
        </tr>


        <tr>
            <th>Father's Name</th>
            <td><input name="father_Name" type="text" value="<?php echo $row['father_fName'].' '.$row['father_LName'] ?> " autofocus readonly/></td>
        </tr>

        <tr>
            <th>Guardian's Name</th>
            <td><input name="Guardian's Name" type="text" value="<?php echo $row['guardian_fName'].' '.$row['guardian_LName'] ?> " autofocus readonly/></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><input name="gender" type="text" value="<?php echo $row['gender'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Date of Birth</th>
            <td><input name="DoB" type="text" value="<?php echo $row['DoB'] ?> "  autofocus readonly/></td>
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

        <?php
        }
        foreach($this->sib_reference_details as $sirow){
        ?>

        <tr>
            <th>Sibling Reference</th>
            <td><input name="sib_std_ID" type="text" value="<?php echo $sirow['std_ID'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Referred Sibling's Name</th>
            <td><input name="sibling_name" type="text" value="<?php echo $sirow['first_name'].' '.$sirow['last_name'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Sibling's Achievements</th>
            <td><input name="sib_achievements" type="text" value="<?php echo $sirow['achievements'] ?> "  autofocus readonly/></td>
        </tr>

        <?php }
        foreach($this->parent_reference_details as $prow){?>

        <tr>
            <th>Parent Reference</th>
            <td><input name="p_std_ID" type="text" value="<?php  echo $prow['std_ID']?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Referred Parent's Name</th>
            <td><input name="parent_name" type="text" value="<?php echo $prow['first_name'].' '.$prow['last_name'] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Parent's Achievements</th>
            <td><input name="p_achievements" type="text" value="<?php echo $prow['achievements'] ?> "  autofocus readonly/></td>
        </tr>

        <?php } ?>
        <tr>
            <th>Marks for Distance</th>
            <td><input name="d_result" type="text" value="<?php echo $this->d_result[0]?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Marks for Sibling Reference</th>
            <td><input name="sib_ref_result" type="text" value="<?php echo $this->sib_ref_result[0] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Marks for Parent Reference</th>
            <td><input name="p_ref_result" type="text" value="<?php echo $this->p_ref_result[0] ?> "  autofocus readonly/></td>
        </tr>

        <tr>
            <th>Marks for Sibling Achievemnets</th>
            <td><input name="SA_result" type="number" placeholder="Marks out of 10" min="0" max="10"autofocus /></td>
        </tr>
        <tr>
            <th>Marks for Parent Achievemnets</th>
            <td><input name="PA_result" type="number" placeholder="Marks out of 10" min="0" max="10" autofocus /></td>
        </tr>
        <tr>
            <th>Marks for Academic Staff Reference</th>
            <td><input name="Aca_ref_result" type="number" placeholder="Marks out of 5" min="0" max="5" autofocus /></td>
        </tr>
        <tr>
            <th>Marks for Government Transfers</th>
            <td><input name="gov_result" type="number" placeholder="Marks out of 5" min="0" max="5"autofocus /></td>
        </tr>
        <tr>
            <td colspan="2"><input class="Submit_btn" align ="center" name="Submit_change_Stu" type="submit"><br /></td>
        </tr>


    </tbody>
</table>
