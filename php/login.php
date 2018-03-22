<?php
    session_start();
    #see if user is logged in as arts student and redirect to index
    if(isset($_POST["password"])&&($_POST["password"])=="passwordA")#note password used here is only an example
	{
		$_SESSION["Authenticated"]=1;
		#login as arts student with restricted access
		#run hitcounter	
		$count_my_page = ("hitcounter.txt");
		$hits = file($count_my_page);
		$hits[0] ++;
		$fp = fopen($count_my_page , "w");
		fputs($fp , "$hits[0]");
		fclose($fp);
		#redirect to home page
		header("Location: /BCT18miniboard/index.php");
	}
	#see if user is logged in as it student and redirect to index  
	else if(isset($_POST["password"])&&($_POST["password"])=="passwordB")#note password used here is only an example
	{
		$_SESSION["Authenticated"]=1;
		$_SESSION["AuthenticatedIT"]=1;
		#dual login as arts/it student with full access
		#run hitcounter		
		$count_my_page = ("hitcounter.txt");
		$hits = file($count_my_page);
		$hits[0] ++;
		$fp = fopen($count_my_page , "w");
		fputs($fp , "$hits[0]");
		fclose($fp);	
		#redirect to home page
		header("Location: /BCT18miniboard/index.php");
	}
	#recursive login redirect if password is wrong
	else
	{
		$_SESSION["Authenticated"]=0;
		header("Location: /BCT18miniboard/login.html");
	}
   
?>
