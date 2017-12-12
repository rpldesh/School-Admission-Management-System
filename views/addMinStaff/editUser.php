<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Dec-17
 * Time: 3:07 PM
 */
?>


<title>Edit User Details</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>

<table>
    <?php
    foreach($this->user_details as $row){
    }
    ?>
    <th colspan="2" class="change_stu_details">
        Change User Details
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="<?php echo URL ?>addMinStaff/editConfirm"  method="post" id="edit_stu_det_table">
        <tr>
            <th>User ID</th>
            <td><input name="u_ID" type="text" value="<?php echo $row['u_ID'] ?> " autofocus readonly/></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><input name="f_name" type="text" value="<?php echo $row['first_name'] ?> " autofocus /></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><input name="l_name" type="text" value="<?php echo $row['last_name'] ?> "  autofocus /></td>
        </tr>

        <tr>
            <th>User Type</th>
            <td><select id="u_type" name="u_type" required>
                    <option value="admin" >Admin</option>
                    <option value="clerk" >Clerk</option></select>
            </td>
        </tr>

        <input name="Submit_change_Stu" type="submit" value="Save Changes">
    </tbody>
</table>


