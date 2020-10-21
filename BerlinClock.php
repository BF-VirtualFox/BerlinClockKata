<?php


class BerlinClock {

    public function minute(int $int): string{

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
}