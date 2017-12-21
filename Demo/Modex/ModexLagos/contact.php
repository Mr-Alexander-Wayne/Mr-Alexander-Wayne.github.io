<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$category = $_POST['category'];
$formcontent="Hello there, \n You have received an enquiry from your website. \n From: $name \n Message: $message \n\n\n\nPowered by: The Alexander Wayne";
$recipient = "admin.modexlagos@modexng.net";
$subject = "Enquiry to Modex Guest-House $category" ;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>