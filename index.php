<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/custom.css">
    <style>
a:link, a:visited {
	color: black;
    padding: 10px 5px;
    display: inline-block;
}

a:hover, a:active {
	color: white;
}

body{
	background-color: cadetblue;
}
</style>
</head>
<body>
<?php require 'php/arts_login.php';?><!-- call login check on page load to verify authentication -->

<table style="background-color:cadetblue" class="table_container" border="0">

	<table class="table_nav" border="0">
		<tr>
		<td><a class="link" href="index.php">|Home|</a><a class="link" href="maths.php">|Maths|</a><a class="link" href="physics.php">|Physics|</a><a class="link" href="algorithms.php">|Algorithms & Information Systems|</a><a class="link" href="compsys.php">|Computing Systems|</a><a class="link" href="nextgen.php">|Next Generation Technologies|</a><a class="link" href="profskills.php">|Professional Skills|</a><a class="link" href="programming.php">|Programming|</a><a class="link" href="links.php">|College Links|</a><a class="link" href="contact.php">|Contact|</a></td>
		</tr>
	</table>

	<table class="table_body" border="0">
		<tr>
		<br>
		<td><p class="welcome">Welcome to the BCT 2018 miniboard.</p><br>
		<img class="it_boy" src="images/it_boy.png"></img><br>
		<br>
		Here you can download an organised collection of our notes for the year.<br>
		The notes are organised by the order they were covered and named by topic.<br>
		(Notes collected and uploaded as of 23/4/18, for notes provided after Easter Holidays visit Blackboard and add to your folders)<br>
		The site is also host to links such as college resources and helpful tools as they relate to the subjects.<br>
		<br>
		<br>
		We will hopefully be updating the miniboard with tools and features as they are suggested or presented to us.<br>
		If you would like to contribute to Miniboard, please send us an email and visit the Github <a href="https://github.com/stephenmcgov/bct18miniboard" target ="blank">link.</a><br>
		We would like to take this opportunity to thank all involved for their support and feedback during development.<br>
		If you would like to get in touch, make a suggestion or report a problem, please email us at BCT18miniboard@gmail.com.<br>
		<br>
		<br>
		Due to concerns over plagiarism, this site will NOT be host to assignments and solutions. For access to these, please refer to Blackboard itself or contact your lecturer.<br>
		In the case of subjects such as Maths and Physiscs, please attend SUMS in Aras De Brun for help with homework and previous material. Their link is on the Maths page.<br>
		<br>
		<br>
		</td>
		</tr>
	</table>
	<p class="hit">Visitor Logins: <?php include "php/hitcounter.php";?><br>(Counting using PHP to file write on login, no user data is gathered)</p><br>
	<p class="disclaimer"><u>NOTICE</u></p>
		<p class="disclaimer">
		This site will be closed upon completion of exams.<br>
		All hosted content is owned by its creator as copyright applies.<br>
		Hosted content is NOT to be redistributed and is for revision only.<br>
		In the case that content is found to be misused or rehosted, this site will close IMMEDIATELY and without notice.<br>
		Miniboard is hosted on a voluntary, non-profit basis for students in coordination with lecturers, and always will be.
		</p>
</table>
</body>
</html>
