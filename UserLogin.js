function loginValidator()
{
// Collects User Name 
var username= document.forms["CreateUser"]["username"].value;
if ( username == ""){
	document.getElementById("username").style.borderColor="red";
	alert("User Name must be filled in. Please enter A User Name.");
	return false;
}

// Collects Password and checks the format of the password.
var password= document.forms["CreateUser"]["password"].value;
var check = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,8}$/;
 if (( password == "") || (!check.test(password.value))) {
 	alert(" The format of user Password is incorrect or field is empty. Please enter a password that consist of a upper case letter, a lower case letter, a number and must be at least 8 digits long");
 	document.getElementById("password").style.borderColor="red";
 	return false;
 }
 return (true);
}