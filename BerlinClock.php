<?php


class BerlinClock {

    public function minute(int $int): string{

        if( $int === 2) return "YY";
        if( $int === 3) return "YYY";

        return "Y";
    }
}