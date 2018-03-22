<?php
   session_start();
   #see if user is logged in as arts student, redirect to login if not
   
	   if(!isset($_SESSION["Authenticated"])||($_SESSION["Authenticated"]!=1))
	   {
		  header("Location: /BCT18miniboard/login.html");
	   }		
?>