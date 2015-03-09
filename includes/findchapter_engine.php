<?php
/*
 * Unami Lodge, One.
 * FindChapter_Engine
 * ----------------------------------------------------
 * Determines a user's chapter based on thier zipcode / zipcode.
 * ----------------------------------------------------
 * |Version History|
 * |Development versions removed from history to save space.|
 *
 * 1.0
 * 4/26/11
 *
 * 1.1 - Roosevelt Chapter Update
 * 7/23/11
 *
 * 1.2 - Maintnence & Cleanup
 * 10/04/11
 *
 * 1.3 - Updated for compliance with site re-code.
 * 12/27/12
 * ----------------------------------------------------
 * Questions?
 * Zach Cross - zach@crossfireproductions.org
 * ----------------------------------------------------
 */
 

// zipcode / zipcode entered by User (HTML Form POST)
$zipcode = Trim(stripslashes($_POST['zipcode']));

// Arrays containing the each Chapter's Zip Codes.
$BP = array(19002, 19025, 19031, 19034, 19075, 19422, 19436, 19437, 19444, 19458, 19462, 19477, 19482);
$CG = array(19018, 19023, 19026, 19029, 19033, 19036, 19043, 19050, 19064, 19074, 19076, 19078, 19079, 19081, 19082, 19084);
$CS = array(19003, 19004, 19008, 19010, 19035, 19041, 19066, 19073, 19082, 19085, 19088, 19096);
$CN = array(18041, 18054, 18070, 18073, 18076, 18084, 19052, 19435, 19464, 19472, 19565);
$RO = array(19125, 19134, 19135, 19136, 19137, 19154, 19115, 19116);
$GN = array(18915, 18924, 18936, 18957, 18964, 18969, 19438, 19440, 19443, 19446, 19454, 19486);
$LA = array(19005, 19403, 19405, 19406, 19407, 19408, 19409, 19426, 19431, 19456, 19468, 19473, 19474, 19478, 19479, 9481, 19490, 19492);
$MI = array(19014, 19415, 19039, 19061, 19063, 19086, 19342, 19373);
$NO = array(19118, 19119, 19120, 19126, 19127, 19128, 19129, 19138, 19140, 19141, 19144);
$TR = array(19101, 19102, 19103, 19104, 19106, 19110, 19112, 19121, 19123, 19130, 19131, 19132, 19139, 19142, 19143, 19145, 19146, 19147, 19148, 19151, 19153);
$WA = array(19001, 19006, 19012, 19040, 19044, 19046, 19090, 19095);

//Arrays of Shared Zip Codes.
$CG_MI = array(19013);
$BP_WA = array(19038);
$CS_LA = array(19072);
$CG_CS = array(19087);
$FR_WA = array(19111);
$CG_TR = array(19113);
$RO_WA = array(19114);
$NO_WA = array(19117);
$RO_TR = array(19122, 19133);

$CS_NO = array(19150);
$LA_MI = array(19331);
$BP_LA = array(19401, 19428);
$CG_LA = array(19453);


// If statements search arrays to determine user's chapter and refirect to appropriate chapter page.
if 	(in_array($zipcode, $BP)) {
	// Print re-direct to appropriate Chapter Page.
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/BadenPowell\">";

} elseif (in_array($zipcode, $CG)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Conestoga\">";

} elseif (in_array($zipcode, $CS)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Constellation\">";

} elseif (in_array($zipcode, $CN)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Continental\">";

} elseif (in_array($zipcode, $RO)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Roosevelt\">";

} elseif (in_array($zipcode, $RO)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Roosevelt\">";

} elseif (in_array($zipcode, $GN)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/GeneralNash\">";

} elseif (in_array($zipcode, $LA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Lafayette\">";

} elseif (in_array($zipcode, $MI)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Minquas\">";

} elseif (in_array($zipcode, $NO)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Northern\">";

} elseif (in_array($zipcode, $TR)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Triune\">";

} elseif (in_array($zipcode, $WA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapter/Washington\">";

// The re-direct URLs of the shared zip codes contain the possible Chapters as well as the zip code entered.  This is then parsed by _GET on the chapters_multichapterzip page - thus eliminating the need for individual pages.
} elseif (in_array($zipcode, $CG_MI)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Conestoga&ChapterB=Minquas&ChapterAurl=chapter/Conestoga&ChapterBurl=chapter/Minquas\">";

} elseif (in_array($zipcode, $BP_WA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Baden Powell&ChapterB=Washington&ChapterAurl=chapter/BadenPowell&ChapterBurl=chapter/Washington\">";

} elseif (in_array($zipcode, $CS_LA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Constellation&ChapterB=Lafayette&ChapterAurl=chapter/Constellation&ChapterBurl=chapter/Lafayette\">";

} elseif (in_array($zipcode, $CG_CS)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Conestoga&ChapterB=Constellation&ChapterAurl=chapter/Conestoga&ChapterBurl=chapter/Constellation\">";

} elseif (in_array($zipcode, $FR_WA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Roosevelt&ChapterB=Washington&ChapterAurl=chapter/Roosevelt&ChapterBurl=chapter/Washington\">";

} elseif (in_array($zipcode, $CG_TR)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Conestoga&ChapterB=Triune&ChapterAurl=chapter/Conestoga&ChapterBurl=chapter/Triune\">";

} elseif (in_array($zipcode, $RO_WA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Roosevelt&ChapterB=Washington&ChapterAurl=chapter/Roosevelt&ChapterBurl=chapter/Washington\">";

} elseif (in_array($zipcode, $NO_WA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Northern&ChapterB=Washington&ChapterAurl=chapter/Northern&ChapterBurl=chapter/Washington\">";

} elseif (in_array($zipcode, $RO_TR)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Roosevelt&ChapterB=Triune&ChapterAurl=chapter/Roosevelt&ChapterBurl=chapter/Triune\">";

} elseif (in_array($zipcode, $CS_NO)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Constellation&ChapterB=Northern&ChapterAurl=chapter/Constellation&ChapterBurl=chapter/Northern\">";

} elseif (in_array($zipcode, $LA_MI)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Lafayette&ChapterB=Minquas&ChapterAurl=chapter/Lafayette&ChapterBurl=chapter/Minquas\">";

} elseif (in_array($zipcode, $BP_LA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Baden Powell&ChapterB=Lafayette&ChapterAurl=chapter/BadenPowell&ChapterBurl=chapter/Lafayette\">";

} elseif (in_array($zipcode, $CG_LA)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-MultiChapterZIP.php?zip=$zipcode&ChapterA=Conestoga&ChapterB=Lafayette&ChapterAurl=chapter/Conestoga&ChapterBurl=chapter/Lafayette\">";

} else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../chapters-FindChapterError.php?zip=$zipcode\">";
}

?>
