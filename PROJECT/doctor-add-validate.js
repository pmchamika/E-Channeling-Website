function form2Validation(){
	var dname=document.forms["form1"]["dname"].value;
	var ddate=document.forms["form1"]["date"].value;
	var dstime=document.forms["form1"]["stime"].value;
	var detime=document.forms["form1"]["etime"].value;
	var fee=document.forms["form1"]["fee"].value;
		
					if(dVal(dname))
						if(dateVal(ddate))
							if(stimeVal(dstime))
								if(etimeVal(detime))
									if(feeVal(fee))
										return true;
												else
													return false;
											else
												return false;
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
function stimeVal(Value)
{
		var eq= /^[0-9a-zA-Z/. ]+$/;
		if(!isEmpty(Value, "Start Time"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Start Time is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function etimeVal(Value)
{
		var eq= /^[0-9a-zA-Z/. ]+$/;
		if(!isEmpty(Value, "End Time"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert(" End Time is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function feeVal(Value)
{
		var eq= /^[0-9a-zA-Z/. ]+$/;
		if(!isEmpty(Value, "Fee"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert(" Fee is not valid");
				return false;
			}
		}
		else
		{
			return false;
		}
}


