<?php
/**
 * User: oskar@copygr.am
 * Date: 3/20/13
 * Time: 12:34 AM
 */

class objectFormArray {

    /**
     * @param $object
     * @return array
     * This takes an object with two fields, id and a value.
     * It then returns an array that can be used with form selects.
     */
    public static function flatten($object) {
        $objectArray = array_map(function($n){
            return array_pop($n);
        },  $object->toArray());
        array_unshift($objectArray, 'Choose one');

        return $objectArray;
    }
}