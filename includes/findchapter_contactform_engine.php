<?php
/*
 * Unami Lodge, One.
 * Find Chapter ContactForm_Engine
 * ----------------------------------------------------
 * E-mails Zach Cross and David Gibbons when someone 
 * fills out the Form found on the Multiple Chapters 
 * Found Page.
 * ----------------------------------------------------
 * |Version History|
 *
 * 1.1 - Original
 * 11/1/12
 *
 * 1.2 - New Site Re-Write
 * 11/24/12 - Zach Cross
 * ----------------------------------------------------
 * Questions?
 * David Gibbons dgibbns@gmail.com
 * ----------------------------------------------------
 */ 

 $Name = Trim(stripslashes($_POST['Name']));
 $Unit = Trim(stripslashes($_POST['Unit']));
 $Zipcode = Trim(stripslashes($_POST['Zipcode']));
 $Email = Trim(stripslashes($_POST['Email']));
 $Message = Trim(stripslashes($_POST['Message']));
 
 $TimeStamp = date('l jS \of F Y h:i:s A');
 $IP = $_SERVER['REMOTE_ADDR'];
 
 $Email_Body = "
 		Name: $Name
 		Email: $Email
 		Unit: $Unit
 		Zipcode: $Zipcode
 		
		Message: 
		$Message
		
		--------
		Message originated from: $IP 
		$TimeStamp";


$Recipient = "communications@unamilodge.org";
$Subject = "Unami Lodge Find Chapter Contact Form Submission";

$MailHeaders = "From: findchapter_contact_form@unamilodge.org\r\nReply-To: " . $Email;

mail($Recipient, $Subject, $Email_Body, $MailHeaders) or die("Fatal ERROR: Could not send message. Please go back and try again. The the problem persists, send mail to zcross@unamilodge.org and cite this error.");

// Re-direct User to Success Page
   $url = '../';
   echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   
// Close Browser Tab /  Window
    //echo "<script>window.close();</script>";
?>
