<?php 
namespace services\SMSHandler;

class SMSProcessor {

	private $account;
    private $token;
    private $twilio_number;
    private $mandrillKey;
   

    public function __construct() {
        $this->account       =    \Config::get('app.twilio_account');
        $this->token         =    \Config::get('app.twilio_auth_token');
        $this->twilio_number =    \Config::get('app.twilio_number');
        $this->mandrillKey   =    \Config::get('app.mandrill_key'); 
    }
    
    public function getMessageTemplate($recipientObject)
    {
    	$mandrill = new \Mandrill($this->mandrillKey);

    	$global_merge_vars = array('global_merge_vars' =>
    						 array(
    						 		'name'    => 'FULLNAME',
    						 		'content' =>  $recipientObject->fname .' '.$recipientObject->lname
    						 	  )
    	); 
    	$welcomeMessage = $mandrill->templates->render('sms-welcome',null,$global_merge_vars); // return an array of string with html as key
    	$welcomeMessage = $welcomeMessage['html'];
    	
    	return $welcomeMessage;
    }

    //Accepts donor object
    public function sendSMS($recipientObject) {
        $client = new \Services_Twilio($this->account, $this->token);
        $number = $recipientObject->mobile;
        $messageBody = $this->getMessageTemplate($recipientObject);
        $sms = $client->account->sms_messages->create($this->twilio_number, $number, $messageBody);
    }

    public function phoneNumber($recipientNumber,$countrycode) {
        if(isset($recipientNumber)) {
            try {
                $mobile = (substr($recipientNumber, 0, 1) == 0) ? substr($recipientNumber, 1) : $recipientNumber;
                $mobile = $countrycode.$mobile;

                return $mobile;

            } catch (\Exception $e) {
                throw $e;
            }
        }

        return false;
    }

    //General message sender
    public function SMS($recipienNumber, $messageBody ) {
        
        $client = new \Services_Twilio($this->account, $this->token);

        $sms = $client->account->sms_messages->create($this->twilio_number, $recipienNumber, $messageBody);
    }

}