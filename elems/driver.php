<?php

header('Content-Type: text/html; charset=utf-8');

$driverTs = [

    'driver' => 'Цыбин Анатолий Юрьевич', 'model' => 'ХЕНДАЙ Солярис', 'numberCar' => 'A611XC777',
    'certificateSeries' => '36 27', 'certificateNumber' => '868364', 'certificateTo' => '10.06.2026',
    'licenseSeries' => 'MO', 'licenseNumber' => '226138', 'licenseResolution' => '234861',];

$driverSu = ['driver' => 'Сукач Кирилл Александрович', 'model' => 'Skoda Oktavia', 'numberCar' => 'T847BC799',
    'certificateSeries' => '64 04', 'certificateNumber' => '964433', 'certificateTo' => '26.08.2021',
    'licenseSeries' => 'MO', 'licenseNumber' => '254935', 'licenseResolution' => '263083',];
// принимает массив возвращает фамилию и  инициалы


function getSurname($array) {

    $str = explode(" ", $array['driver']);
    $name = mb_substr($str[1], 0, 1);
    $patr = mb_substr($str[2], 0, 1);
    return $str[0] . " " . $name . "." . $patr;
}


//echo getSurname($driverTs);