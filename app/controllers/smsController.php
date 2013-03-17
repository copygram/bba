<?php


class smsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



	
	public static function sendSMS($recipientNumber,$recipientName,$messageBody = NULL)
	{

	    $client = new Services_Twilio('ACe8fddabb94827cc5c73bcfb50acb08b5', '462d7dd89fb5bb82a9c4c1acc9f7edfb');
	 
	    $donor = array(
	     
	        $recipientNumber => $recipientName,  
	    );
	 
	    foreach ($donor as $number => $name) {
	 		
	        $sms = $client->account->sms_messages->create('657-999-5090', $number, $messageBody);

	       return;
	    }


	}

	// Getting away the first zero and concat with country code

	public static function  phoneNumber( $mobile, $countryCode)
	{
		
			if(isset($mobile))
			{
				$array = str_split($mobile);

				if($array[0] === '0')
				{
					$mobile = substr($mobile, 1);

				}else{
					 $mobile = $mobile ;
				}

				$number = $countryCode.$mobile;

			return $number;

			}
			else{
				return;
			}
	
	}


}
