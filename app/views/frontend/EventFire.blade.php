<?php

Event::listen('donor.save', function($donor) {
    $welcomeMail = new MailController($donor);
    $welcomeMail->subject = Config::get('mail.welcome_subject');
    $welcomeMail->template = "fluid-welcome-email";
    $welcomeMail->send();

    $mandrill = new Mandrill(Config::get('app.mandrill_key'));
    $global_merge_vars = array('global_merge_vars' =>
    array(
        'name' => 'FULLNAME',
        'content' => $donor->fname .' '. $donor->lname),
    );
    $welcomeMessage = $mandrill->templates->render('sms-welcome',null,$global_merge_vars);

    $welcomeSMS = new SmsController($donor, $welcomeMessage);

});
