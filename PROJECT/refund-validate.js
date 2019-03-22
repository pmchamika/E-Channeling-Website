function formValidation(){
	var ano=document.forms["myForms"]["appointmentNo"].value;
	var reason=document.forms["myForms"]["reason"].value;
	var holder=document.forms["myForms"]["holdername"].value;
	var bank=document.forms["myForms"]["bank"].value;
	var accno=document.forms["myForms"]["accNo"].value;
	
					if(anoVal(ano))
						if(reasonVal(reason))
							if(holderVal(holder))
								if(bankVal(bank))
									if(accnoVal(accno))					
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
			alert("Should fill " +field +  " field");
			return true;
		}
		else
		{
			return false;
		}
}
function anoVal(Value)
{
		if(!isEmpty(Value,"Appointment number"))
		{
			var eq= /^[0-9]+$/;
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter a valid Appointment number");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function reasonVal(Value)
{
		var eq= /^[0-9a-zA-Z/*-+!@#$%^&*?. ]+$/;
		if(!isEmpty(Value, "reason"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Please only use numbers and words for the reason");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function holderVal(Value)
{
		var eq= /^[0-9a-zA-Z ]+$/;
		if(!isEmpty(Value, "holder"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Please only use numbers and words for the holder name");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function bankVal(Value)
{
		var eq= /^[0-9a-zA-Z ]+$/;
		if(!isEmpty(Value, "bank"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Please only use numbers and words for the bank name");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function accnoVal(Value)
{
		var string = Value;
		var letters = string.substring(19);
		var numbers = string.substring(0-19);
		var eq= /^[0-9-]+$/;
		if(!isEmpty(Value, "Account Number"))
		{
				if(numbers.match(eq))
					{
						if(numbers.length == 19)
						{
							return true;
						}
						else
						{
							alert("Acoount Number should consist of 16 digits");
							return false;
						}
					}
					else
					{
						alert("Invalid Account Number");
						return false;
					}
			}	
			
		else
		{
			return false;
		}
}	