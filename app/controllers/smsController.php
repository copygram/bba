<?php

class smsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function sendSMS($recipientNumber='+46725504592', $recipientName='Otis', $messageBody='Hey buddy')
	{
		
			 // AccountSid and AuthToken from www.twilio.com/user/account
	    $AccountSid = "ACe8fddabb94827cc5c73bcfb50acb08b5";
	    $AuthToken = "462d7dd89fb5bb82a9c4c1acc9f7edfb";
	 
	    // Instantiate a new Twilio Rest Client
	    $client = new Services_Twilio($AccountSid, $AuthToken);
	 
	    
	    $donor = array(
	     
	        $recipientNumber => $recipientName,  
	    );
	 
	    foreach ($donor as $number => $name) {
	 		
	        $sms = $client->account->sms_messages->create("657-999-5090", 

	            // the number we are sending to - Any phone number
	            $number,
	 
	            // the sms body
	            $messageBody
	            
	        );

	        echo "Sent message to $name" ;
	    }

	}



}
