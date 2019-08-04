<?php


class WayBill
{
    public function  logFile($textLog) {
        $file = 'logFile.txt';
        $fOpen = fopen($file, 'a');
        $textLog .= "\n";
        fwrite($fOpen, $textLog);
        fclose($fOpen);
    }
    public function readLast($name) {
        $fopen = @file("$name");
        return array_pop($fopen);
    }

    public function getSurname($array) {
        $str = explode(" ", $array['driver']);
        $name = mb_substr($str[1], 0, 1);
        $patr = mb_substr($str[2], 0, 1);
        return $str[0] . " " . $name . "." . $patr;
    }
    public function days($n){
        $day1 = 'день';
        $day2 = 'дня';
        $day3 = 'дней';
        if($n == 1){
            return $n . " " . $day1;
        }
        if($n > 1 && $n <= 4){
            return $n . " " . $day2;
        }
          if($n > 4){
            return $n . " " . $day3;
        }

    }
}