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


//session_start();
//$_SESSION['count'] += 1;
//$text = $_SESSION['count'];
//print $text;
//
//logFile($text);

}