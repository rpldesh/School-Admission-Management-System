<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 10:16 AM
 * <th>Application ID</th>
 */

ob_start();
require 'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
$topic = $this->schoolName['sch_name'].'. '.$this->schoolName['city'];
$topic = "Final List of Qualified Applicants - ".$topic;
$pdf->Cell(190,15,$topic,1,1,"C",0,0);
$pdf->SetFont("Arial","B",10);
$pdf->Cell(15,20,"App.ID",1,0,"C",0,0);
$pdf->Cell(66,20,"Name",1,0,"C");
$pdf->SetFont("Arial","B",10);
$pdf->Cell(73,10,"Marks",1,0,"C");
$pdf->Cell(15,20,"Total",1,0,"C");
$pdf->SetFont("Arial","B",6);
$pdf->Cell(21,10,"Qualified:Q",1,1,"C");
$pdf->SetFont("Arial","B",7);
$pdf->Cell(15,10,"",0,0);
$pdf->Cell(66,10,"",0,0);
$pdf->Cell(14.6,10,"Distance",1,0,"C");
$pdf->Cell(14.6,10,"Parent Ref",1,0,"C");
$pdf->Cell(14.6,10,"Sibling Ref",1,0,"C");
$pdf->Cell(14.6,10,"Academic",1,0,"C");
$pdf->Cell(14.6,10,"Transfer",1,0,"C");
$pdf->Cell(15,10,"",0,0);
$pdf->SetFont("Arial","B",6);
$pdf->Cell(21,10,"Not Qualified:N/Q",1,1,"C");

$pdf->SetFont("Arial","",10);

$count=195;
foreach ($this->result_list as $row) {
    $count = $count + 1;
    if ($count < $this->vacancies) {
        $state = "Q";
    } else {
        $state = "N/Q";
    }
    $pdf->Cell(15, 10, $row['application_ID'], 1, 0);
    $pdf->Cell(66, 10, $row['first_name'] . " " . $row['mid_name'] . " " . $row['last_name'], 1, 0);
    $pdf->Cell(14.6, 10, $row['distance_mark'], 1, 0);
    $pdf->Cell(14.6, 10, $row['parental_ref_mark'], 1, 0);
    $pdf->Cell(14.6, 10, $row['sibling_ref_mark'], 1, 0);
    $pdf->Cell(14.6, 10, $row['academic_ref_mark'], 1, 0);
    $pdf->Cell(14.6, 10, $row['state_emp_mark'], 1, 0);
    $pdf->Cell(15, 10, $row['total_mark'], 1, 0);
    $pdf->SetFont("Arial","B",12);
    $pdf->Cell(21, 10, $state, 1, 1,'C');
    $pdf->SetFont("Arial","",10);
}
$pdf->Output();
ob_end_flush();
?>

