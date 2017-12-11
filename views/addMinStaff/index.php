<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:47 AM
 */
?>
<<<<<<< HEAD
<title>Title</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
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
        echo '<td><a href="#">Edit details </a></td>';
        echo '<td> <a href="#">Disable user </a></td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

</body></html>
=======


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
>>>>>>> 45accd767cd453f72012488a6d5d95f23826a700
