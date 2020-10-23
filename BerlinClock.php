<?php


class BerlinClock {

    public function countMinutes (int $int): string{

        $tmp = $int%5;

        switch ($tmp){
            case 0 :
                return "NNNN";
            case 1 :
                return "YNNN";
            case 2 :
                return "YYNN";
            case 3 :
                return "YYYN";
            case 4 :
                return "YYYY";
        }
    }

    public function countMinutesPer5 (int $int): string {
        if($int === 5) return "YNNN";
        if($int === 10) return "YYNN";
        if($int === 15) return "YYRN";

        return "NNNN";
    }
}