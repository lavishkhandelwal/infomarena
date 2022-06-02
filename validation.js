// JavaScript Document
function valid()
{
	var c=/^[a-zA-Z]+$/;
	var n=/^[0-9]+$/;
	var x=document.form.email.value;
	var atpos=x.indexOf("@");
	var dotpos=x.indexOf(".");
	if(document.form.fname.value=="")
	{
		alert("Please Enter First Name");
		document.form.fname.focus();
		return false;
	}
	else
	{
		if(document.form.fname.value.search(c)==-1)
		{
			alert("Please Enter Valid Characters in First Name");
			document.form.fname.focus();
			return false;
		}
	}
	if(document.form.lname.value=="")
	{
		alert("Please Enter Last Name");
		document.form.lname.focus();
		return false;
	}
	else
	{
		if(document.form.lname.value.search(c)==-1)
		{
			alert("Please Enter Valid Characters in Last Name");
			document.form.lname.focus();
			return false;
		}
	}
	if(x=="")
	{
		alert("Please Enter Email Address");
		document.form.email.focus();
		return false;
	}
	else
	{
		if(atpos<1|| dotpos<atpos+2 || dotpos+2>x.length)
		{
			alert("Enter Valid Email Address");
			document.form.email.focus();
			return false;
		}
	}
	if(document.form.password.value=="")
	{
		alert("Please Enter Password");
		document.form.password.focus();
		return false;
	}
	else
	{
		if(document.form.password.value.length<8)
		{
			alert("Password Must Contain Atleast 8 characters");
			document.form.password.focus();
			return false;
		}
	}
	if(document.form.phone.value=="")
	{
		alert("Please Enter Phone Number");
		document.form.phone.focus();
		return false;
	}
	else{
		if(document.form.phone.value.search(n)==-1){
			alert("Please Enter Valid Characters in Phone");
			document.form.phone.focus();
			return false;
		}
	}
	if(document.form.phone.value.length < 10){
    		 alert("Mobile Number must contain 10 Digits.");
    	     document.form.phone.focus();
    		 return false;
	}
	if(document.form.captcha.value=="")
	{
		alert("Please Fill Captcha");
		document.form.captcha.focus();
		return false;
	}	

}