<?php

class SmsController extends BaseController {

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */

    private $account;
    private $token;
    private $twilio_number;

    public function __construct(Donor $recipient, $messageBody) {
        $this->account = Config::get('app.twilio_account');
        $this->token = Config::get('app.twilio_auth_token');
        $this->twilio_number = Config::get('app.twilio_number');

        $this->sendSMS($recipient, $messageBody);
    }
    private function sendSMS($recipient, $messageBody) {
        $client = new Services_Twilio($this->account, $this->token);
        $number = $this->phoneNumber($recipient);
        $sms = $client->account->sms_messages->create($this->twilio_number, $number, $messageBody);
    }

    // Getting away the first zero and concat with country code
    private function phoneNumber(Donor $recipient) {
        if(isset($recipient)) {
            try {
                $mobile = (substr($recipient->mobile, 0, 1) == 0) ? substr($recipient->mobile, 1) : $recipient->mobile;
                $mobile = $recipient->countrycode.$mobile;

                return $mobile;

            } catch (Exception $e) {
                throw $e;
            }
        }

	    return false;
    }
}