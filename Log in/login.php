<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
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
        <div>
            <section id="form">
                    <div class="form-cover">
                        <h1>Login</h1>
                        <form  action="loginConnect.php" method="post" >
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password"></label>
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="arrange">
                                <button type="submit" class="send-btn">LOGIN</button>
                            <button type="submit" class="b">Forgot Password?</button>
                            </div>
                        </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html>