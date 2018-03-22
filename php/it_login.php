<?php
   session_start();
   #see if user is logged in as it student, redirect to login if arts student
   
	   if(!isset($_SESSION["AuthenticatedIT"])||($_SESSION["AuthenticatedIT"]!=1))
	   {
		  header("Location: /BCT18miniboard/login.html");
	   }		
?>