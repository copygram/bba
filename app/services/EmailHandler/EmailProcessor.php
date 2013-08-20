<?php 
namespace services\EmailHandler;

class EmailProcessor {

	private $mandrillkey;
	

	protected $template;
	protected $subject; 

	public function __construct()
	{
		$this->mandrillkey = \Config::get('app.mandrill_key');
        $this->subject = \Config::get('mail.welcome_subject');
        $this->template =  \Config::get('app.template_name');
	}


	public function sendEmail($receiver)
	{
		$mandrill = new \Mandrill($this->mandrillkey);

		$global_merge_vars = array('global_merge_vars' =>
            array(
                'name' => 'FULLNAME',
                'content' => $receiver->fname .' '. $receiver->lname),
            array(
                'name' => 'SUBJECT',
                'content' => $this->subject),
            array(
                'name' => 'FIRSTNAME',
                'content' => $receiver->fname),
            array(
                'name' => 'LASTNAME',
                'content' => $receiver->lname),
            array(
                'name' => 'BLOODTYPE',
                'content' => $receiver->bloodtype->blood_id),
            array(
                'name' => 'LASTDONATED',
                'content' => $receiver->lastDonated),
            array(
                'name' => 'EMAIL',
                'content' => $receiver->email),
            array(
                'name' => 'MOBILE',
                'content' => $receiver->mobile),
            array(
                'name' => 'GENDER',
                'content' => $receiver->gender->type),
            array(
                'name' => 'MAILHASH',
                'content' => $receiver->email_hash),
            );

        $merge_vars = array(array(
            'rcpt' => $receiver->email,
            'vars' =>
            array(
                array(
                    'name' => 'FIRSTNAME',
                    'content' => $receiver->fname),
                array(
                    'name' => 'LASTNAME',
                    'content' => $receiver->lname),
                array(
                    'name' => 'FULLNAME',
                    'content' => $receiver->fname .' '. $receiver->lname)
            )));

        $map_url = 'http://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x200&maptype=roadmap&sensor=false&markers=';
	    $map_location = $map_url . $receiver->lat .','. $receiver->lng;

	    $template_content = array(
		    array(
			    'name' => 'area',
			    'content' => '<img src="'.$map_location.'">'),
	    );

        $message = array(
            'subject' => $this->subject,
            'from_email' => 'hello@bloodbankafrica.com',
            'to' => array(array('email' => $receiver->email, 'name' => $receiver->fname)),
            'global_merge_vars' => $global_merge_vars,
            'merge_vars' => $merge_vars);

        $mandrill->messages->sendTemplate($this->template, $template_content, $message);
	}
}