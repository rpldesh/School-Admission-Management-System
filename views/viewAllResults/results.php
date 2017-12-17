<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 5:11 PM
 */
?>

<title>Results</title>
<link href="http://localhost/School-Admission-Management-System/public/css/table.css" rel="stylesheet">
<link href="http://localhost/School-Admission-Management-System/public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
<style> footer{ position: absolute; right: 0; bottom: 0; left: 0;}</style>
</head>
<body>

<table class="table">
    <tbody>
    <h3><?php echo $this->schoolName['sch_name'].'. '.$this->schoolName['city'] ?> <h3>
    <tr>
        <th>Application ID</th>
        <th>Name</th>
        <th>Mark for distance</th>
        <th>Mark for parent reference</th>
        <th>Mark for sibling reference</th>
        <th>Mark for academic staff</th>
        <th>Mark for transfers</th>
        <th>Total</th>
        <th>Status</th>
    </tr>
    <?php
    $count = 195;
    foreach ($this->result_list as $row){
        $count = $count+1;
        if ($count<$this->vacancies){
            $state = "Qualified";
        }else{
            $state = "Not qualified";
        }
        echo '<tr>';
        echo '<td>'.$row['application_ID'].'</td>';
        echo '<td>'.$row['first_name']." ".$row['mid_name']." ".$row['last_name'].'</td>';
        echo '<td>'.$row['distance_mark'].'</td>';
        echo '<td>'.$row['parental_ref_mark'].'</td>';
        echo '<td>'.$row['sibling_ref_mark'].'</td>';
        echo '<td>'.$row['academic_ref_mark'].'</td>';
        echo '<td>'.$row['state_emp_mark'].'</td>';
        echo '<td>'.$row['total_mark'].'</td>';
        echo '<td>'.$state.'</td>';
        echo '</tr>';
    }
    ?>

    </tbody>
</table>
<?php echo '<a class="linkSize" href="'.URL.'viewAllResults/printResult/'.$this->schoolName['sch_ID'].'"> Click Here to Print Results </a>' ; ?>
</body>
</html>
