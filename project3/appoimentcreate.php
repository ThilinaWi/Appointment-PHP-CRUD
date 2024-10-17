<?php
include 'connect.php';

$message = ''; // Initialize a variable for the message

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Appointment_Date = $_POST['Appointment_Date'];
    $Appointment_Time = $_POST['Appointment_Time'];
    $Contact_Number = $_POST['Contact_Number'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `appointment` (Name, Appointment_Date, Appointment_Time, Contact_Number, email) VALUES ('$Name', '$Appointment_Date', '$Appointment_Time', '$Contact_Number', '$email')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $message = "Appointment created successfully!";
        echo "<script>alert('$message'); window.location.href='appoimentdisplay.php';</script>";
        exit();
    } else {
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
    <link href="css/image.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <title>Project</title>
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
            <button>Post an Ad</button>
            <h4><a href="http://">Sign Up</a>|<a href="">Sign In</a></h4>
        </div>
    </nav>
</header>

<div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="Name" autocomplete="off" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed">
        </div>

        <div class="mb-3">
            <label>Appointment Date</label>
            <input type="date" class="form-control" name="Appointment_Date" required>
        </div>

        <div class="mb-3">
            <label>Appointment Time</label>
            <input type="time" class="form-control" name="Appointment_Time" required>
        </div>

        <div class="mb-3">
            <label>Contact Number</label>
            <input type="tel" class="form-control" placeholder="Enter your number" name="Contact_Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required maxlength="200">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<footer>
    <div class="policy">
        <a href="#">Terms & Conditions</a> 
        <a href="#">Privacy Policy</a>
        <a href="#">FAQs</a>
    </div>
    <div class="follow">
        <a href="http://www.tiktok.com"><img src="images/tiktok.png" alt="tiktok"></a>
        <a href="http://www.pinterest.com"><img src="images/pinterest.png" alt="Pinterest"></a>
        <a href="http://www.instagram.com"><img src="images/instagram.png" alt="Instagram"></a>
        <a href="http://www.facebook.com"><img src="images/facebook-.png" alt="facebook"></a>
    </div>
    <div class="cright">
        <p>&copy;2024 The Land Malabe. All Rights Reserved | Design & Development by MLB_09.01_08</p>
    </div>
</footer>
</body>
</html>
