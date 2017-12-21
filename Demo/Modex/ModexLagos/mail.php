<?php $fname = $_POST['fname'];
$lname = $_POST['lname']
$email = $_POST['email'];
$tel = $_POST['tel'];
$category = $_POST['category'];
$adate = $_POST['adate'];
$ddate = $_POST['ddate'];
$formcontent="Hello there, \n You have received a booking request made from your website. 
\nBooking Summary: $lname $fname would love to book a $category room. He/She would be staying between $adate and $ddate. You can contact him/her on $tel or $email. \n \nKindly find the full details below: \n\n\n
\nLast Name: $lname \nFirst Name: \n$fname \nEmail: $email \nPhone Number: $tel \nArrival Date: $adate \nDeparture Date: $ddate \nRoom Type: $category \n\n\n\nPowered by: The Alexander Wayne";
$recipient = "admin.modexlagos@modexng.net";
$subject = "Booking Application to Modex Guest-House" ;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>