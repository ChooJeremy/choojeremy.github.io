<?php
//From docs:
/*The second special case is the "Location:" header. Not only does it send this header back to the browser,
	but it also returns a REDIRECT (302) status code to the browser unless the 201 or a 3xx status code has already been set. */
//Redirect code: header("Location: http://www.example.com/");
	if(isset($_POST['txtName']))
	{
		$txt = $_POST['txtName']; //If txtName exists, get its value. If the text is empty, redirect them back. Otherwise, redirect correctly.
		if($txt == "") 
		{
			header("Location: butthurt");
		}
		else
		{
			header("Location: somewebpage");
		}
	}
	else if(isset($_POST['tAndCAccept']))
	{
		$accept = $_POST['tAndCAccept'];
		if($accept == "accept")
		{
			header("Location: securedatabase");
		}
		else 
		{
			header("Location: somewebpage");
		}
	}
	else if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == 'admin' && $password == 'ExtremelySecurePassword!@#$') 
		{
			header("Location: index2");
		}
		else
		{
			header("Location: securedatabase");
		}
	}
	else 
	{
		header("Location: index");
	}