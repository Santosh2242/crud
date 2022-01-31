<?php

include 'config.php';
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

 
 
 $sql = "INSERT INTO student(sname,aaddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
 $result = mysqli_query($conn,$sql) or die("Query UnSuccessfull");
 
 header("Location: http://baiju.infinityfreeapp.com/index.php");
 mysqli_close($conn);

?>