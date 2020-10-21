<?php


class BerlinClock {

    public function minute(int $int): string{

        if( $int === 2) return "YYNN";
        if( $int === 3) return "YYYN";
        if( $int === 4) return "YYYY";
        if( $int === 0 || $int === 5) return "N";

        return "YNNN";
    }
}