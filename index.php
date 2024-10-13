<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Travel</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="intro.css">
  
</head>
<body>

<?php
    // Example PHP logic for dynamic greeting
    $hour = date('G');
    if ($hour >= 5 && $hour < 12) {
        $greeting = "Good Morning!";
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = "Good Afternoon!";
    } else {
        $greeting = "Good Evening!";
    }
?>
<div class="logo">
        <img src="https://media.istockphoto.com/id/1056120516/vector/travel-icons-with-airplane-fly-around-the-earth.jpg?s=612x612&w=0&k=20&c=KhopDx1Z56Wv11p_XUXG0yO6JBSdRHCOxjFZqqurG40=" alt="Plane Logo">   <!-- Replace 'plane_logo.png' with your logo file -->
        <h1>World Travel</h1>
    </div>
    <div class="intro-container">
        <h1><?php echo $greeting; ?> Welcome to World Travel</h1>
        <pre>Your gateway to exploring the most amazing destinations on the planet!
        My name is Tayyab, and I am available 24/7 to assist you with all your travel bookings.
        Feel free to reach out and share your details—I’m here to ensure your journey 
        is smooth and hassle-free.</pre>
        
        <div class="button-group">
            <a href="about.php" class="btn">About Us</a>
            <a href="destinations.php" class="btn">Our Destinations</a>
            <a href="contact.php" class="btn">Contact Us</a>
            <!-- Added Fill Details Button -->
            <a href="fill_details.php" class="btn">Fill Details</a>
        </div>
    </div>

</body>
</html>
