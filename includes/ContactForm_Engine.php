<?php
/*
 * Unami Lodge, One.
 * ContactForm_Engine
 * ----------------------------------------------------
 * E-mails specified email addresses when someone
 * fills out the Form found on the Multiple Chapters
 * Found Page.
 *
 * Also commits entered data to backup SQL table.
 * ----------------------------------------------------
 * |Version History|
 *
 * 1.1 - Original
 * 11/1/12
 *
 * 1.2 - New Site Re-Write
 * 11/24/12 - Zach Cross
 *
 * 1.3 - Addedd mySQL Database Logging
 * 3/4/13 - Zach Cross
 *
 * 1.35 - Added communications@unamilodge.org reply to address.
 * 3/6/13 - Zach Cross
 *
 * 1.4b - Added message sent confirmation page.
 *		  Implemented mysqli functions.
 *		  Actually escaped charachters in the SQL Query.
 * 11/2/13 - Zach Cross
 *
 * 1.5 - Added Send Message Flag to prevent web crawlers from activiting this script.
 * 3/1/14
 *
 * 1.6 - Transitioned to Eleven2.  Extracted db info to dbconnect.php
 * 8/31/14 - Matt Gutterman
 *
 * 1.7 - 	Added math related validation.
 * 			Changed Meta tag redirects to php redirects.
 *			Added "die" ot validation related if statements so the script wouldn't continue doing things after it realized something went wrong...
 *			10/1/14 - David Gibbons
 *
 * ----------------------------------------------------
 * Questions?
 * David Gibbons dgibbns@gmail.com
 * Zach Cross me@zachcross.com
 * ----------------------------------------------------
 */
 $Recip = Trim(stripslashes($_POST['Recip']));
 $Name = Trim(stripslashes($_POST['Name']));
 $Email = Trim(stripslashes($_POST['Email']));
 $Subject = Trim(stripslashes($_POST['Subject']));
 $Message = Trim(stripslashes($_POST['Message']));
 $SndMsgFlag = Trim(stripslashes($_POST['SndMsgFlag']));
 $Validation = Trim(stripslashes($_POST['Validation']));
 $RandomNum1 = Trim(stripslashes($_POST['RandomNum1']));
 $RandomNum2 = Trim(stripslashes($_POST['RandomNum2']));

 // Check for presence of flag to check that script was called by contact form page.
 if ($SndMsgFlag != "true") {
 	// Re-direct user to error handler
 	header("Location: http://unamilodge.org/error.php?error_text=Contact Form Engine: Send Message Flag Missing");
 	die;
 }

 // Check for presence of message text
 if ($Message == "" && $Subject == "") {
 	 // Re-direct user to error handler
 	header("Location: http://unamilodge.org/error.php?error_text=Contact Form Engine: Message Subject and Body Empty");
 	die;
 }

 // Check for Validation to appear human
 if ($Validation != ($RandomNum1 + $RandomNum2)) {
 	 // Re-direct user back
 	header("Location: http://unamilodge.org/contact?recip=".$Recip."&error=sum");
 	die;
 }

 $TimeStamp = date('l jS \of F Y h:i:s A');
 $IP = $_SERVER['REMOTE_ADDR'];

 $Email_Body = "
 		Name: $Name
 		Email: $Email

		Subject: $Subject
		Message:
		$Message

		--------
		Message originated from $IP on $TimeStamp
		Eleven2 Mailer";

$Recipient = $Recip . "@unamilodge.org, communications@unamilodge.org";

//$Recipient = "mgutterman@unamilodge.org";

// Set up mail headers
if ( $Email == "communications@unamilodge.org" ) {
	$MailHeaders = "From: contact_form@unamilodge.org\r\nReply-To: " . $Email;
} else {
	$MailHeaders = "From: contact_form@unamilodge.org\r\nReply-To: $Email, communications@unamilodge.org";
}

// Send Mail
mail($Recipient, $Subject, $Email_Body, $MailHeaders) or die("Fatal ERROR: Could not send message. Please go back and try again. If the the problem persists, please send mail to zcross@unamilodge.org and cite this error.");


// Commit form data to mySQL database archive.

	// Set Up & Connect
	include 'dbconnect.php';

	// Escape Reserved Charachters
	$Recip_esc = mysqli_real_escape_string($db_link, $Recip);
	$Name_esc = mysqli_real_escape_string($db_link, $Name);
	$Email_esc = mysqli_real_escape_string($db_link, $Email);
	$Subject_esc = mysqli_real_escape_string($db_link, $Subject);
	$Message_esc = mysqli_real_escape_string($db_link, $Message);
	$IP_esc = mysqli_real_escape_string($db_link, $IP);
	$TimeStamp_esc = mysqli_real_escape_string($db_link, $TimeStamp);

	// Set up Query
	$db_query = "INSERT INTO arc_contactfrm (recipient, name, email, subject, message, orig_IP, timestamp) VALUES ('" . $Recip_esc . "', '" . $Name_esc . "', '" . $Email_esc . "', '" . $Subject_esc . "', '" . $Message_esc . "', '" . $IP_esc . "', '" . $TimeStamp_esc . "')";

	// Insert
	mysqli_query($db_link, $db_query);

	// Close DB COnnection
	mysqli_close($db_link);

// Re-direct User to Success Page
	$Passed_Message = nl2br($Message);

	$url = '../contact-confirm.php?recip=' . $Recip . '&name=' . $Name . '&email=' . $Email . '&subject=' . $Subject . '&message=' . $Passed_Message;
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

// Close Browser Tab /  Window
   //echo "<script>window.close();</script>";
?>
