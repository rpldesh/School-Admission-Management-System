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
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}
    .navifont{
        font-size: 150%;
    }
</style>
<script type="text/javascript">
    <!--
    function getConfirmation(){
        var retVal = confirm("You are going to disable this user.. Are you sure you want to continue ?");
        if( retVal == true ){
            return true;
        }
        else{
            return false;
        }
    }
    //-->
</script>
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
        echo '<td> <a href="'.URL.'addMinStaff/editUser/'.$row['u_ID'].'" > Edit user </a></td>';
        echo '<td> <a href="'.URL.'addMinStaff/disableUser/'.$row['u_ID'].'" onclick="return getConfirmation();"> Disable user </a></td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>


<form action="<?php echo URL;?>addMinStaff/createUser" method="post"">
<h2>Add a new user</h2>
<label for="user_ID"><b>User ID</b></label>
<input name="user_ID" type="text" placeholder=" Enter User ID" autofocus required/>
<label for="f_name"><b>First Name</b></label>
<input name="f_name" type="text" placeholder=" First Name" autofocus />
<label for="l_name"><b>Last Name</b></label>
<input name="l_name" type="text" placeholder=" Last Name" autofocus />
<label for="user_type"><b>User Type</b></label>
<select id="user_type" name="user_type" required>
    <option value="admin" >Admin</option>
    <option value="clerk" >Clerk</option></select>
<input id="submit" type="submit"/>
</form>


</body>
</html>
