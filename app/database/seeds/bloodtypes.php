<?php
/**
 * User: oskar@copygr.am
 * Date: 3/19/13
 * Time: 7:36 PM
 */

class Bloodtypes extends Seeder {
    public function run() {
        $bloodtypes = array(
              array('bloodtype' => 'A+'
            ),array('bloodtype' => 'A-'
            ),array('bloodtype' => 'B+'
            ),array('bloodtype' => 'B-'
            ),array('bloodtype' => 'AB+'
            ),array('bloodtype' => 'AB-'
            ),array('bloodtype' => 'O+'
            ),array('bloodtype' => 'O-')
        );

        DB::table('bloodtypes')->insert($bloodtypes);
    }
}