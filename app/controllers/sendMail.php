<?php
/**
 * User: oskar@copygr.am
 * Date: 3/16/13
 * Time: 6:07 PM
 */

class sendMail extends BaseController {

    public function sendMail() {

        $mandrill = new Mandrill('ZPxZgL0JdGPrl6tNQvPN2A');

        $message = array(
            'subject' => 'Test message',
            'from_email' => 'oskar@copygr.am',
            'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
            'to' => array(array('email' => 'oskar@copygr.am', 'name' => 'Recipient 1')),
            'merge_vars' => array(array(
                'rcpt' => 'oskar@copygr.am',
                'vars' =>
                array(
                    array(
                        'name' => 'FIRSTNAME',
                        'content' => 'Recipient 1 first name'),
                    array(
                        'name' => 'LASTNAME',
                        'content' => 'Last name')
                ))));

        $template_name = 'Template';

        $template_content = array(
            array(
                'name' => 'main',
                'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
            array(
                'name' => 'footer',
                'content' => 'Copyright 2012.')

        );

        print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));


        return View::make('frontEnd.mail')->with("slask", "MAIL");

    }
}
