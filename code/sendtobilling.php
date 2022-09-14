<?php
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patient_id = $_POST['pid'];
    $patient_name = $_POST['pname'];
    $visit_date = $_POST['pdate'];
    $doctor = 'James';
    $pharmacy = '0';
    $lab = '0';
    $total = 2500;

    $sql = "Insert into billing(patient_id, patient_name, doctor, pharmacy, lab, total, next_visit) 
    values('$patient_id', '$patient_name', '$doctor', '$pharmacy', '$lab', '$total', '$visit_date' )";
    $result = mysqli_query($conn, $sql);

    if ($result === TRUE) {
        header("Location: doctor.php");
    } else {
        echo ("Error description: " . $conn->error);
    }
}
