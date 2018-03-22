<?php
    session_start();
    #see if user is logged in as arts student and redirect to index
    if(isset($_POST["password"])&&($_POST["password"])=="*(check email)")
	{
		$_SESSION["Authenticated"]=1;
		
		#run hitcounter	
		$count_my_page = ("hitcounter.txt");
		$hits = file($count_my_page);
		$hits[0] ++;
		$fp = fopen($count_my_page , "w");
		fputs($fp , "$hits[0]");
		fclose($fp);

		header("Location: /BCT18miniboard/index.php");
	}
	#see if user is logged in as it student and redirect to index  
	else if(isset($_POST["password"])&&($_POST["password"])=="*(check email)")
	{
		$_SESSION["Authenticated"]=1;
		$_SESSION["AuthenticatedIT"]=1;
		
		#run hitcounter		
		$count_my_page = ("hitcounter.txt");
		$hits = file($count_my_page);
		$hits[0] ++;
		$fp = fopen($count_my_page , "w");
		fputs($fp , "$hits[0]");
		fclose($fp);	

		header("Location: /BCT18miniboard/index.php");
	}
	#recursive login if password is wrong
	else
	{
		$_SESSION["Authenticated"]=0;
		header("Location: /BCT18miniboard/login.html");
	}
   
?>