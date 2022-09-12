<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fname = $_POST['pname'];
    $lname = $_POST['lname'];
    $inScheme = $_POST['insurancenum'];
    $phoneNumber = $_POST['phnum'];
    $name = $fname . ' ' . $lname;
    $patient_id = uniqid('patient_');

    $sql = "INSERT into patients(patient_id,patient_name,insurance_scheme,policy_number, reg_date) VALUES('$patient_id','$name','$inScheme','$phoneNumber',CURDATE())";
    $result = mysqli_query($conn, $sql);
    if ($result === TRUE) {
        header("Location: reception.php");
    } else {
        echo '<script type= "text/Javascript">
        alert("Issue in submitting user details, kinldy review or contact your system administrator");
        window.location = "reception.php";
        </script>';
    }
}
