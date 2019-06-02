<?php
session_start();

// define variables and set to empty values
   $nameErr = $emailErr =  $phoneErr = $messageErr = "";
   $name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }

    if (empty($_POST["email"])) {
             $emailErr = "Email is required";
          }else {
             $email = test_input($_POST["email"]);

             // check if e-mail address is well-formed
             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
             }
          }

          if (empty($_POST["message"])) {
            $messageErr = "Email is required";
                  }else {
                     $message = test_input($_POST["message"]);
                  }

    echo  "Thank you for your feedback ". $name. "<br>";
    echo " We'll get back to you at ". $email. "<br>";

}

          function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }


 ?>
