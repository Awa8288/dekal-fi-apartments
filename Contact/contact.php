<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head> 
<body>
    <div class="contact-container">
        <div class="navbar">
            <img src="images/logo.jpg" alt="" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="apartment.php">APARTMENTS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="login.php">LOG IN</a><li> 
                    <li><a href="signUp.php">SIGN UP</a></li>
                </ul>
            </nav>
        </div>
         <div>
        <h2 class="contact-header" ><span class="deco">Connect</span> With Us</h2>
         </div>
         
    <div class="contact-section">
        <div class="contact-form">
            <form action="" class="contact" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message"   rows="5" placeholder="Send us a feedback" required></textarea>
                <br>
                <input type="submit" name="submit" class="send-btn-contact " id="l" value="Send">

            </form>
        </div>
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>  21 Hegan Street,Banjul,The Gambia</div>
            <div><i class="fas fa-envelope"></i>dekalfipropertis64527@gmail.com </div>
            <div><i class="fas fa-phone"></i>+(220) 3604793/3881169/7881169</div>
            <div><i class="fas fa-clock"></i>Monday-Friday  8:00 AM to 4:00PM </div>
        </div>
        
    </div>
</body>
</html>