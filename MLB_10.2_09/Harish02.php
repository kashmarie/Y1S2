<!DOCTYPE html>
<html>
<head>
<title>Coral Reef Resort</title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="Header">
        <h1>Coral Reef Resort</h1>
        <ul class="ul1">
            <li class="li1"><a class="active" href="#"><b>Home</b></a></li>
            <li class="li1"><a href="#"><b>Help</b></a></li>
            <li class="li1"><a href="#"><b>Contact</b></a></li>
            <li class="li1"><a href="#"><b>About Us</b></a></li>
            <form class="Searchbar">
                <input type="search" name="search" placeholder="Search...">
                <input type="submit" value="Search">
            </form>
        </ul>
    </header>
  
    <div class="Page">
        <img src="images/Image1.jpg" alt="backgroundImage"> 
  
        <h1>Login</h1>
  
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <label for="remember">Remember me:</label>
            <input type="checkbox" id="remember" name="remember"><br><br>
            
            <input type="submit" value="Sign In"><br><br>
  
            <input type="submit" value="Sign in with Facebook"><br><br>
            <input type="submit" value="Sign in with Google"><br><br>
  
            <a href="#">Forgot password?</a>
            <input type="submit" value="Click here"><br><br>
        </form> 
        <br/>
        <hr class="l">
        <footer class="footer">
            <img src="images/logo.png" class="logo_1" width="200" height="50" alt="Footer Logo">
            <p>&copy; 2023 Coral Reef Resort. All rights reserved.</p>
            <p>Contact us: info@CoralReefResort.com | +94-123-456-7890</p>
        </footer> 
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (!empty($username) && !empty($password)) {
            echo '<script>alert("Login successful! Welcome, ' . $username . '!");</script>';
        } else {
            echo '<script>alert("Please fill in all fields.");</script>';
        }
    }
    ?>
</body>
</html>
