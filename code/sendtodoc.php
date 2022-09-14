<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['pid'];
    $patient_name = $_POST['pname'];
    $patient_weight = $_POST['pweight'];
    $patient_height = $_POST['pheight'];
    $patient_temperature = $_POST['temperature'];
    $patient_bp = $_POST['bloodpressure'];
    $rec_doc = $_POST['doctors'];

    $sql = "INSERT into vitals(patient_id, patient_name, temperature, height, weight, blood_presssure, Doctor) 
    values('$patient_id', '$patient_name', '$patient_temperature', '$patient_height', '$patient_weight', '$patient_bp', '$rec_doc')";

    $result = mysqli_query($conn, $sql);

    if ($result === TRUE) {
        header("Location: TRIAGE.php");
    } else {
        echo ("Error description: " . $conn->error);
    }
}
