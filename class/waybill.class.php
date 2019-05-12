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
}