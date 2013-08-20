<?php

class MailProcessor extends BaseController {

    public $subject;
    public $template;
    private $donor;

    private $mandrillKey;

    public function __construct(Donor $donor) {
        $this->mandrillKey = Config::get('app.mandrill_key');
        $this->donor = $donor;
    }

    public function verifyMail($hash) {
        try {
            $donor = Donor::where('email_hash', '=', $hash)->first();
            if($donor == null) {
                App::abort(404, 'Page not found');
            } else {
                $donor->email_verified = 1;
                $donor->save();

                return View::make('frontend.emailVerified', array());
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function send() {
		$mandrill = new Mandrill($this->mandrillKey);
		$user = $this->donor;

        $global_merge_vars = array('global_merge_vars' =>
            array(
                'name' => 'FULLNAME',
                'content' => $user->fname .' '. $user->lname),
            array(
                'name' => 'SUBJECT',
                'content' => $this->subject),
            array(
                'name' => 'FIRSTNAME',
                'content' => $user->fname),
            array(
                'name' => 'LASTNAME',
                'content' => $user->lname),
            array(
                'name' => 'BLOODTYPE',
                'content' => $user->bloodtype->bloodtype),
            array(
                'name' => 'LASTDONATED',
                'content' => $user->lastDonated),
            array(
                'name' => 'EMAIL',
                'content' => $user->email),
            array(
                'name' => 'MOBILE',
                'content' => $user->mobile),
            array(
                'name' => 'GENDER',
                'content' => $user->gender->type),
            array(
                'name' => 'MAILHASH',
                'content' => $user->email_hash),
            );

        $merge_vars = array(array(
            'rcpt' => $user->email,
            'vars' =>
            array(
                array(
                    'name' => 'FIRSTNAME',
                    'content' => $user->fname),
                array(
                    'name' => 'LASTNAME',
                    'content' => $user->lname),
                array(
                    'name' => 'FULLNAME',
                    'content' => $user->fname .' '. $user->lname)
            )));

	    $map_url = 'http://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x200&maptype=roadmap&sensor=false&markers=';
	    $map_location = $map_url . $user->lat .','. $user->lng;

	    $template_content = array(
		    array(
			    'name' => 'area',
			    'content' => '<img src="'.$map_location.'">'),
	    );

        $message = array(
            'subject' => $this->subject,
            'from_email' => 'hello@bloodbankafrica.com',
            'to' => array(array('email' => $user->email, 'name' => $user->fname)),
            'global_merge_vars' => $global_merge_vars,
            'merge_vars' => $merge_vars);

        $mandrill->messages->sendTemplate($this->template, $template_content, $message);
    }
}