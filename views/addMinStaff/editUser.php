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
                <li><a class="navifont" href="<?php echo URL?>ministryHome">Home</a></li>
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1550%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->


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
                    <option value="admin" <?php if($row['user_type']=='admin') echo 'selected'; ?>>Admin</option>
                    <option value="clerk" <?php if($row['user_type']=='clerk') echo 'selected'; ?>>Clerk</option></select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input class="Submit_btn" align ="center" name="Submit_change_Stu" type="submit"><br /></td>
        </tr>
    </tbody>
</table>


