function formValidator()
  {
 // Collects First Name
 var FirstName = document.forms["CreateUser"]["FirstName"].value;
 if ( FirstName == "" ) {
 	document.getElementById("FirstName").style.borderColor="red";
 	alert("First Name must be filled in. Please enter User First name");
 	return false;
 }
  
//Collects Last Name
 var LastName= document.forms["CreateUser"]["LastName"].value;
 if( LastName == "") {
 	document.getElementById("LastName").style.borderColor="red";
 	alert("Last Name must be filled in. Please enter User Last Name");
 	return false;
 }

// Collects User Name 
var UserName= document.forms["CreateUser"]["UserName"].value;
if ( UserName == ""){
	document.getElementById("UserName").style.borderColor="red";
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