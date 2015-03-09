<?php
/*
 * Unami Lodge, One.
 * SafeguardedMaterialDownloads_Engine
 * ----------------------------------------------------
 * Password protects files on the website that can be downloaded remotely with the correct password
 * ----------------------------------------------------
 * |Version History|
 * |Development versions removed from history to save space.|
 *
 * 1.0
 * 4/28/13
 * ----------------------------------------------------
 * Questions?
 * David Gibbons - dgibbns@gmail.com
 * ----------------------------------------------------
 */

// Accepts the name of the file and password given from form via POST and assigns variables.
$file = Trim(stripslashes($_POST['file']));
$password = md5(Trim(stripslashes($_POST['password'])));

//Defines the level of access each file should have.
$OrdealFiles = array(
	"Pre-Ordeal Ceremony",
	"Ordeal Ceremony",
	"Ordeal Ceremony (1915)",
	"Broken Arrow Ceremony",
	"Four Winds Ceremony",
	"Awake My Friends",
	"Ceremonies Evaluator Training",	
	"Ceremony Performance Tips",	
	"Character Sketch for Allowat Sakima	",
	"Character Sketch for Allowat Sakima	",
	"Character Sketch for Kichkinet"	,
	"Character Sketch for Meteu"	,
	"Character Sketch for Nutiket",	
	"Four Basic Principles of the Ceremonies	",
	"Spirit of the Arrow Booklets (Ordeal)",						
	"Staging Induction Ceremonies",	
	"Secondary Ceremonial Roles"	,
	"Story of the Ceremonial Tribe",	
	"Symbolism in the Ceremonies",
	"Guide to Inductions (Ordeal)",
	"Guidelines for Assisting Scouts with Special Needs",	
	"Letter Announcing Unit Election	",
	"Letter to Parents of Ordeal Candidates",	
	"Unit Election Ceremony",	
	"Unit Election Rules and Procedures",	
	"Elangomat Manual",	
	"Elangomat Training",	
	"Field Operations Guide",	
	"Guide for Officers and Advisers",	
	"Guide to Running an Ordeal",	
	"Lenape to English Dictionary (Version 1)",	
	"Lenape to English Dictionary (Version 2)",	
	"Lenape to English Dictionary (Version 3)",
	);
$BrotherhoodFiles = array(
	"Brotherhood Ceremony",
	"Brotherhood Ceremony (1949)",
	"Brotherhood Ceremony (1993)",
	"Brotherhood Hike",
	"Spirit of the Arrow Booklets (Brotherhood)",
	"Guide to Inductions",
	"Guide to Inductions (Brotherhood)",
	);
$VigilFiles = array(
	"Vigil Ceremony",
	);

// Determines what the level of access should be for the file requested.
if (in_array($file, $OrdealFiles)) {
    $level = "Ordeal";
}
else if (in_array($file, $BrotherhoodFiles)) {
    $level = "Brotherhood";
}
else if (in_array($file, $VigilFiles)) {
    $level = "Vigil";
}
else {
	die (header("Location: ../safeguarded-material?error=dne"));
}

// Looks for the correct password given the level of access for the file.
switch ($level)
{
case "Ordeal":
	if ($password != '44ee32e6438b5e8a0d8032926baabd41') {
	die (header("Location: ../safeguarded-material?error=password"));};
break;

case "Brotherhood":
	if ($password != '9068be7f4cd65b4b3f4d82af20c6bdd5') {
	die (header("Location: ../safeguarded-material?error=password"));};
break;

case "Vigil":
	if ($password != 'b412b1156b556dd83852d447d59fa77f') {
	die (header("Location: ../safeguarded-material?error=password"));};
break;

default:
	die (header("Location: ../safeguarded-material?error=password"));
}

// Approximately One Second Delay to Prevent Script Abuse 
usleep(1025000);

//Finds and allows the user to download the file
$filename="/usr/www/users/unami/files/password_protected/$file.pdf";
header("Pragma: public");
header('Content-disposition: attachment; filename='.$file);
header("Content-type: ".mime_content_type($filename));
header('Content-Transfer-Encoding: binary');
ob_clean();
flush();
readfile($filename); 

?>
