//This function is free to use.  It uses a regular expression to format the value.  It requires a numeric input value to work correctly. 
function dollarFormat(inNum)
{
	//alert("inside testFormat()");
	if (isNaN(inNum))
	{
		//alert("result of isNaN" );   //The input amount is a non numeric string. It is or contains letters and/or spaces
		return "Invalid amount"	
	}
	else
	{	
		inNum = parseFloat(inNum);		//Convert input value into a floating point number.  toFixed() requires a number value to work with
		return  '$' + inNum.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	}
}//end testFormat()
