/// <summary>
/// A function to mask a given string with # only showing the last 4 digits
/// </summary>
/// <param name="inValue">The value to mask</param>
/// <returns>The the original string with only the last 4 digits
///	and all other chars converted to #</returns>
function maskValue(inValue) {
    if (inValue.length <= 4) {
        return "####";
    } else {
        return (
            getMaskString(inValue.length - 4) +
            inValue.substring(inValue.length - 4)
        );
    }
}
//Example test
//console.log(maskValue("123456789"));

//Return a string of "#" inLength long
function getMaskString(inLength) {
    var result = "";
    for (let i = 0; i < inLength; i++) {
        result += "#";
    }

    return result;
}

//Example Tests
/*
		console.log(getMaskString(0));
		console.log(getMaskString(1));
		console.log(getMaskString(10));
		console.log(getMaskString(25));
		console.log(getMaskString("asdasfd"));
		*/
