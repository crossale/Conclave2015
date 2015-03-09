<?php
/*************************************
 * Unami Lodge, One.                 *
 * Camp Promotion / Unit Election    *
 * Submission Form Processing Engine *
 *                                   *
 * Zach Cross - 10/2/12              *
 * me@zachcross.com                  *
 *************************************/

// *Parse Form Input*

// Chapter
$Chapter = Trim(stripslashes($_POST['Chapter']));

// Unit Election Status
$UnitElection_YesNo = Trim(stripslashes($_POST['UnitElection_YesNo']));
$UnitElection_NoReason = Trim(stripslashes($_POST['UnitElection_NoReason']));

// Election Team Leader
$ElectionTeamLeader_Name = Trim(stripslashes($_POST['ElectionTeamLeader_Name'])); 
$ElectionTeamLeader_Phone = Trim(stripslashes($_POST['ElectionTeamLeader_Phone']));
$ElectionTeamLeader_Email = Trim(stripslashes($_POST['ElectionTeamLeader_Email']));

// Unit Information
$UnitInformation_Troop = Trim(stripslashes($_POST['UnitInformation_Troop']));
$UnitInformation_ElectionDate = Trim(stripslashes($_POST['UnitInformation_ElectionDate']));

// Unit Leader Information
$UnitLeaderInformation_Name = Trim(stripslashes($_POST['UnitLeaderInformation_Name'])); 
$UnitLeaderInformation_Address = Trim(stripslashes($_POST['UnitLeaderInformation_Address']));
$UnitLeaderInformation_CityStateZip = Trim(stripslashes($_POST['UnitLeaderInformation_CityStateZip']));
$UnitLeaderInformation_Phone = Trim(stripslashes($_POST['UnitLeaderInformation_Phone']));
$UnitLeaderInformation_Email = Trim(stripslashes($_POST['UnitLeaderInformation_Email']));
$UnitLeaderInformation_Signature = Trim(stripslashes($_POST['UnitLeaderInformation_Signature']));

// Record Of Election
$RecordOfElection_Line1 = Trim(stripslashes($_POST['RecordOfElection_Line1'])); 
$RecordOfElection_Line2 = Trim(stripslashes($_POST['RecordOfElection_Line2']));
$RecordOfElection_Line3 = Trim(stripslashes($_POST['RecordOfElection_Line3']));
$RecordOfElection_Line4 = Trim(stripslashes($_POST['RecordOfElection_Line4']));
$RecordOfElection_Line5 = Trim(stripslashes($_POST['RecordOfElection_Line5']));
$RecordOfElection_Line6 = Trim(stripslashes($_POST['RecordOfElection_Line6']));
$RecordOfElection_Line7 = Trim(stripslashes($_POST['RecordOfElection_Line7']));
$RecordOfElection_CampPromotion = Trim(stripslashes($_POST['RecordOfElection_CampPromotion']));

// Election Results
$ElectionResults_Name_1 = Trim(stripslashes($_POST['ElectionResults_Name_1']));
$ElectionResults_Rank_1 = Trim(stripslashes($_POST['ElectionResults_Rank_1']));
$ElectionResults_AddressLn1_1 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_1']));
$ElectionResults_AddressLn2_1 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_1']));
$ElectionResults_AddressLnCity_1 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_1']));
$ElectionResults_AddressLnState_1 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_1']));
$ElectionResults_AddressLnZip_1 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_1']));
$ElectionResults_Phone_1 = Trim(stripslashes($_POST['ElectionResults_Phone_1']));
$ElectionResults_Email_1 = Trim(stripslashes($_POST['ElectionResults_Email_1']));
$ElectionResults_DOB_1 = Trim(stripslashes($_POST['ElectionResults_DOB_1']));

$ElectionResults_Name_2 = Trim(stripslashes($_POST['ElectionResults_Name_2']));
$ElectionResults_Rank_2 = Trim(stripslashes($_POST['ElectionResults_Rank_2']));
$ElectionResults_AddressLn1_2 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_2']));
$ElectionResults_AddressLn2_2 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_2']));
$ElectionResults_AddressLnCity_2 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_2']));
$ElectionResults_AddressLnState_2 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_2']));
$ElectionResults_AddressLnZip_2 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_2']));
$ElectionResults_Phone_2 = Trim(stripslashes($_POST['ElectionResults_Phone_2']));
$ElectionResults_Email_2 = Trim(stripslashes($_POST['ElectionResults_Email_2']));
$ElectionResults_DOB_2 = Trim(stripslashes($_POST['ElectionResults_DOB_2']));

$ElectionResults_Name_3 = Trim(stripslashes($_POST['ElectionResults_Name_3']));
$ElectionResults_Rank_3 = Trim(stripslashes($_POST['ElectionResults_Rank_3']));
$ElectionResults_AddressLn1_3 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_3']));
$ElectionResults_AddressLn2_3 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_3']));
$ElectionResults_AddressLnCity_3 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_3']));
$ElectionResults_AddressLnState_3 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_3']));
$ElectionResults_AddressLnZip_3 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_3']));
$ElectionResults_Phone_3 = Trim(stripslashes($_POST['ElectionResults_Phone_3']));
$ElectionResults_Email_3 = Trim(stripslashes($_POST['ElectionResults_Email_3']));
$ElectionResults_DOB_3 = Trim(stripslashes($_POST['ElectionResults_DOB_3']));

$ElectionResults_Name_4 = Trim(stripslashes($_POST['ElectionResults_Name_4']));
$ElectionResults_Rank_4 = Trim(stripslashes($_POST['ElectionResults_Rank_4']));
$ElectionResults_AddressLn1_4 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_4']));
$ElectionResults_AddressLn2_4 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_4']));
$ElectionResults_AddressLnCity_4 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_4']));
$ElectionResults_AddressLnState_4 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_4']));
$ElectionResults_AddressLnZip_4 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_4']));
$ElectionResults_Phone_4 = Trim(stripslashes($_POST['ElectionResults_Phone_4']));
$ElectionResults_Email_4 = Trim(stripslashes($_POST['ElectionResults_Email_4']));
$ElectionResults_DOB_4 = Trim(stripslashes($_POST['ElectionResults_DOB_4']));

$ElectionResults_Name_5 = Trim(stripslashes($_POST['ElectionResults_Name_5']));
$ElectionResults_Rank_5 = Trim(stripslashes($_POST['ElectionResults_Rank_5']));
$ElectionResults_AddressLn1_5 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_5']));
$ElectionResults_AddressLn2_5 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_5']));
$ElectionResults_AddressLnCity_5 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_5']));
$ElectionResults_AddressLnState_5 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_5']));
$ElectionResults_AddressLnZip_5 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_5']));
$ElectionResults_Phone_5 = Trim(stripslashes($_POST['ElectionResults_Phone_5']));
$ElectionResults_Email_5 = Trim(stripslashes($_POST['ElectionResults_Email_5']));
$ElectionResults_DOB_5 = Trim(stripslashes($_POST['ElectionResults_DOB_5']));

$ElectionResults_Name_6 = Trim(stripslashes($_POST['ElectionResults_Name_6']));
$ElectionResults_Rank_6 = Trim(stripslashes($_POST['ElectionResults_Rank_6']));
$ElectionResults_AddressLn1_6 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_6']));
$ElectionResults_AddressLn2_6 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_6']));
$ElectionResults_AddressLnCity_6 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_6']));
$ElectionResults_AddressLnState_6 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_6']));
$ElectionResults_AddressLnZip_6 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_6']));
$ElectionResults_Phone_6 = Trim(stripslashes($_POST['ElectionResults_Phone_6']));
$ElectionResults_Email_6 = Trim(stripslashes($_POST['ElectionResults_Email_6']));
$ElectionResults_DOB_6 = Trim(stripslashes($_POST['ElectionResults_DOB_6']));

$ElectionResults_Name_7 = Trim(stripslashes($_POST['ElectionResults_Name_7']));
$ElectionResults_Rank_7 = Trim(stripslashes($_POST['ElectionResults_Rank_7']));
$ElectionResults_AddressLn1_7 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_7']));
$ElectionResults_AddressLn2_7 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_7']));
$ElectionResults_AddressLnCity_7 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_7']));
$ElectionResults_AddressLnState_7 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_7']));
$ElectionResults_AddressLnZip_7 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_7']));
$ElectionResults_Phone_7 = Trim(stripslashes($_POST['ElectionResults_Phone_7']));
$ElectionResults_Email_7 = Trim(stripslashes($_POST['ElectionResults_Email_7']));
$ElectionResults_DOB_7 = Trim(stripslashes($_POST['ElectionResults_DOB_7']));

$ElectionResults_Name_8 = Trim(stripslashes($_POST['ElectionResults_Name_8']));
$ElectionResults_Rank_8 = Trim(stripslashes($_POST['ElectionResults_Rank_8']));
$ElectionResults_AddressLn1_8 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_8']));
$ElectionResults_AddressLn2_8 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_8']));
$ElectionResults_AddressLnCity_8 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_8']));
$ElectionResults_AddressLnState_8 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_8']));
$ElectionResults_AddressLnZip_8 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_8']));
$ElectionResults_Phone_8 = Trim(stripslashes($_POST['ElectionResults_Phone_8']));
$ElectionResults_Email_8 = Trim(stripslashes($_POST['ElectionResults_Email_8']));
$ElectionResults_DOB_8 = Trim(stripslashes($_POST['ElectionResults_DOB_8']));

$ElectionResults_Name_9 = Trim(stripslashes($_POST['ElectionResults_Name_9']));
$ElectionResults_Rank_9 = Trim(stripslashes($_POST['ElectionResults_Rank_9']));
$ElectionResults_AddressLn1_9 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_9']));
$ElectionResults_AddressLn2_9 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_9']));
$ElectionResults_AddressLnCity_9 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_9']));
$ElectionResults_AddressLnState_9 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_9']));
$ElectionResults_AddressLnZip_9 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_9']));
$ElectionResults_Phone_9 = Trim(stripslashes($_POST['ElectionResults_Phone_9']));
$ElectionResults_Email_9 = Trim(stripslashes($_POST['ElectionResults_Email_9']));
$ElectionResults_DOB_9 = Trim(stripslashes($_POST['ElectionResults_DOB_9']));

$ElectionResults_Name_10 = Trim(stripslashes($_POST['ElectionResults_Name_10']));
$ElectionResults_Rank_10 = Trim(stripslashes($_POST['ElectionResults_Rank_10']));
$ElectionResults_AddressLn1_10 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_10']));
$ElectionResults_AddressLn2_10 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_10']));
$ElectionResults_AddressLnCity_10 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_10']));
$ElectionResults_AddressLnState_10 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_10']));
$ElectionResults_AddressLnZip_10 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_10']));
$ElectionResults_Phone_10 = Trim(stripslashes($_POST['ElectionResults_Phone_10']));
$ElectionResults_Email_10 = Trim(stripslashes($_POST['ElectionResults_Email_10']));
$ElectionResults_DOB_10 = Trim(stripslashes($_POST['ElectionResults_DOB_10']));

$ElectionResults_Name_11 = Trim(stripslashes($_POST['ElectionResults_Name_11']));
$ElectionResults_Rank_11 = Trim(stripslashes($_POST['ElectionResults_Rank_11']));
$ElectionResults_AddressLn1_11 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_11']));
$ElectionResults_AddressLn2_11 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_11']));
$ElectionResults_AddressLnCity_11 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_11']));
$ElectionResults_AddressLnState_11 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_11']));
$ElectionResults_AddressLnZip_11 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_11']));
$ElectionResults_Phone_11 = Trim(stripslashes($_POST['ElectionResults_Phone_11']));
$ElectionResults_Email_11 = Trim(stripslashes($_POST['ElectionResults_Email_11']));
$ElectionResults_DOB_11 = Trim(stripslashes($_POST['ElectionResults_DOB_11']));

$ElectionResults_Name_12 = Trim(stripslashes($_POST['ElectionResults_Name_12']));
$ElectionResults_Rank_12 = Trim(stripslashes($_POST['ElectionResults_Rank_12']));
$ElectionResults_AddressLn1_12 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_12']));
$ElectionResults_AddressLn2_12 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_12']));
$ElectionResults_AddressLnCity_12 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_12']));
$ElectionResults_AddressLnState_12 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_12']));
$ElectionResults_AddressLnZip_12 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_12']));
$ElectionResults_Phone_12 = Trim(stripslashes($_POST['ElectionResults_Phone_12']));
$ElectionResults_Email_12 = Trim(stripslashes($_POST['ElectionResults_Email_12']));
$ElectionResults_DOB_12 = Trim(stripslashes($_POST['ElectionResults_DOB_12']));

$ElectionResults_Name_13 = Trim(stripslashes($_POST['ElectionResults_Name_13']));
$ElectionResults_Rank_13 = Trim(stripslashes($_POST['ElectionResults_Rank_13']));
$ElectionResults_AddressLn1_13 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_13']));
$ElectionResults_AddressLn2_13 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_13']));
$ElectionResults_AddressLnCity_13 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_13']));
$ElectionResults_AddressLnState_13 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_13']));
$ElectionResults_AddressLnZip_13 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_13']));
$ElectionResults_Phone_13 = Trim(stripslashes($_POST['ElectionResults_Phone_13']));
$ElectionResults_Email_13 = Trim(stripslashes($_POST['ElectionResults_Email_13']));
$ElectionResults_DOB_13 = Trim(stripslashes($_POST['ElectionResults_DOB_13']));

$ElectionResults_Name_14 = Trim(stripslashes($_POST['ElectionResults_Name_14']));
$ElectionResults_Rank_14 = Trim(stripslashes($_POST['ElectionResults_Rank_14']));
$ElectionResults_AddressLn1_14 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_14']));
$ElectionResults_AddressLn2_14 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_14']));
$ElectionResults_AddressLnCity_14 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_14']));
$ElectionResults_AddressLnState_14 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_14']));
$ElectionResults_AddressLnZip_14 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_14']));
$ElectionResults_Phone_14 = Trim(stripslashes($_POST['ElectionResults_Phone_14']));
$ElectionResults_Email_14 = Trim(stripslashes($_POST['ElectionResults_Email_14']));
$ElectionResults_DOB_14 = Trim(stripslashes($_POST['ElectionResults_DOB_14']));

$ElectionResults_Name_15 = Trim(stripslashes($_POST['ElectionResults_Name_15']));
$ElectionResults_Rank_15 = Trim(stripslashes($_POST['ElectionResults_Rank_15']));
$ElectionResults_AddressLn1_15 = Trim(stripslashes($_POST['ElectionResults_AddressLn1_15']));
$ElectionResults_AddressLn2_15 = Trim(stripslashes($_POST['ElectionResults_AddressLn2_15']));
$ElectionResults_AddressLnCity_15 = Trim(stripslashes($_POST['ElectionResults_AddressLnCity_15']));
$ElectionResults_AddressLnState_15 = Trim(stripslashes($_POST['ElectionResults_Address_LnSate_15']));
$ElectionResults_AddressLnZip_15 = Trim(stripslashes($_POST['ElectionResults_Address_LnZip_15']));
$ElectionResults_Phone_15 = Trim(stripslashes($_POST['ElectionResults_Phone_15']));
$ElectionResults_Email_15 = Trim(stripslashes($_POST['ElectionResults_Email_15']));
$ElectionResults_DOB_15 = Trim(stripslashes($_POST['ElectionResults_DOB_15']));

$CPUE_Notes = Trim(stripslashes($_POST['CPUE_Notes']));

// END *Parse Form Input*

// Set Timestamp
$TimeStamp = date('l jS \of F Y h:i:s A');

// Get Client IP
$IP = $_SERVER['REMOTE_ADDR'];

// Form Body
$Email_Body="	
		***********************************************
		Chapter: $Chapter
		Was a Unit Election performed? $UnitElection_YesNo
		If no, reason: $UnitElection_NoReason
		-----------------------------------------------
		Election Team Information:
		Election Team Leader: $ElectionTeamLeader_Name
		Phone: $ElectionTeamLeader_Phone
		Email: $ElectionTeamLeader_Email
		-----------------------------------------------
		Unit Information:
		Troop: $UnitInformation_Troop
		Election Date: $UnitInformation_ElectionDate
		-----------------------------------------------
		Unit Leader Information:
		Unit Leader: $UnitLeaderInformation_Name
		Address: $UnitLeaderInformation_Address
		City / State / Zip: $UnitLeaderInformation_CityStateZip
		Phone: $UnitLeaderInformation_Phone
		Email: $UnitLeaderInformation_Email
		Unit Leader Signature: $UnitLeaderInformation_Signature
		-----------------------------------------------
		Record Of Election:
		1 -   		     	   $RecordOfElection_Line1
		2 -                    $RecordOfElection_Line2
		3 -                    $RecordOfElection_Line3
		4 -                    $RecordOfElection_Line4
		5 -                    $RecordOfElection_Line5
		6 -                    $RecordOfElection_Line6
		7 -                    $RecordOfElection_Line7
		Camp Promotion? (Y/N): $RecordOfElection_CampPromotion
		-----------------------------------------------
		Election Results:
		(Name, Rank, Address1, Address2, City, State, Zip, Phone, DOB)
		1 - $ElectionResults_Name_1, $ElectionResults_Rank_1, $ElectionResults_AddressLn1_1, $ElectionResults_AddressLn2_1, $ElectionResults_AddressLnCity_1, $ElectionResults_AddressLnState_1, $ElectionResults_AddressLnZip_1, $ElectionResults_Phone_1, $ElectionResults_Email_1, $ElectionResults_DOB_1
		2 - $ElectionResults_Name_2, $ElectionResults_Rank_2, $ElectionResults_AddressLn1_2, $ElectionResults_AddressLn2_2, $ElectionResults_AddressLnCity_2, $ElectionResults_AddressLnState_2, $ElectionResults_AddressLnZip_2, $ElectionResults_Phone_2, $ElectionResults_Email_2, $ElectionResults_DOB_2
		3 - $ElectionResults_Name_3, $ElectionResults_Rank_3, $ElectionResults_AddressLn1_3, $ElectionResults_AddressLn2_3, $ElectionResults_AddressLnCity_3, $ElectionResults_AddressLnState_3, $ElectionResults_AddressLnZip_3, $ElectionResults_Phone_3, $ElectionResults_Email_3, $ElectionResults_DOB_3
		4 - $ElectionResults_Name_4, $ElectionResults_Rank_4, $ElectionResults_AddressLn1_4, $ElectionResults_AddressLn2_4, $ElectionResults_AddressLnCity_4, $ElectionResults_AddressLnState_4, $ElectionResults_AddressLnZip_4, $ElectionResults_Phone_4, $ElectionResults_Email_4, $ElectionResults_DOB_4
		5 - $ElectionResults_Name_5, $ElectionResults_Rank_5, $ElectionResults_AddressLn1_5, $ElectionResults_AddressLn2_5, $ElectionResults_AddressLnCity_5, $ElectionResults_AddressLnState_5, $ElectionResults_AddressLnZip_5, $ElectionResults_Phone_5, $ElectionResults_Email_5, $ElectionResults_DOB_5
		6 - $ElectionResults_Name_6, $ElectionResults_Rank_6, $ElectionResults_AddressLn1_6, $ElectionResults_AddressLn2_6, $ElectionResults_AddressLnCity_6, $ElectionResults_AddressLnState_6, $ElectionResults_AddressLnZip_6, $ElectionResults_Phone_6, $ElectionResults_Email_6, $ElectionResults_DOB_6
		7 - $ElectionResults_Name_7, $ElectionResults_Rank_7, $ElectionResults_AddressLn1_7, $ElectionResults_AddressLn2_7, $ElectionResults_AddressLnCity_7, $ElectionResults_AddressLnState_7, $ElectionResults_AddressLnZip_7, $ElectionResults_Phone_7, $ElectionResults_Email_7, $ElectionResults_DOB_7
		8 - $ElectionResults_Name_8, $ElectionResults_Rank_8, $ElectionResults_AddressLn1_8, $ElectionResults_AddressLn2_8, $ElectionResults_AddressLnCity_8, $ElectionResults_AddressLnState_8, $ElectionResults_AddressLnZip_8, $ElectionResults_Phone_8, $ElectionResults_Email_8, $ElectionResults_DOB_8
		9 - $ElectionResults_Name_9, $ElectionResults_Rank_9, $ElectionResults_AddressLn1_9, $ElectionResults_AddressLn2_9, $ElectionResults_AddressLnCity_9, $ElectionResults_AddressLnState_9, $ElectionResults_AddressLnZip_9, $ElectionResults_Phone_9, $ElectionResults_Email_9, $ElectionResults_DOB_9
		10 - $ElectionResults_Name_10, $ElectionResults_Rank_10, $ElectionResults_AddressLn1_10, $ElectionResults_AddressLn2_10, $ElectionResults_AddressLnCity_10, $ElectionResults_AddressLnState_10, $ElectionResults_AddressLnZip_10, $ElectionResults_Phone_10, $ElectionResults_Email_10, $ElectionResults_DOB_10
		11 - $ElectionResults_Name_11, $ElectionResults_Rank_11, $ElectionResults_AddressLn1_11, $ElectionResults_AddressLn2_11, $ElectionResults_AddressLnCity_11, $ElectionResults_AddressLnState_11, $ElectionResults_AddressLnZip_11, $ElectionResults_Phone_11, $ElectionResults_Email_11, $ElectionResults_DOB_11
		12 - $ElectionResults_Name_12, $ElectionResults_Rank_12, $ElectionResults_AddressLn1_12, $ElectionResults_AddressLn2_12, $ElectionResults_AddressLnCity_12, $ElectionResults_AddressLnState_12, $ElectionResults_AddressLnZip_12, $ElectionResults_Phone_12, $ElectionResults_Email_12, $ElectionResults_DOB_12
		13 - $ElectionResults_Name_13, $ElectionResults_Rank_13, $ElectionResults_AddressLn1_13, $ElectionResults_AddressLn2_13, $ElectionResults_AddressLnCity_13, $ElectionResults_AddressLnState_13, $ElectionResults_AddressLnZip_13, $ElectionResults_Phone_13, $ElectionResults_Email_13, $ElectionResults_DOB_13
		14 - $ElectionResults_Name_14, $ElectionResults_Rank_14, $ElectionResults_AddressLn1_14, $ElectionResults_AddressLn2_14, $ElectionResults_AddressLnCity_14, $ElectionResults_AddressLnState_14, $ElectionResults_AddressLnZip_14, $ElectionResults_Phone_14, $ElectionResults_Email_14, $ElectionResults_DOB_14
		15 - $ElectionResults_Name_15, $ElectionResults_Rank_15, $ElectionResults_AddressLn1_15, $ElectionResults_AddressLn2_15, $ElectionResults_AddressLnCity_15, $ElectionResults_AddressLnState_15, $ElectionResults_AddressLnZip_15, $ElectionResults_Phone_15, $ElectionResults_Email_15, $ElectionResults_DOB_15
		-----------------------------------------------
		Additional Notes For CP/UE Chair: $CPUE_Notes
		
		-----------------------------------------------
		Please send mail to zcross@unamilodge.org with any questions or troubles regarding this submission.
		
		Submission Originated From: $IP at $TimeStamp
		***********************************************
		
		
		";
// END Form Body

// Send Mail to Universal Recipients
$recipient = "cpue@unamilodge.org";
$subject = "CP/UE Result Form Submission";
$mailheader = "From: zcross@unamilodge.org";
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send universal recipient mail. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");

$recipient = "communications@unamilodge.org";
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send universal recipient mail. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");
// END Send Mail to Universal Recipients

// Store Troop Number For Chapters Page
$myFile = "../files/cpue/$Chapter.txt";
$fh = fopen($myFile, 'a') or die("Fatal ERROR: Can't open Chapters Page Troop Number file. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");
$stringData = " $UnitInformation_Troop ";
fwrite($fh, $stringData);
fclose($fh);
// END Store Troop Number

// Store Local Backup Copy of Submission
$myFile = "../files/cpue/CPUE_Submissions.txt";
$fh = fopen($myFile, 'a') or die("Fatal ERROR: Can't open local submission backup file. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");
fwrite($fh, $Email_Body);
fclose($fh);
// END Store Local Backup Copy

// Store MailMerge Data
$myFile = "../files/cpue/CPUE_MailMergeData.txt";
$fh = fopen($myFile, 'a') or die("Fatal ERROR: Can't open local Mail Merge Data file. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");

$stringData = "
		Submission Recorded: $TimeStamp
		Unit $UnitInformation_Troop $Chapter Chapter Election Results:
		(SubmissionLineNumber, Name, Rank, Address1, Address2, City, State, Zip, Phone, DOB)
		1, $ElectionResults_Name_1, $ElectionResults_Rank_1, $ElectionResults_AddressLn1_1, $ElectionResults_AddressLn2_1, $ElectionResults_AddressLnCity_1, $ElectionResults_AddressLnState_1, $ElectionResults_AddressLnZip_1, $ElectionResults_Phone_1, $ElectionResults_Email_1, $ElectionResults_DOB_1
		2, $ElectionResults_Name_2, $ElectionResults_Rank_2, $ElectionResults_AddressLn1_2, $ElectionResults_AddressLn2_2, $ElectionResults_AddressLnCity_2, $ElectionResults_AddressLnState_2, $ElectionResults_AddressLnZip_2, $ElectionResults_Phone_2, $ElectionResults_Email_2, $ElectionResults_DOB_2
		3, $ElectionResults_Name_3, $ElectionResults_Rank_3, $ElectionResults_AddressLn1_3, $ElectionResults_AddressLn2_3, $ElectionResults_AddressLnCity_3, $ElectionResults_AddressLnState_3, $ElectionResults_AddressLnZip_3, $ElectionResults_Phone_3, $ElectionResults_Email_3, $ElectionResults_DOB_3
		4, $ElectionResults_Name_4, $ElectionResults_Rank_4, $ElectionResults_AddressLn1_4, $ElectionResults_AddressLn2_4, $ElectionResults_AddressLnCity_4, $ElectionResults_AddressLnState_4, $ElectionResults_AddressLnZip_4, $ElectionResults_Phone_4, $ElectionResults_Email_4, $ElectionResults_DOB_4
		5, $ElectionResults_Name_5, $ElectionResults_Rank_5, $ElectionResults_AddressLn1_5, $ElectionResults_AddressLn2_5, $ElectionResults_AddressLnCity_5, $ElectionResults_AddressLnState_5, $ElectionResults_AddressLnZip_5, $ElectionResults_Phone_5, $ElectionResults_Email_5, $ElectionResults_DOB_5
		6, $ElectionResults_Name_6, $ElectionResults_Rank_6, $ElectionResults_AddressLn1_6, $ElectionResults_AddressLn2_6, $ElectionResults_AddressLnCity_6, $ElectionResults_AddressLnState_6, $ElectionResults_AddressLnZip_6, $ElectionResults_Phone_6, $ElectionResults_Email_6, $ElectionResults_DOB_6
		7, $ElectionResults_Name_7, $ElectionResults_Rank_7, $ElectionResults_AddressLn1_7, $ElectionResults_AddressLn2_7, $ElectionResults_AddressLnCity_7, $ElectionResults_AddressLnState_7, $ElectionResults_AddressLnZip_7, $ElectionResults_Phone_7, $ElectionResults_Email_7, $ElectionResults_DOB_7
		8, $ElectionResults_Name_8, $ElectionResults_Rank_8, $ElectionResults_AddressLn1_8, $ElectionResults_AddressLn2_8, $ElectionResults_AddressLnCity_8, $ElectionResults_AddressLnState_8, $ElectionResults_AddressLnZip_8, $ElectionResults_Phone_8, $ElectionResults_Email_8, $ElectionResults_DOB_8
		9, $ElectionResults_Name_9, $ElectionResults_Rank_9, $ElectionResults_AddressLn1_9, $ElectionResults_AddressLn2_9, $ElectionResults_AddressLnCity_9, $ElectionResults_AddressLnState_9, $ElectionResults_AddressLnZip_9, $ElectionResults_Phone_9, $ElectionResults_Email_9, $ElectionResults_DOB_9
		10, $ElectionResults_Name_10, $ElectionResults_Rank_10, $ElectionResults_AddressLn1_10, $ElectionResults_AddressLn2_10, $ElectionResults_AddressLnCity_10, $ElectionResults_AddressLnState_10, $ElectionResults_AddressLnZip_10, $ElectionResults_Phone_10, $ElectionResults_Email_10, $ElectionResults_DOB_10
		11, $ElectionResults_Name_11, $ElectionResults_Rank_11, $ElectionResults_AddressLn1_11, $ElectionResults_AddressLn2_11, $ElectionResults_AddressLnCity_11, $ElectionResults_AddressLnState_11, $ElectionResults_AddressLnZip_11, $ElectionResults_Phone_11, $ElectionResults_Email_11, $ElectionResults_DOB_11
		12, $ElectionResults_Name_12, $ElectionResults_Rank_12, $ElectionResults_AddressLn1_12, $ElectionResults_AddressLn2_12, $ElectionResults_AddressLnCity_12, $ElectionResults_AddressLnState_12, $ElectionResults_AddressLnZip_12, $ElectionResults_Phone_12, $ElectionResults_Email_12, $ElectionResults_DOB_12
		13, $ElectionResults_Name_13, $ElectionResults_Rank_13, $ElectionResults_AddressLn1_13, $ElectionResults_AddressLn2_13, $ElectionResults_AddressLnCity_13, $ElectionResults_AddressLnState_13, $ElectionResults_AddressLnZip_13, $ElectionResults_Phone_13, $ElectionResults_Email_13, $ElectionResults_DOB_13
		14, $ElectionResults_Name_14, $ElectionResults_Rank_14, $ElectionResults_AddressLn1_14, $ElectionResults_AddressLn2_14, $ElectionResults_AddressLnCity_14, $ElectionResults_AddressLnState_14, $ElectionResults_AddressLnZip_14, $ElectionResults_Phone_14, $ElectionResults_Email_14, $ElectionResults_DOB_14
		15, $ElectionResults_Name_15, $ElectionResults_Rank_15, $ElectionResults_AddressLn1_15, $ElectionResults_AddressLn2_15, $ElectionResults_AddressLnCity_15, $ElectionResults_AddressLnState_15, $ElectionResults_AddressLnZip_15, $ElectionResults_Phone_15, $ElectionResults_Email_15, $ElectionResults_DOB_15
		END Unit $UnitInformation_Troop $Chapter Chapter Election Results
		
		";
		
fwrite($fh, $stringData);
fclose($fh);
// END Store MailMerge Data

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
$subject = "$Chapter CP/UE Result Form Submission";
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
	$recipient = "Demo@unamilodge.org";
	
} else {
	$subject = "CP/UE Chapter Selection Failure";
	$recipient = "unami_cpue_failure@crossfireproductions.org";
}

	// Send mail.
mail($recipient, $subject, $Email_Body, $mailheader) or die("Fatal ERROR: Could not send chapter recipient mail. Please go back and try again. If the problem persists, send mail to zcross@unamilodge.org and cite this error.");
// END Send mail to relevant chapter mailbox

// Re-direct User to Success Page
    $url = '../cpue-youthsuccess';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  
?>
