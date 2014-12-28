<?php	
	require_once 'inc/MCAPI.class.php';
	$api = new MCAPI('17c49d56252cf9bc7272b268adcfd38d-us9');	
	$merge_vars = array('FNAME'=>'', 'LNAME'=>'');
	
	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
	$retval = $api->listSubscribe( '8e23d05401', $_POST["email"], $merge_vars, 'html', false, true );
	
	if ($api->errorCode){
		//echo $api->errorCode;
		echo "<h4>Please try again.</h4>";
	} else {
		echo "<h4>Thank you, you have been added to our mailing list.</h4>";
	}
?>
