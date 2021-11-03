<?php

	$formEmailAddress = $_POST['email'];	//pull email address from the form data
	$formTopic = $_POST['topic'];			//pull topic from the form data
	
	echo "<h1>Email $formEmailAddress </h1>";
	echo "<h1>Topic $formTopic </h1>";



?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<title>contact form response</title>

</head>

<body>


<?php

echo "<p>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "$formEmailAddress";		//will send the email to the email address entered on the form 
		
	
	$subject = "Thank you for your message. I will contact you soon.";	//This is the message that will be sent back to the person who sent you a message from your contact form. 

	//$fromEmail = "contact@carinmurphy.com";		//Change the email address within the quotes to be YOUR host server email address.  
	$fromEmail = "contact@chris-pohlman.com";		//Change the email address within the quotes to be YOUR host server email address.  


//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	} 
	
	echo "<h2>$emailBody</h2>";
	
	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>

</body>
</html>
