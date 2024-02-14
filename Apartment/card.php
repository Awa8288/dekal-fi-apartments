<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container">
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
    <div class="creditCard  form-cover">
        <h3>Card Info</h3>
        <div class="form-group">  
        <input type="text" id="cname" name="cardname" placeholder="Name on credit card"><br>
         
        </div>
        <div class="form-group"> 
        <input type="text" id="ccnum" name="cardnumber" placeholder="Credit card number"><br>
            
        </div>
        <div class="form-group"> 
        <input type="text" id="expmonth" name="expmonth" placeholder="Expire month"><br>
            
        </div>
        <div class="form-group">  
            <input type="text" id="expyear" name="expyear" placeholder="Expire year"><br>
        </div>
        <button type="button">proceed</button>
    </div>
   </div>
    <script>
        var proceed = document.querySelector("button");
        proceed.addEventListener("click", function() {
            window.location.href = "success.php";
        })
    </script>
</body>
</html>