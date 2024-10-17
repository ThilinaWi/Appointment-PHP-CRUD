
<?php
include 'connect.php';
$Appointment_ID=$_GET['updateid'];
$sql="Select * from `appointment`where Appointment_ID=$Appointment_ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$Name=$row['Name'];
$Appointment_Date=$row['Appointment_Date'];
$Appointment_Time=$row['Appointment_Time'];
$Contact_Number=$row['Contact_Number'];
$email=$row['email'];

if(isset($_POST['submit'])){
  $Name=$_POST['Name'];
  $Appointment_Date=$_POST['Appointment_Date'];
  $Appointment_Time=$_POST['Appointment_Time'];
  $Contact_Number=$_POST['Contact_Number'];
  $email=$_POST['email'];

    $sql="update`appointment`set Appointment_ID='$Appointment_ID',Name='$Name',Appointment_Date='$Appointment_Date',Contact_Number='$Contact_Number',email='$email'where Appointment_ID=$Appointment_ID";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo"Updated succesfully";
     header('location:appoimentdisplay.php');
       
    }else{
        die(mysqli_error($con));
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="css/create.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <title>appointment</title>
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
    
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your name"name="Name"autocomplete="off"value=<?php echo $Name;?>>
  </div>
  <div class="mb-3">
    <label>Appointment_Date</label>
    <input type="date" class="form-control"
    placeholder="Enter your email"name="Appointment_Date"autocomplete="off"value=<?php echo $Appointment_Date;?>>
  </div>
  <div class="mb-3">
    <label>Appointment_Time</label>
    <input type="text" class="form-control"
    placeholder="Enter your mobile number"name="Appointment_Time"autocomplete="off"value=<?php echo $Appointment_Time;?>>
  </div>
  <div class="mb-3">
    <label>Contact_Number</label>
    <input type="text" class="form-control"
    placeholder="Enter your password"name="Contact_Number"value=<?php echo $Contact_Number;?>>
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="email" class="form-control"
    placeholder="Enter your password"name="email"value=<?php echo $email;?>>
  </div>
 <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
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