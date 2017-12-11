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