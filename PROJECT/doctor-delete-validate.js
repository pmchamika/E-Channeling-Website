function form1Validation(){
	var dname=document.forms["myForms"]["D_Name"].value;
	var ddate=document.forms["myForms"]["D_Date"].value;
	var dstime=document.forms["myForms"]["D_Stime"].value;
		
					if(dVal(dname))
						if(dateVal(ddate))
							if(timeVal(dstime))
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
			alert("Please fill " +field +  " field");
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

function dateVal(Value)
{
		var eq= /^[0-9/]+$/;
		if(!isEmpty(Value,"Date"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter only numbers for Date");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function timeVal(Value)
{
		var eq= /^[0-9a-zA-Z/. ]+$/;
		if(!isEmpty(Value, "Time"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Time is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
