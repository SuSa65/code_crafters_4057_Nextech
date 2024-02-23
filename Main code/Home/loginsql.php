<?php
include("dbConnection.php");
$customer_name = $_POST['stu_rollno'];
$c_password = $_POST['stu_password'];
$sql = "SELECT * FROM customer WHERE stu_rollno= '$customer_name' AND stu_password='$c_password'";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
$me = "invalid password";
session_start();
if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $_SESSION["student_id"] = $row['student_id'];
    }
    $_SESSION["student_name"] = $_POST['student_name'];
    header("location:\GrowMark-1.0.0\indexlog.php");
} else {
    header("location: ./login.php?password_msg= Enter a correct password");
}
?>
