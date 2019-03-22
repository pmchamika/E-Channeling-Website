function formValidation(){
	var mail=document.forms["myForms"]["email"].value;
	var pass=document.forms["myForms"]["password"].value;
			
					if(mailVal(mail))
						if(passVal(pass))
							
										return true;
												else
													return false;
											else
												return false;
																			
}

function isEmpty(Value, field)
{
		if(Value=="" || Value== null)
		{
			alert("Please fill " +field +  " field");
			return true;
		}
		else
		{
			return false;
		}
}
function mailVal(Value)
{
		var eq= /^[0-9a-zA-Z/*-+!@#$%^&*?,. ]+$/;
		if(!isEmpty(Value, "E-mail"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Email is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function passVal(Value)
{
		var eq= /^[0-9a-zA-Z/*-+!@#$%^&*?., ]+$/;
		if(!isEmpty(Value, "Password"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Password is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
