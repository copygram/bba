<?php
/**
 * User: oskar@copygr.am
 * Date: 3/16/13
 * Time: 6:07 PM
 * TODO: Fix a generic function for getting the data so we don't have to update on two places.
 */

class sendMail extends BaseController {

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
                'content' => $user->gender->description),
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

        $message = array(
            'subject' => $this->subject,
            'from_email' => 'hello@bloodbankafrica.com',
            'to' => array(array('email' => $user->email, 'name' => $user->fname)),
            'global_merge_vars' => $global_merge_vars,
            'merge_vars' => $merge_vars);

        $mandrill->messages->sendTemplate($this->template, null, $message);
    }

    public function render() {
        $user = Donor::all()->first();

        $this->subject = " Say. *|FNAME|*";

        $mandrill = new Mandrill($this->mandrillKey);

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
                'content' => $user->gender->description),
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

        $message = array(
            'subject' => $this->subject,
            'from_email' => 'hello@bloodbankafrica.com',
            'to' => array(array('email' => $user->email, 'name' => $user->fname)),
            'global_merge_vars' => $global_merge_vars,
            'merge_vars' => $merge_vars);

        $rendered_template = $mandrill->templates->render('fluid-welcome-email', null, $global_merge_vars);
        echo $rendered_template['html'];
        die();
    }
}