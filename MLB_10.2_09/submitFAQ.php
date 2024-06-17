<?php
    include_once 'config.php';
    ?>

<?php

      $Description = $_POST["field1"];
      $email = $_POST["field2"];

     $sql = "insert into faq(Description,email)valuse('$Description','$email')";

     if(mysqli_query($conn,$sql)){
        echo"<script>alert{'Record Inserted Succesfully'}</script>";
        header("Location: FAQ.php");
     }
     else{
        echo"<script>alert{'Error in Insertion'}</script>";
     }

     //closing connection
     mysqli_close($conn);
?>