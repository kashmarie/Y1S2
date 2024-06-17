<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $emailTelephone = $_POST['emailTelephone'];
  $otp = $_POST['otp'];
  $newPassword = $_POST['newPassword'];
  $confirmNewPassword = $_POST['confirmNewPassword'];

 
  $response = array('status' => 'success', 'message' => 'Password changed successfully');
  echo json_encode($response);
}
?>