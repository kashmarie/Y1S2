<!DOCTYPE html>
<html>
<head>
<title>CoralReef.com</title>
<link rel="stylesheet" href="styles/new.css"> 
<script src="js/java.js"></script>
</head>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected options
    $appetizer = $_POST['appetizer'];
    $mainCourse = $_POST['mainCourse'];
    $dessert = $_POST['dessert'];
    $beverage = $_POST['beverage'];
    
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

</br></br><br>
<h1 class="food">Food and Beverages</h1><br>
<p id="con">(Can have three or less than three selections per course)</p> 
<br>
<form action="food.php" method="POST">
<table border = "0" width ="100%"><tr>
<th class="course">Appetizers</th>
<th class="course">Main Course</th>
<th class="course">Desserts</th>
<th class="course">Beverages</th>
</tr><center><tr><td>
<input type="radio" id="option1"  value="option1">
<label for="option1">Option 1</label></td>
<td>
<input type="radio" id="option2"  value="option2">
<label for="option2">Option 2</label></td>
<td>
<input type="radio" id="option3"  value="option3">
<label for="option3">Option 3</label></td>
<td>
<input type="radio" id="option3"  value="option4">
<label for="option4">Option 4</label></td>
</tr>
<tr><td>
<input type="radio" id="option3"  value="option5">
<label for="option5">Option 5</label><br></td>
<td>
<input type="radio" id="option3"  value="option6">
<label for="option6">Option 6</label><br></td>
<td>
<input type="radio" id="option3"  value="option7">
<label for="option7">Option 7</label><br></td>
<td>
<input type="radio" id="option8"  value="option8">
<label for="option8">Option 8</label><br></td></tr>
<tr>
<td>
<input type="radio" id="option9"  value="option9">
<label for="option9">Option 9</label><br></td><td>
<input type="radio" id="option10"  value="option10">
<label for="option10">Option 10</label><br></td><td>
<input type="radio" id="option11"  value="option11">
<label for="option11">Option 11</label><br></td><td>
<input type="radio" id="option12"  value="option12">
<label for="option12">Option 12</label><br></td></tr>
</center>
</table></br>
<center>
<center>

<button id="submitButton" type="submit" onclick="directToPage()">Submit</button>
</form></center>
</center>


<br/>
<hr class="l">
<footer class="footer">
<img src="images/logo.png" class="logo_1" width="200px" height="50px">
<div class="footercontent">
<p>&copy; 2023 Coral Reef Resort. All rights reserved.</p>
<p>Contact us: info@coralreefresort.com| +94-123-456-7890</p>
</div>
</footer>
</body>
</html>