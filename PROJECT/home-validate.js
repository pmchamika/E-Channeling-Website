function formValidation(){
	var dname=document.forms["myForms"]["D_Name"].value;
	var specs=document.forms["myForms"]["D_Speciality"].value;
	var hname=document.forms["myForms"]["H_Name"].value;
		
					if(dVal(dname))
						if(specsVal(specs))
							if(hVal(hname))
										return true;
												else
													return false;
											else
												return false;
										else
											return false;
									
}

function isEmpty(Value, field)
{
		if(Value=="" || Value== null)
		{
			alert("Please fill " +field +  " field to search");
			return true;
		}
		else
		{
			return false;
		}
}
function dVal(Value)
{
		var eq= /^[a-zA-Z-. ]+$/;
		if(!isEmpty(Value, "Doctor"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Doctor Name is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function specsVal(Value)
{
		var eq= /^[a-zA-Z-. ]+$/;
		if(!isEmpty(Value, "Speciality"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Speciality is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}function hVal(Value)
{
		var eq= /^[0-9a-zA-Z/*-+!@#$%^&*?. ]+$/;
		if(!isEmpty(Value, "Hospital"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Hospital Name is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
