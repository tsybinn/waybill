<?php


$driverTs = [

    'driver' => 'Цыбин Анатолий Юрьевич',
    'model' => 'ХЕНДАЙ Солярис',
    'numberCar' => 'A611XC777',
    'certificateSeries' => '36 27',
    'certificateNumber' => '868364',
    'certificateTo' => '10.06.2026',
    'licenseSeries' => 'MO',
    'licenseNumber' => '226138',
    'licenseResolution' => '234861',
];

$driverSu = [
    'driver' => 'Сукач Кирилл Александрович',
    'model' => 'Skoda Oktavia',
    'numberCar' => 'T847BC799',
    'certificateSeries' => '64 04',
    'certificateNumber' => '964433',
    'certificateTo' => '26.08.2021',
    'licenseSeries' => 'MO',
    'licenseNumber' => '254935',
    'licenseResolution' => '263083',
];

$str = explode( " ",$driverSu ['driver']) ;

var_dump($str) ;
 echo $surName = $str[0] . $str[1][0];

