<!DOCTYPE html>
<html>
    <head> 
        <title>CoralReef.com</title>
        <link rel="stylesheet" href="styles/new.css">
        <script src="js/java.js"></script>
    </head>
    <body>
        <?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the form data
            $date = $_POST['day'];
            $time = $_POST['Time'];
            $capacity = $_POST['capacity'];
            $hall = $_POST['hall'];
            header('Location: success.html');
            exit();
        }
		?>
		
<header class="Header">
            <h1>Coral Reef Resort</h1>
            <img src = "images/logo.png" class="logo" width = "200 px" height = "50 px" >
            <ul class="ul1">
            <li class="li1"><a class="active" href="HRS_html.html"><b>Home</b></a></li>
            <li class="li1"><a href="Help.html"><b>Help</b></a></li>
            <li class="li1"><a href="Contact.html"><b>Contact</b></a></li>
            <li class="li1"><a href="AboutUs.html"><b>About Us</b></a></li>
            
            </ul>
			<hr>
</header>
        <hr>
       <section class="sec2">
        <h1 class="heading"> Halls and Facilities</h1>
        <br/><br/><br/>
<table class="data" border = "0" width ="100%" align="center"><tr>
<td class="datali">Date</td>
<td class="datali">Time</td>
<td class="datali">Capacity</td>
</tr></br>
 <tr>
<form action="#" method="POST"  id="hform">
<td class="selection"><input type="date" id="input1" name="day" required></td>
<td class="selection"><input type="time" id="input2" name="Time" required></td>
<td class="selection"><input type="number" id="input3" name= "capacity" required></td>
</tr>
</br></br><br>
<table id="h" width="100%"><tr><th>Available halls</th></tr>
<tr><td>
<select class="slct" required>
  <option value="option1">Luxury</option>
  <option value="option2">Regular</option>
  <option value="option3">Grand</option></td></tr>
</select></table>
     </br></br></br></br>
<center>

<button id="submitButton" type="submit" onclick="redirectToPage()" disabled>Submit</button>
</form></center>
<hr>
<footer class="footer">
    <img src = "images/logo.png" class="logo_1" width = "200 px" height = "50 px" >
        <div class="footercontent">
            <p>&copy; 2023 Coral Reef Resort. All rights reserved.</p>
            <p>Contact us: info@CoralReefResort.com | +94-123-456-7890</p>
        </div>
        
    
</footer>
    </body>
</html>