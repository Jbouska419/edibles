<?php # process2.php
$page_title = 'Thank You';
include ('includes/header2.php');
?>

	<div id = "content">
		<div class = "cl20"></div>
	<h4>Thank you for your interest in Edibles by Erin.</h4>
		<div class = "cl20"></div>
	<h4>One of our sales representatives will be contacting you very shortly to discuss any questions you may have.  A conformation email has been sent to the email address you provided.  </h4>
		<div class = "cl20"></div>
		
		
		<div class = "cl300"></div>
	</div>
		
<?php
	 if ($_POST["email"]<>'') { 
		$ToEmail = 'Jbouska419@gmail.com, ["email]';
		$EmailSubject = 'edibles by erin information request';
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
