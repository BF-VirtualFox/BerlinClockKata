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
        $count = $int/5;
        $retour = "";

        for($i = 1; $i<=11; $i++){
            if($i <= $count){
                if($i%3 == 0)
                    $retour .= "R";
                else
                    $retour .= "Y";
            }else{
                $retour .= "N";
            }
        }

        return $retour;
    }

    public function countHours(int $int): string {
        if($int === 1 || $int === 6) return "RNNN";
        if($int === 2) return "RRNN";
        if($int === 3) return "RRRN";
        if($int === 4) return "RRRR";
        if($int%5 === 0) return "NNNN";
    }
}