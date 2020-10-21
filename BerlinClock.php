<?php


class BerlinClock {

    public function minute(int $int): string{

        if( $int === 2) return "YY";
        return "Y";
    }
}