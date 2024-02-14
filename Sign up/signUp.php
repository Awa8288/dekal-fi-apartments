<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    
       

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
    <div class="form">
        <div class="form-cover">
        <h2>Sign Up to Dekal Fi Properties</h2>
        <form action="connect.php" method="post">
            <div class="form-group">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="name" required>
            </div>
            <div class="form-group">
                <label for="gender"></label>
                <select type="text" id="name" name="gender" placeholder="gender" required>
                <option id="name" value="male">male</option>
                <option id="name" value="female">female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age"></label>
                <input type="number" id="name" name="age" placeholder="age" required>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password"></label>
                <input type="password" id="confirm-password" name="confirmPassword" placeholder="confirm password"  required>
            </div>
            <button type="submit" class="signUp-btn">Sign Up</button>
        </form>
    </div>
    </div>
</body>
</html>