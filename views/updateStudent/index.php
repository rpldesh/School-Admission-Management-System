<title>Title</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>

<table>
    <?php
    print_r($this->Stu_details);
    foreach($this->Stu_details as $key => $value){

    }


    ?>
    <th colspan="2" class="change_stu_details">
    Change Student Details
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="updateStudent/updateStuDet"  method="post" id="edit_stu_det_table">
    <tr>

        <th>Student ID</th>
        <td><input name="student_ID" type="text" value="<?php echo $value['std_ID'] ?> " autofocus readonly/></td>
    </tr>
    <tr>
        <th>First Name</th>
        <td><input name="student_f_name" type="text" placeholder="" autofocus /></td>
    </tr>

    <tr>
        <th>Mid Name</th>
        <td><input name="student_m_name" type="text" placeholder="Middle Name" autofocus /></td>
    </tr>

    <tr>
        <th>Last Name</th>
        <td><input name="student_l_name" type="text" placeholder="Last Name" autofocus /></td>
    </tr>

    <tr>
        <th>Gender</th>
        <td><select id="student_gender" name="gender" required>
                <option value="Male" >Male</option><option value="Female" >Female</option></select></td>
    </tr>

    <tr>
        <th>DoB</th>
        <td><input name="dob" type="date" required/><br /></td>
    </tr>

    <tr>
        <th>Land phone No</th>
        <td><input name="land_phone" type="text" placeholder=" " autofocus /></td>
    </tr>

        <tr>
            <th>Mobile phone No 1</th>
            <td><input name="mobile_phone1" type="text" placeholder="" autofocus /></td>
        </tr>

        <tr>
            <th>Mobile phone No 2</th>
            <td><input name="mobile_phone2" type="text" placeholder="" autofocus /></td>
        </tr>

    <tr>
        <th>Street Name</th>
        <td><input name="street_no" type="text" placeholder=" Enter Street_no" autofocus /></td>
    </tr>

    <tr>
        <th>City</th>
        <td><input name="city" type="text" placeholder=" Enter City" autofocus /></td>
    </tr>

    <tr>
        <th>District</th>
        <td><select id="district" name="district" required>
                <option value="Ampara" >Ampara</option><option value="Anuradhapura" >Anuradhapura</option><option value="Badulla" >Badulla</option>
                <option value="Batticaloa" >Batticaloa</option><option value="Colombo" >Colombo</option><option value="Galle" >Galle</option>
                <option value="Gampaha" >Gampaha</option><option value="Hambantota" >Hambantota</option><option value="Jaffna" >Jaffna</option>
                <option value="Kalutara" >Kalutara</option><option value="Kandy" >Kandy</option><option value="Kegalle" >Kegalle</option>
                <option value="Kilinochchi" >Kilinochchi</option><option value="Kurunegala" >Kurunegala</option><option value="Mannar" >Mannar</option>
                <option value="Matale" >Matale</option><option value="Matara" >Matara</option><option value="Monaragala" >Monaragala</option>
                <option value="Mullaitivu" >Mullaitivu</option><option value="Nuwara_Eliya" >Nuwara Eliya</option><option value="Polonnaruwa" >Polonnaruwa</option>
                <option value="Puttalam" >Puttalam</option><option value="Rathnapura" >Rathnapura</option><option value="Trincomalee" >Trincomalee</option>
                <option value="Vavuniya" >Vavuniya</option></select>
    </tr>

    <tr>
        <th>Date Of Admission</th>
        <td><input name="date_of_add" type="date" required/><br /></td>
    </tr>

        <tr>
            <th>Acievements</th>
            <td><input name="achievements" type="tex" required/><br /></td>
        </tr>

        <input name="Submit_change_Stu" type="submit">
    </tbody>
</table>


