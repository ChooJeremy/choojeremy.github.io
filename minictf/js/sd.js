function logIn()
{
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(username == "admin" && password == "ExtremelySecurePassword!@#$")
	{
		alert("Welcome to your secure database, admin");
		return true;
	}
	else
	{
		alert("Incorrect username and/or password. Remember, if you are not a user of this system, please LEAVE IMMEDIATELY.");
		return false;
	}
}