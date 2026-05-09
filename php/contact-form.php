<?php

$conn = mysqli_connect(
  "localhost",
  "root",
  "",
  "corporate_gifting"
);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries
(name,email,phone,message)

VALUES
('$name','$email','$phone','$message')";

mysqli_query($conn,$sql);

echo "Inquiry Submitted";

?>
