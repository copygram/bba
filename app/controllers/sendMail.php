<?php
/**
 * User: oskar@copygr.am
 * Date: 3/16/13
 * Time: 6:07 PM
 */

class sendMail extends BaseController {

    public function sendMail() {

        $mandrill = new Mandrill('ZPxZgL0JdGPrl6tNQvPN2A');


        dd($mandrill->templates->getList());


        return View::make('frontEnd.mail')->with("slask", "MAIL");

    }
}
