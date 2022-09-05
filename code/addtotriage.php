<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fname = $_POST['pname'];
    $lname = $_POST['lname'];
    $inScheme = $_POST['insurancenum'];
    $phoneNumber = $_POST['phnum'];
    $name = $fname . ' ' . $lname;

    $sql = "INSERT into patients(patient_name,insurance_scheme,policy_number, reg_date) VALUES('$name','$inScheme','$phoneNumber',CURDATE())";
    $result = mysqli_query($conn, $sql);
}
