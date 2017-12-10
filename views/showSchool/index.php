<?php
/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 11/8/2017
 * Time: 9:41 PM
 */
?>

<html>
    <body>

        <div class="container" style="background-color:lightgoldenrodyellow">
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
                    echo '<th>'.$row['sch_name'].'</th>';
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
