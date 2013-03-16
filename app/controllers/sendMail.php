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

    public function send($user) {
        dd($user);

        $mandrill = new Mandrill('ZPxZgL0JdGPrl6tNQvPN2A');

        $message = array(
            'subject' => $this->subject,
            'from_email' => 'oskar@copygr.am',
            'to' => array(array('email' => $user->email, 'name' => $user->fname + $user->lname))
        ,   'merge_vars' => array(array(
                'rcpt' => 'oskar@copygr.am',
                'vars' =>
                array(
                    array(
                        'name' => 'FIRSTNAME',
                        'content' => 'Recipient 1 first name'),
                    array(
                        'name' => 'LASTNAME',
                        'content' => 'Last name')
                )
            )));

        $template_content = array(
            array(
                'name' => 'main',
                'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
            array(
                'name' => 'footer',
                'content' => 'Copyright 2012.')

        );

        //print_r($mandrill->messages->sendTemplate($this->template, $template_content, $message));

        dd($donor);

        return View::make('frontEnd.mail')->with("slask", "MAIL");

    }
}
