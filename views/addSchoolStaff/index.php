<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:47 AM
 */
?>
<title>Title</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<?php //<link href="<?php echo URL ?> <?php //public/css/login.css" rel="stylesheet"> ?>
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>

        <table class="table">
            <tbody>

                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>User Status</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            <?php
                foreach ($this->user_list as $row){
                    echo '<tr>';
                    echo '<td>'.$row['u_ID'].'</td>';
                    echo '<td>'.$row['first_name']." ".$row['last_name'].'</td>';
                    echo '<td>'.$row['user_type'].'</td>';
                    echo '<td>'.$row['user_status'].'</td>';
                    echo '<td> <a href="'.URL.'addSchoolStaff/editUser/'.$row['u_ID'].'"> Edit user </a></td>';
                    echo '<td> <a href="'.URL.'addSchoolStaff/disableUser/'.$row['u_ID'].'"> Disable user </a></td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>


            <form action="<?php echo URL;?>addSchoolStaff/createUser" method="post"">
                <h2>Add a new user</h2>
                    <label for="user_ID"><b>User ID</b></label>
                    <input name="user_ID" type="text" placeholder=" Enter User ID" autofocus required/>
                    <label for="f_name"><b>First Name</b></label>
                    <input name="f_name" type="text" placeholder=" First Name" autofocus />
                    <label for="l_name"><b>Last Name</b></label>
                    <input name="l_name" type="text" placeholder=" Last Name" autofocus />
                    <label for="user_type"><b>User Type</b></label>
                    <select id="user_type" name="user_type" required>
                        <option value="interviewer" >Interviewer</option>
                        <option value="inserter" >Inserter</option>
                        <option value="principal" >Principal</option></select>
                    <input id="submit" type="submit"/>
            </form>


</body
></html>