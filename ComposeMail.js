function recipientValidator()
  {
// Collects User Name 
var recipent= document.forms["ComposeMail"]["recipent"].value;
if ( recipent == ""){
	document.getElementById("recipent").style.borderColor="red";
	alert("Please add recipent");
	return false;
}
return (true);
}