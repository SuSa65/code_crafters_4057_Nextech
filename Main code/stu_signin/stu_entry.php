<?php
include("dbConnection.php");
// get the form data

$student_name = $_POST['student_name'];
$s_rollno = $_POST['stu_rollno'];
$s_mail = $_POST['stu_mail'];
$s_service = $_POST['service_typ'];
$s_phoneno = $_POST['stu_phoneno'];
$stu_req = $_POST['stu_req'];


// insert data into table
$sql = "INSERT INTO services (student_name,stu_rollno,stu_mail,stu_req,stu_phoneno,stu_req) VALUES ('$student_name', '$s_rollno','$s_mail','$s_services','$s_phoneno','$s_req')";
  
if (mysqli_query($conn, $sql)) {
    header("location: stu_home.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>