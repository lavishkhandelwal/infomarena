function valid()
{
	var c=/^[a-zA-Z ]+$/;
	var x=document.form.email.value;
	var atpos=x.indexOf("@");
	var dotpos=x.indexOf(".");
	if(document.form.name.value=="")
	{
		alert("Please Enter Name");
		document.form.name.focus();
		return false;
	}
	else
	{
		if(document.form.name.value.search(c)==-1)
		{
			alert("Please Enter Valid Characters in Name");
			document.form.name.focus();
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
	
	if(document.form.comments.value=="")
	{
		alert("Please Enter Your Feedback");
		document.form.comments.focus();
		return false;
	}
	
}