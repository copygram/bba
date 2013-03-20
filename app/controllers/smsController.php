<?php


class smsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    private $account;
    private $token;

    public function __construct() {
        $this->account = Config::get('app.twilio_account');
        $this->token = Config::get('app.twilio_auth_token');
    }

	public static function sendSMS($recipientNumber,$recipientName,$messageBody = NULL)
	{

	    $client = new Services_Twilio('', '');
	 
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
