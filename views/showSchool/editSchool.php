<?php
/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 12/10/2017
 * Time: 10:49 PM
 */
foreach($this->School_details as $row){
}
?>
<link href="http://localhost/School-Admission-Management-System/public/css/login.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}
    .navifont{
        font-size: 150%;
    }
</style>
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
    <th colspan="2" class="change_stu_details">
        Change School Details
    </th>
    <tbody>
    <form class="Edit_stu_data_table" action="<?php echo URL ?>showSchool/editConfirm"  method="post" id="edit_stu_det_table">
        <tr>
            <th>School ID</th>
            <td><input name="sch_ID" type="text" value="<?php echo $row['sch_ID'] ?> " autofocus readonly/></td>
        </tr>
        <tr>
            <th>School Name</th>
            <td><input class="form-control" name="sch_name" type="text" value="<?php echo $row['sch_name']?> " autofocus /></td>
        </tr>

        <tr>
            <th>Street No:</th>
            <td><input class="form-control" name="street_no" type="text" value="<?php echo $row['street_no']?> "  autofocus /></td>
        </tr>

        <tr>
            <th>Street Name:</th>
            <td><input class="form-control" name="street_name" type="text" value="<?php echo $row['street_name']?> "  autofocus /></td>
        </tr>

        <tr>
            <th>City:</th>
            <td><input class="form-control" type="text" name="city" value="<?php echo $row['city']?>"  autofocus /></td>
        </tr>

        <tr>
            <th>District</th>
            <td><select id="user_time_zone" class="form-control" name="district" value=<?php echo $row['district']?>>
                    <option value="Ampara" >Ampara</option><option value="Anuradhapura" >Anuradhapura</option><option value="Badulla" >Badulla</option>
                    <option value="Batticaloa" >Batticaloa</option><option value="Colombo" >Colombo</option><option value="Galle" >Galle</option>
                    <option value="Gampaha" >Gampaha</option><option value="Hambantota" >Hambantota</option><option value="Jaffna" >Jaffna</option>
                    <option value="Kalutara" >Kalutara</option><option value="Kandy" >Kandy</option><option value="Kegalle" >Kegalle</option>
                    <option value="Kilinochchi" >Kilinochchi</option><option value="Kurunegala" >Kurunegala</option><option value="Mannar" >Mannar</option>
                    <option value="Matale" >Matale</option><option value="Matara" >Matara</option><option value="Monaragala" >Monaragala</option>
                    <option value="Mullaitivu" >Mullaitivu</option><option value="Nuwara_Eliya" >Nuwara Eliya</option><option value="Polonnaruwa" >Polonnaruwa</option>
                    <option value="Puttalam" >Puttalam</option><option value="Rathnapura" >Rathnapura</option><option value="Trincomalee" >Trincomalee</option>
                    <option value="Vavuniya" >Vavuniya</option></select>
            </td>
        </tr>

        <tr>
            <th>City:</th>
            <td><input class="form-control" type="number" name="number_of_vacancies" value="<?php echo $row['number_of_vacancies']?>"  autofocus /></td>
        </tr>

        <tr>
            <td colspan="2"><input class="Submit_btn" name="Submit_change_Stu" type="submit" value="Save Changes"></td>
        </tr>

    </tbody>
</table>







<?php
/**
<!--<div class="containter">

    <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>
            Edit school details and save changes
        </div>
        <h3 style="color:white">School Details</h3>

        <form class="form-horizontal" id="signup" role="form" action="<?php echo URL ?>showSchool/editConfirm"  method="post">
            <div class="form-group">
                <label class="col-lg-3 control-label">School ID</label>
                <div class="col-lg-8">
                    <input class="form-control" name="sch_ID" type="text" value="<?php echo $row['sch_ID']?>" readonly/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">School Name</label>
                <div class="col-lg-8">
                    <input class="form-control" name="sch_name" type="text" value="<?php echo $row['sch_name']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Street No:</label>
                <div class="col-lg-8">
                    <input class="form-control" name="street_no" type="text" value=<?php echo $row['street_no']?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Street Name:</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" name="street_name" value=<?php echo $row['street_name']?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">City:</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="city" value=<?php echo $row['city']?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">District</label>
                <div class="col-lg-8">
                    <div class="ui-select">
                        <select id="user_time_zone" class="form-control" name="district" value=<?php echo $row['district']?>>
                            <option value="Ampara" >Ampara</option><option value="Anuradhapura" >Anuradhapura</option><option value="Badulla" >Badulla</option>
                            <option value="Batticaloa" >Batticaloa</option><option value="Colombo" >Colombo</option><option value="Galle" >Galle</option>
                            <option value="Gampaha" >Gampaha</option><option value="Hambantota" >Hambantota</option><option value="Jaffna" >Jaffna</option>
                            <option value="Kalutara" >Kalutara</option><option value="Kandy" >Kandy</option><option value="Kegalle" >Kegalle</option>
                            <option value="Kilinochchi" >Kilinochchi</option><option value="Kurunegala" >Kurunegala</option><option value="Mannar" >Mannar</option>
                            <option value="Matale" >Matale</option><option value="Matara" >Matara</option><option value="Monaragala" >Monaragala</option>
                            <option value="Mullaitivu" >Mullaitivu</option><option value="Nuwara_Eliya" >Nuwara Eliya</option><option value="Polonnaruwa" >Polonnaruwa</option>
                            <option value="Puttalam" >Puttalam</option><option value="Rathnapura" >Rathnapura</option><option value="Trincomalee" >Trincomalee</option>
                            <option value="Vavuniya" >Vavuniya</option></select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">No of Vacancies</label>
                <div class="col-md-8">
                    <input class="form-control" type="number" name="number_of_vacancies" value=<?php echo $row['number_of_vacancies']?>>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Save Changes">
                    <span></span>
                    <input type="reset" class="btn btn-default" value="Cancel">
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>--!> **/?>

