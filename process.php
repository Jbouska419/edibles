<?php # process.php
$page_title = 'Thank You';
include ('includes/header2.php');
?>

  <div id = "content">
		<div class = "cl20"></div>
	<h4>Thank you for your interest in Edibles by Erin.</h2>
		<div class = "cl20"></div>
	<h4>An email has been sent to you containing a coupon for 10% off your first order.  We look forward to doing business with you in the near future.</h2>
		<div class = "cl20"></div>
		
		
		<div class = "cl300"></div>
	</div>
		
<?php
	 if ($_POST["email"]<>'') { 
		$ToEmail = 'Jbouska419@gmail.com, ["email]';
		$EmailSubject = 'Edibles by Erin Discount';
		$mailheader = "From: ".$_POST["email"]."\r\n";
		$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$MESSAGE_BODY = "First Name:   ".$_POST["firstname"]."  ";
		$MESSAGE_BODY .= "Last Name:   ".$_POST["lastname"]."  ";
		$MESSAGE_BODY .= "Email:   ".$_POST["email"]."  ";
		$MESSAGE_BODY .= "Phone:   ".$_POST["phone"]."  ";
		$MESSAGE_BODY .= "Date:   ".$_POST["date"]."  ";
		$MESSAGE_BODY .= "Comment:   ".nl2br($_POST["comment"])."  ";
		mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); }
	 
include ('includes/footer.html');
			
?>
