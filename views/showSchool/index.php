<?php
/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 11/8/2017
 * Time: 9:41 PM
 */
?>
<title>School Details</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display:none;}
    link:hover {
        color: dodgerblue;

    }
    tr:hover{
        color:#a6e1ec;
        font-size: large;

    }
</style>

    <body>


        <div class="container" style="background-color:lightgoldenrodyellow font-size:200%">
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Street No</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>Distric</th>
                    <th>Number of vacancies</th>
                </tr>

            </thead>
            <tbody>
            <?php
                foreach ($this->schools as $row){
                    echo '<tr>';
                    echo '<th>'.$row['sch_ID'].'</th>';
                    echo '<th><a class="link" href="'.URL.'showSchool/editSchool/'.$row['sch_ID'].'" style="color:dodgerblue">'.$row['sch_name'].'</a></th>';
                    echo '<th>'.$row['street_no'].'</th>';
                    echo '<th>'.$row['street_name'].'</th>';
                    echo '<th>'.$row['city'].'</th>';
                    echo '<th>'.$row['district'].'</th>';
                    echo '<th>'.$row['number_of_vacancies'].'</th>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
        </div>





</body></html>
