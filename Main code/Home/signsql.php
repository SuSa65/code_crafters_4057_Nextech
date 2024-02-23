<?php
include("dbConnection.php");
// get the form data

$student_name = $_POST['student_name'];
$s_rollno = $_POST['stu_rollno'];
$s_mail = $_POST['stu_mail'];
$s_address = $_POST['stu_address'];
$s_phoneno = $_POST['stu_phoneno'];
$s_password = $_POST['stu_password'];


// insert data into table
$sql = "INSERT INTO student (student_name,stu_rollno,stu_mail,stu_address,stu_phoneno,stu_password) VALUES ('$student_name', '$s_rollno','$s_mail','$s_address','$s_phoneno','$s_password')";
  
if (mysqli_query($conn, $sql)) {
    header("location: login.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>