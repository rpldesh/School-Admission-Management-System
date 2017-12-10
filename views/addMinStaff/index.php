<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:47 AM
 */


?>


<html>
<body>

<div class="container" style="background-color:lightgoldenrodyellow">
    <table class="table table-info table-hover">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>User Type</th>
            <th>User Status</th>
        </tr>

        </thead>
        <tbody>
        <?php
        foreach ($this->user_list as $row){
            echo '<tr>';
            echo '<th>'.$row['u_ID'].'</th>';
            echo '<th>'.$row['first_name']." ".$row['last_name'].'</th>';
            echo '<th>'.$row['user_type'].'</th>';
            echo '<th>'.$row['user_status'].'</th>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>





</body></html>
>>>>>>> 76df5a31f958b5f34804e1c33be6a9e199a9b253
