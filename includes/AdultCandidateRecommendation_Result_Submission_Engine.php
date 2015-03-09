<?php
/*************************************
 * Unami Lodge, One.                 *
 * Adult Candidate Recommendation    *
 * Submission Form Processing Engine *
 *                                   *
 * Zach Cross - 10/2/12 12/29/13     *
 * me@zachcross.com                  *
 *************************************/

// SET ELECTION YEAR
$Year = 2014;
 
// *Parse Form Input*

$Recommendation_UnitType = Trim(stripslashes($_POST['Recommendation_UnitType']));

// Nominee Contact Information
$NomineeContactInfo_Name = Trim(stripslashes($_POST['NomineeContactInfo_Name']));
$NomineeContactInfo_Position = Trim(stripslashes($_POST['NomineeContactInfo_Position']));
$NomineeContactInfo_Unit = Trim(stripslashes($_POST['NomineeContactInfo_Unit']));
$Chapter = Trim(stripslashes($_POST['Chapter'])); 
$NomineeContactInfo_Address = Trim(stripslashes($_POST['NomineeContactInfo_Address'])); 
$NomineeContactInfo_CityStateZip = Trim(stripslashes($_POST['NomineeContactInfo_CityStateZip'])); 
$NomineeContactInfo_Phone = Trim(stripslashes($_POST['NomineeContactInfo_Phone'])); 
$NomineeContactInfo_CellPhone = Trim(stripslashes($_POST['NomineeContactInfo_CellPhone'])); 
$NomineeContactInfo_Email = Trim(stripslashes($_POST['NomineeContactInfo_Email'])); 
$NomineeContactInfo_DateOfBirth = Trim(stripslashes($_POST['NomineeContactInfo_DateOfBirth']));

// Nominee Eligibility Information
$NomineeEligibility_Registration = Trim(stripslashes($_POST['NomineeEligibility_Registration'])); 
$NomineeEligibility_YouthElected = Trim(stripslashes($_POST['NomineeEligibility_YouthElected']));

$Camping_LongTermDate  = Trim(stripslashes($_POST['Camping_LongTermDate']));
$Camping_LongTermLocation  = Trim(stripslashes($_POST['Camping_LongTermLocation']));

$Camping_ShortTermDate1  = Trim(stripslashes($_POST['Camping_ShortTermDate1']));
$Camping_ShortTermDate2  = Trim(stripslashes($_POST['Camping_ShortTermDate2']));
$Camping_ShortTermDate3  = Trim(stripslashes($_POST['Camping_ShortTermDate3']));
$Camping_ShortTermDate4  = Trim(stripslashes($_POST['Camping_ShortTermDate4']));
$Camping_ShortTermDate5  = Trim(stripslashes($_POST['Camping_ShortTermDate5']));
$Camping_ShortTermDate6  = Trim(stripslashes($_POST['Camping_ShortTermDate6']));
$Camping_ShortTermDate7  = Trim(stripslashes($_POST['Camping_ShortTermDate7']));
$Camping_ShortTermDate8  = Trim(stripslashes($_POST['Camping_ShortTermDate8']));
$Camping_ShortTermDate9  = Trim(stripslashes($_POST['Camping_ShortTermDate9']));
$Camping_ShortTermDate10  = Trim(stripslashes($_POST['Camping_ShortTermDate10']));

$Camping_ShortTermLocation1  = Trim(stripslashes($_POST['Camping_ShortTermLocation1']));
$Camping_ShortTermLocation2  = Trim(stripslashes($_POST['Camping_ShortTermLocation2']));
$Camping_ShortTermLocation3  = Trim(stripslashes($_POST['Camping_ShortTermLocation3']));
$Camping_ShortTermLocation4  = Trim(stripslashes($_POST['Camping_ShortTermLocation4']));
$Camping_ShortTermLocation5  = Trim(stripslashes($_POST['Camping_ShortTermLocation5']));
$Camping_ShortTermLocation6  = Trim(stripslashes($_POST['Camping_ShortTermLocation6']));
$Camping_ShortTermLocation7  = Trim(stripslashes($_POST['Camping_ShortTermLocation7']));
$Camping_ShortTermLocation8  = Trim(stripslashes($_POST['Camping_ShortTermLocation8']));
$Camping_ShortTermLocation9  = Trim(stripslashes($_POST['Camping_ShortTermLocation9']));
$Camping_ShortTermLocation10  = Trim(stripslashes($_POST['Camping_ShortTermLocation10']));

// Personal Recommendation Of Nominee
$PersonalRecommendation_Asset  = Trim(stripslashes($_POST['PersonalRecommendation_Asset']));
$PersonalRecommendation_RoleModel  = Trim(stripslashes($_POST['PersonalRecommendation_RoleModel']));
$PersonalRecommendation_Skills  = Trim(stripslashes($_POST['PersonalRecommendation_Skills']));

// Certification Of Recommendation
$CertificationOfRecommendation_Name  = Trim(stripslashes($_POST['CertificationOfRecommendation_Name']));
$CertificationOfRecommendation_Email  = Trim(stripslashes($_POST['CertificationOfRecommendation_Email']));
$CertificationOfRecommendation_Phone  = Trim(stripslashes($_POST['CertificationOfRecommendation_Phone']));
$CertificationOfRecommendation_Address  = Trim(stripslashes($_POST['CertificationOfRecommendation_Address']));
$CertificationOfRecommendation_CityStateZip  = Trim(stripslashes($_POST['CertificationOfRecommendation_CityStateZip']));

// CPUE Notes
$CPUE_Notes = Trim(stripslashes($_POST['CPUE_Notes']));

// END *Parse Form Input*

// Set Timestamp
$TimeStamp = date('l jS \of F Y h:i:s A');

// Get Client IP
$IP = $_SERVER['REMOTE_ADDR'];

// Format Election Results (Strip unused lines.)
if ($Camping_ShortTermDate1 != "") {
	$Camping_LINE1 = "1 - " . $Camping_ShortTermDate1 . " at " . $Camping_ShortTermLocation1;
} else {
	$Camping_LINE1 = "";
}

if ($Camping_ShortTermDate2 != "") {
	$Camping_LINE2 = "2 - " . $Camping_ShortTermDate2 . " at " . $Camping_ShortTermLocation2;
} else {
	$Camping_LINE2 = "";
}

if ($Camping_ShortTermDate3 != "") {
	$Camping_LINE3 = "3 - " . $Camping_ShortTermDate3 . " at " . $Camping_ShortTermLocation3;
} else {
	$Camping_LINE3 = "";
}

if ($Camping_ShortTermDate4 != "") {
	$Camping_LINE4 = "4 - " . $Camping_ShortTermDate4 . " at " . $Camping_ShortTermLocation4;
} else {
	$Camping_LINE4 = "";
}

if ($Camping_ShortTermDate5 != "") {
	$Camping_LINE5 = "5 - " . $Camping_ShortTermDate5 . " at " . $Camping_ShortTermLocation5;
} else {
	$Camping_LINE5 = "";
}

if ($Camping_ShortTermDate6 != "") {
	$Camping_LINE6 = "6 - " . $Camping_ShortTermDate6 . " at " . $Camping_ShortTermLocation6;
} else {
	$Camping_LINE6 = "";
}

if ($Camping_ShortTermDate7 != "") {
	$Camping_LINE7 = "7 - " . $Camping_ShortTermDate7 . " at " . $Camping_ShortTermLocation7;
} else {
	$Camping_LINE7 = "";
}

if ($Camping_ShortTermDate8 != "") {
	$Camping_LINE8 = "8 - " . $Camping_ShortTermDate8 . " at " . $Camping_ShortTermLocation8;
} else {
	$Camping_LINE8 = "";
}

if ($Camping_ShortTermDate9 != "") {
	$Camping_LINE9 = "9 - " . $Camping_ShortTermDate9 . " at " . $Camping_ShortTermLocation8;
} else {
	$Camping_LINE9 = "";
}

if ($Camping_ShortTermDate10 != "") {
	$Camping_LINE10 = "10 - " . $Camping_ShortTermDate10 . " at " . $Camping_ShortTermLocation10;
} else {
	$Camping_LINE10 = "";
}

// Form Body
$Email_Body="	
***********************************************
Election Year: $Year
Chapter: $Chapter

This recommendation is from a: $Recommendation_UnitType
-----------------------------------------------
Nominee Contact Information
Name Of Nominee: $NomineeContactInfo_Name
Primary Position: $NomineeContactInfo_Position
Unit: $NomineeContactInfo_Unit
Chapter: $Chapter
Address: $NomineeContactInfo_Address
City / State / Zip: $NomineeContactInfo_CityStateZip
Phone: $NomineeContactInfo_Phone
Cell Phone: $NomineeContactInfo_CellPhone
Email Address: $NomineeContactInfo_Email
Date Of Birth: $NomineeContactInfo_DateOfBirth
-----------------------------------------------
Nominee Elegibility Information
Nominee has primary current registration in the recommending unit/district/council (Y/N): $NomineeEligibility_Registration
If a Unit recommendation, Unit has elected at least one youth in the current year's youth election (Y/N): $NomineeEligibility_YouthElected

Camping
	Long Term Date & Location: $Camping_LongTermDate at $Camping_LongTermLocation
	Short Term Dates & Locations:
	$Camping_LINE1
	$Camping_LINE2
	$Camping_LINE3
	$Camping_LINE4
	$Camping_LINE5
	$Camping_LINE6
	$Camping_LINE7
	$Camping_LINE8
	$Camping_LINE9
	$Camping_LINE10
-----------------------------------------------
Personal Recommendation Of Nominee
	- An adult is an asset to the Lodge primarily as a person who will help the youth participate in and contribute to the Order of the Arrow and the life of the Lodge. What do you expect from your nominee in this area?
	$PersonalRecommendation_Asset

	- In what ways will this adult leader provide a positive role model for the growth and development of the youth members of the Lodge?
	$PersonalRecommendation_RoleModel
		
	- What professional/vocational skills would your nominee bring to the lodge?
	$PersonalRecommendation_Skills
-----------------------------------------------
Certification Of Adult Leader Recommendation
This recommendation has been made by a: $Recommendation_UnitType
Name Of Unit Committee Chair / Professional Scouter: $CertificationOfRecommendation_Name
Email: $CertificationOfRecommendation_Email
Phone: $CertificationOfRecommendation_Phone
Address: $CertificationOfRecommendation_Address
City / State / Zip: $CertificationOfRecommendation_CityStateZip
-----------------------------------------------
Additional Notes For CP/UE Chair: $CPUE_Notes
		
-----------------------------------------------
Please send mail to zcross@unamilodge.org with any questions or troubles regarding this submission.
		
Submission Originated From: $IP on $TimeStamp
UE Form Processor Release: 2/4/14a
***********************************************
		
		
";
// END Form Body

// Send Mail to Universal Recipients
$recipient = "unitelection@unamilodge.org";
$subject = "Adult Candidate Recomendation Submission";
$mailheader = "From: zcross@unamilodge.org";
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send universal recipient mail. Please go back and try again. The the problem persists, send mail to zcross@unamilodge.org and cite this error.");

$recipient = "communications@unamilodge.org";
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send universal recipient mail. Please go back and try again. The the problem persists, send mail to zcross@unamilodge.org and cite this error.");
// END Send Mail to Universal Recipients

// Store Local Backup Copy of Submission
$myFile = "../files/cpue/AdultCandidate_Submissions.txt";
$fh = fopen($myFile, 'a') or die("Fatal ERROR: Can't open local submission backup file. Please go back and try again. The the problem persists, send mail to zcross@unamilodge.org and cite this error.");
fwrite($fh, $Email_Body);
fclose($fh);
// END Store Local Backup Copy

// Send mail to relevant chapter mailbox
	// Set up comparison variables.
$Baden_Powell = "Baden_Powell";
$Conestoga = "Conestoga";
$Continental = "Continental";
$Constellation = "Constellation";
$Roosevelt = "Roosevelt";
$General_Nash = "General_Nash";
$Lafayette = "Lafayette";
$Minquas = "Minquas";
$Northern = "Northern";
$Triune = "Triune";
$Washington = "Washington";
$Demo = "Demo";

	// Set up mail headers.
$subject = "$Chapter Adult Candidate Reccomendation Submission";
$mailheader = "From: zcross@unamilodge.org";

	// Determine Chapter Recipient.
if ( $Chapter == $Baden_Powell ) {
	$recipient = "badenpowell@unamilodge.org";
	
} else if ( $Chapter == $Conestoga ) {
	$recipient = "conestoga@unamilodge.org";
	
} else if ( $Chapter == $Continental ) {
	$recipient = "continental@unamilodge.org";
	
} else if ( $Chapter == $Constellation ) {
	$recipient = "constellation@unamilodge.org";
	
} else if ( $Chapter == $Roosevelt ) {
	$recipient = "roosevelt@unamilodge.org";
	
} else if ( $Chapter == $General_Nash ) {
	$recipient = "generalnash@unamilodge.org";
	
} else if ( $Chapter == $Lafayette ) {
	$recipient = "lafayette@unamilodge.org";
	
} else if ( $Chapter == $Minquas ) {
	$recipient = "minquas@unamilodge.org";
	
} else if ( $Chapter == $Northern ) {
	$recipient = "northern@unamilodge.org";
	
} else if ( $Chapter == $Triune ) {
	$recipient = "triune@unamilodge.org";
	
} else if ( $Chapter == $Washington ) {
	$recipient = "washington@unamilodge.org";
	
} else if ( $Chapter == $Demo ) {
	$recipient = "communications@unamilodge.org";
	
} else {
	$subject = "CP/UE Chapter Selection *FAILURE*";
	$recipient = "zcross@unamilodge.org";
}\

	// Send mail.
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send chapter recipient mail. Please go back and try again. The the problem persists, send mail to zcross@unamilodge.org and cite this error.");
// END Send mail to relevant chapter mailbox

// Log Form Submission to DB

	// Set Up & Connect
	$host = "db147b.pair.com";
	$user_name = "unami_9_w";
	$pwd = "PUAYZd9c";
	$database_name = "unami_DevilsTeatable";

	$db_link = mysqli_connect($host, $user_name, $pwd, $database_name);

	// Ensure that unit number is an integer
	//$NomineeContactInfo_Unit = (int) $NomineeContactInfo_Unit;

	// Escape Reserved Charachters
	$Chapter_esc = mysqli_real_escape_string($db_link, $Chapter);
	$Unit_esc = mysqli_real_escape_string($db_link, $NomineeContactInfo_Unit);
	$ElectionData_esc = mysqli_real_escape_string($db_link, $Email_Body);

	// Set up Query
	$db_query = "INSERT INTO arc_AdultCandidateRecommendation (Year, Chapter, Unit, RecommendationData) VALUES ('" . $Year . "', '" . $Chapter_esc . "', '" . $Unit_esc . "', '" . $ElectionData_esc . "')";

	// Insert
	if (mysqli_query($db_link, $db_query)) {
		// Success! Don't kill script.
	} else {
		die("Fatal ERROR: Could not log Official UE Record Submission. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");
	}
	
	// Close DB COnnection
	mysqli_close($db_link);	

// Re-direct User to Success Page
    $url = '../cpue-adultsuccess';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  
?>

