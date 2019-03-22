function formValidation(){
	var fname=document.forms["myForms"]["firstname"].value;
	var sta=document.forms["myForms"]["status"].value;
	var lname=document.forms["myForms"]["lastname"].value;
	var pw=document.forms["myForms"]["password"].value;
	var cpw=document.forms["myForms"]["Cpassword"].value;
	var nic=document.forms["myForms"]["nic"].value;
	var birth=document.forms["myForms"]["dob"].value;
	var add=document.forms["myForms"]["address"].value;
	var phone1=document.forms["myForms"]["usrtel1"].value;
	var phone2=document.forms["myForms"]["usrtel2"].value;
	var email=document.forms["myForms"]["email"].value;
	var acno=document.forms["myForms"]["accNo"].value;
	var validdate=document.forms["myForms"]["vDate"].value;
	var sno=document.forms["myForms"]["sCode"].value;

	if(statusVal(sta))
		if(fnameVal(fname))
			if(lastVal(lname))
				if(emailVal(email))
					if(passwordVal(pw))
						if(confirmPasswordVal(pw, cpw))
							if(nicVal(nic))
								if(dobVal(birth))
									if(addressVal(add))
										if(phoneVal(phone1))
											if(phoneVal(phone2))
												if(accVal(acno))
													if(validVal(validdate))
														if(secretVal(sno))
														
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

function fnameVal(Value)
{
		var eq= /^[a-zA-Z]+$/;
		if(!isEmpty(Value,"First Name"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter only text for First Name");
				return false;
			}
		}
		else
		{
			return false;
		}
}


function statusVal(Value)
{
		if(Value=="Choose your Status")
		{
			alert("Choose your Status");
			return false;
		}
		else
		{
			return true;
		}
}

function lastVal(Value)
{
		var eq= /^[a-zA-Z]+$/;
		if(!isEmpty(Value,"Last Name"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter only text for Last Name");
				return false;
			}
		}
		else
		{
			return false;
		}
}


function passwordVal(Value)   
{   
		var pw= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

		if(!isEmpty(Value,"Password"))
		{
			if(Value.match(pw))   
			{   
				 
				return true;  
			}  
			else  
			{   
				alert("Password should contain at least 8 characters long and must be a combination of uppercase characters, lowercase characters, numeric characters and a special character")  
				return false;  
			} 
		}		
}

function confirmPasswordVal(Value1, Value2) 
{
		
		
		if(!isEmpty(Value2,"Confirm Password"))
		{
			if (Value1 == Value2) 
			{
				return true;
			}
			else 
			{
				alert("Passwords does not Match");
				return false;
			}
		}
}

function nicVal(Value)
{
		var string = Value;
		var letters = string.substring(9);
		var numbers = string.substring(0,9);
		var eq= /^[0-9]+$/;
		if(!isEmpty(Value, "NIC"))
		{
			if(letters=="V")
			{
					if(numbers.match(eq))
					{
						if(numbers.length == 9)
						{
							return true;
						}
						else
						{
							alert("NIC number should consist of 9 digits");
							return false;
						}
					}
					else
					{
						alert("Invalid NIC number");
						return false;
					}
			}	
			else
			{
				alert("NIC number should end with (V) and consist of 9 digits");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function dobVal(Value)
{
		var eq= /^[0-9/]+$/;
		if(!isEmpty(Value,"Date of Birth"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter only numbers for Date of Birth");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function addressVal(Value)
{
		var eq= /^[0-9a-zA-Z ]+$/;
		if(!isEmpty(Value, "Address"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Invalid Postal Address");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function phoneVal(Value)
{
		if(!isEmpty(Value,"contact number"))
		{
			var eq= /^[0-9]+$/;
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter a valid contact number");
				return false;
			}
		}
		else
		{
			return false;
		}
}

function emailVal(Value)
{
		if(!isEmpty(Value,"Email"))
		{
			var atops=Value.indexOf("@");
			var dotops=Value.indexOf(".");
				
				if(atops<1 || dotops+2 >= Value.length || atops+2 > dotops)
				{
					return false;
				}
				else
				{
					return true;
				}
		}
		else
		{
			return false;
		}
}
function accVal(Value)
{
		var string = Value;
		var letters = string.substring(19);
		var numbers = string.substring(0-19);
		var eq= /^[0-9-]+$/;
		if(!isEmpty(Value, "Card Number"))
		{
				if(numbers.match(eq))
					{
						if(numbers.length == 19)
						{
							return true;
						}
						else
						{
							alert("Card Number should consist of 16 digits");
							return false;
						}
					}
					else
					{
						alert("Invalid Card Number");
						return false;
					}
			}	
			
		else
		{
			return false;
		}
}		
function validVal(Value)
{
		var eq= /^[0-9/]+$/;
		if(!isEmpty(Value,"Valid Date"))
		{
			if(Value.match(eq))
			{
				return true;
			}
			else
			{
				alert("Enter only numbers for Valid Date");
				return false;
			}
		}
		else
		{
			return false;
		}
}
function secretVal(Value)
{
		var string = Value;
		var letters = string.substring(3);
		var numbers = string.substring(0,3);
		var eq= /^[0-9]+$/;
		if(!isEmpty(Value, "Code"))
		{
				if(numbers.match(eq))
					{
						if(numbers.length == 3)
						{
							return true;
						}
						else
						{
							alert("Code number should consist of 3 digits");
							return false;
						}
					}
					else
					{
						alert("Invalid Code");
						return false;
					}
			}	
			
		else
		{
			return false;
		}
}