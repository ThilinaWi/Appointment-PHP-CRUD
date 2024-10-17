<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/appoiment.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
</head>
<body>
<header>
        <nav>
            <h2>THE LAND'S MALABE</h2>
            <div class="navItem">
                <ul>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
                <button>Post a Ad's</button>
                <h4><a href="http://">Sign Up</a>|<a href="">Sign In</a></h4>
            </div>
        </nav>
    </header>

<div class="container">
    <br>
    <div>  <button class="btn btn-primary my-5"><a href="appoimentcreate.php"class="text-light">Add Appoimnet</a>
    
    </button></div>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Appointment_ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">time</th>
      <th scope="col">contact no</th>
      <th scope="col">email</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  

  <?php

  $sql="SELECT*FROM`appointment`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $Appointment_ID=$row['Appointment_ID'];
        $Name=$row['Name'];
        $Appointment_Date=$row['Appointment_Date'];
        $Appointment_Time=$row['Appointment_Time'];
        $Contact_Number=$row['Contact_Number'];
        $email=$row['email'];
        echo'<tr>
      <th scope="row">'.$Appointment_ID.'</th>
      <td>'.$Name.'</td>
      <td>'.$Appointment_Date.'</td>
      <td>'.$Appointment_Time.'</td>
      <td>'.$Contact_Number.'</td>
      <td>'.$email.'</td>
       <td>
        <button class="btn btn-primary"><a href="appoimentupdate.php?
        updateid='.$Appointment_ID.'"class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="appoimentdelete.php? 
        deleteid='.$Appointment_ID.'" class="text-light">delete</a></button>
    </td>
    </tr>';
    }
  }

  ?>
    
   
  </tbody>
</table>
</div>

<footer>
        <div class="policy">
            <a href="#">Terms & Conditions</a> 
            <a href="#">Privacy Policy</a>
            <a href="#">FAQs</a>
        </div>
        
        <div class="follow">
           
            <a href="http://www.tiktok.com"><img src="tiktok.png" alt="tiktok"></a>
            <a href="http://www.pinterest.com"><img src="pinterest.png" alt="Pinterest"></a>
            <a href="http://www.instagram.com"><img src="instagram.png" alt="Instagram"></a>
            <a href="http://www.facebook.com"><img src="facebook-.png" alt="facebook"></a>
        </div>
        
        <div class="cright">
            <p>&copy;2024 The Land Malabe. All Right Reserved |  Design & Development by MLB_09.01_08  </p>
        </div>
    </footer>
    
</body>
</html>