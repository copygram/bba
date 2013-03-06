<?php

class smsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



	public function smsForm()
	{
		return View::make('BackEnd.Search.smsForm');
	}
	
	public static function sendSMS()
	{

		// AccountSid and AuthToken from www.twilio.com/user/account
	    $AccountSid = "ACe8fddabb94827cc5c73bcfb50acb08b5";
	    $AuthToken = "462d7dd89fb5bb82a9c4c1acc9f7edfb";
	 
	    // Instanting a new Twilio Rest Client
	    $client = new Services_Twilio($AccountSid, $AuthToken);

	    $recipientNumber  = Input::get('mobile');

	    $recipientName  = Input::get('fname');
	  
	    $messageBody = "Thank you $recipientName for registering to Blood Bank Africa";
	 
	    
	    $donor = array(
	     
	        $recipientNumber => $recipientName,  
	    );
	 
	    foreach ($donor as $number => $name) {
	 		
	        $sms = $client->account->sms_messages->create("657-999-5090", 

	            // the number we are sending -donor's number
	            $number,
	            // the sms body
	            $messageBody
	            
	        );

	       return 'Message sent';
	    }

	}

	



}
