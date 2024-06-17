<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form values
  $paymentMethod = $_POST['paymentMethod'];
  $cardNumber = $_POST['cardNumber'];
  $cardHolderName = $_POST['cardHolderName'];
  $expiryDate = $_POST['expiryDate'];
  $cvv = $_POST['cvv'];

  // Perform validation and further processing
  // ...

  // Example database insertion or further processing
  // Connect to your database
  $servername = "localhost";
  $username = "your_username";
  $password = "your_password";
  $dbname = "your_database_name";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL statement to insert data into a table
  $stmt = $conn->prepare("INSERT INTO payments (payment_method, card_number, card_holder_name, expiry_date, cvv) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $paymentMethod, $cardNumber, $cardHolderName, $expiryDate, $cvv);
  $stmt->execute();

  // Close statement and connection
  $stmt->close();
  $conn->close();

  // Redirect or display a success message
  echo "Payment processed successfully.";
}
?>