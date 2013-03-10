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
	
	public static function sendSMS($recipientNumber,$recipientName,$messageBody = NULL)
	{

	    $AccountSid = "ACe8fddabb94827cc5c73bcfb50acb08b5";
	    $AuthToken = "462d7dd89fb5bb82a9c4c1acc9f7edfb";
	 
	    $client = new Services_Twilio($AccountSid, $AuthToken);

	    $donor = array($recipientNumber => $recipientName );
	     
	    foreach ($donor as $number => $name) {
	 		
	        $sms = $client->account->sms_messages->create("657-999-5090",$number,$messageBody);
	       
	    }

	}

	



}
