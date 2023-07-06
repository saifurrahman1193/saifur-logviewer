<?php

namespace Saifur\LogViewer\app\Facades\Helpers;

class SLVCommonHelper {

    public function getYMDToDMcYDay( $datetime ) {
        if ( isset( $datetime ) ) {
            return \Carbon\Carbon::parse( $datetime )->format( 'd M, Y (l)' );
        }
        return '';
    }

    public function getFormattedDate( $datetime ) {
        if ( isset( $datetime ) ) {
            return \Carbon\Carbon::parse( $datetime )->format( 'Y-m-d' );
        }
        return '';
    }


}
