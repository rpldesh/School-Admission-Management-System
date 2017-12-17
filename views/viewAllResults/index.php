<?php
/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 11/8/2017
 * Time: 9:41 PM
 */
?>
<title>Select a school</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display:none;}
    link:hover {
        color: dodgerblue;

    }
    .enlarge:hover{
        color:#a6e1ec;
        font-size: 120%;

    }
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




<div class="container" style="background-color:lightgoldenrodyellow font-size:200%">
    <table class="table table-info table-hover">
        <thead>
        <tr>
            <th>School ID</th>
            <th>Name of the school</th>
        </tr>

        </thead>
        <tbody>
        <?php
        foreach ($this->schools as $row){
            echo '<tr>';
            echo '<td>'.$row['sch_ID'].'</td>';
            echo '<td class="enlarge"><a class="link" href="'.URL.'viewAllResults/getResult/'.$row['sch_ID'].'" style="color:dodgerblue">'.$row['sch_name'].'</a></td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>





</body></html>
