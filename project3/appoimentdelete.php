<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $Appointment_ID=$_GET['deleteid'];

    $sql="delete from`appointment`where Appointment_ID=$Appointment_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"deleted succesfull";
        header('location:appoimentdisplay.php');
    }else{
        die(mysqli_error($con));
    }
}


?>