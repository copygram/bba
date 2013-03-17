<?php
/**
 * User: oskar@copygr.am
 * Date: 3/16/13
 * Time: 6:07 PM
 */

class sendMail extends BaseController {

    public $subject;
    public $template;

    public function __construct() {
    }

    public function send($user = null) {

        $user = Donor::find(1);
        $this->subject = "Subjext";

        $mandrill = new Mandrill('D0M4hfjLBAV5A8eL8E9gJw');

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
                'content' => $user->bloodtype),
            array(
                'name' => 'LASTDONATED',
                'content' => $user->lastDonated),
            array(
                'name' => 'EMAIL',
                'content' => $user->email),
            array(
                'name' => 'MOBILE',
                'content' => $user->mobile),
            );
        echo "<pre>";
        var_dump($user);

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
            'to' => array(array('email' =>'oskar@copygr.am', 'name' => 'oskar')),
            'global_merge_vars' => $global_merge_vars,
            'merge_vars' => $merge_vars);

        $template_content = array(
            array(
                'name' => 'main',
                'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
            array(
                'name' => 'footer',
                'content' => 'Copyright 2012.')

        );

        $rendered_template = $mandrill->templates->render('fluid-welcome-email', null, $global_merge_vars);
        echo $rendered_template['html'];
        die();

        //$mandrill->messages->sendTemplate($this->template, $template_content, $message);
    }
}
