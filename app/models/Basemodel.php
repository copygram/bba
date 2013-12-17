<?php 

class Basemodel extends Eloquent {

        /**
         * @param $stdObjects
         * @param null $class
         * @return array|null
         * Takes an array of stdClass objects and tries to convert them to the provided class.
         */
        public static function stdClassToEloquent( $stdObjects, $class = null ) {
                if ( !isset( $stdObjects ) || $class == null ) {
                        return null;
                }
                if ( !is_array( $stdObjects ) || count( $stdObjects ) < 1 ) {
                        return null;
                }

                $newObjects = array( );

                foreach ( $stdObjects as $stdObject ) {
                        $newObject = new $class( (array)$stdObject, true );
                        $newObjects[ ] = $newObject;
                }

                return $newObjects;
        }

}