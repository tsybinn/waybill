<?php
if ($_POST['driver'] == 'tsybin'){
    $drivers = $driverTs;
}
if($_POST['driver'] == 'major'){
    $drivers = $major;
}

if($_POST['driver'] == 'sukach'){
    $drivers = $driverSu;
}

$days = $_POST['days'];
$dateStart = $_POST['dateStart'];
$number = (int)$wayBill->readLast('logFile.txt'); // last number in log file
$surName =  $wayBill->getSurname($drivers); //pull initials  of massive;

for ($i = 1; $i <= $days; $i++) {
    $number += 1;
    if ($i == $days) {
        $wayBill->logFile($number); //write last number in log file
    }
    $min = $i - 1;// in dateTime + day

    if ($i == 1) {
        $datetime = new DateTime($dateStart);
    } else {
        $datetime = new DateTime(".$dateStart + $min day");
    }
    //date day
    $date = $datetime->format('d.m.y');
    $dateMechanic = $datetime->format('d.m.y') . "  7:00";
    $dateGo = $datetime->format('d.m.y') . "  7:05";
    $medicDate = $datetime->format('d.m.y') . "  6:55";
    //date + one day
    $dateTo = $datetime->modify('+1 day');
    $medicDate2 = $datetime->format('d.m.y') . "  7:03";
    $dateTo = $datetime->format('d.m.y');
    $dateGoTo = $datetime->format('d.m.y') . "  7:03";

    print "<div class=\"wrapple\">
    <div class=\"way\">

        <input class=\"ogrn inputStyle\" type=\"text\" name=\"ogrn\" value=\"$drivers[ogrn]\">
        <input class=\"inn inputStyle\" type=\"text\" name=\"inputStyle\" value=\"$drivers[inn]\">
        <input class=\"namberWay inputStyle\" type=\"text\" name=\"namberWay\" value= \"$number\">
        <input class=\"dateIn inputStyle\" type=\"text\" name=\"dateIn\" value=\"$date\">
        <input class=\"dateTo inputStyle\" type=\"text\" name=\"dateTo\" value=\"$dateTo\">
        <input class=\"nameOrganization inputStyle\" type=\"text\" name=\"nameOrganization\" value=\"$drivers[ip]\">
        <input class=\"organizationNamber inputStyle\" type=\"text\" name=\"organizationNamber\" value=\"8-926-969-20-46\">
        <input class=\"adress inputStyle\" type=\"text\" name=\"adress\" value=\"  Матвеевская д.5 k1\">

        <input class=\"ogrn2 inputStyle\" type=\"text\" name=\"ogrn\" value=\"$drivers[ogrn]\">
        <input class=\"model inputStyle\" type=\"text\" name=\"model\" value=\"$drivers[model]\">
        <input class=\"numberCar inputStyle\" type=\"text\" name=\"numberCar\" value=\"$drivers[numberCar]\">
        <input class=\"driver inputStyle\" type=\"text\" name=\"driver\" value=\"$drivers[driver]\">
        <input class=\"certificateSeries inputStyle\" type=\"text\" name=\"certificateSeries\" value=\"$drivers[certificateSeries]\">
        <input class=\"certificateNumber inputStyle\" type=\"text\" name=\"certificateNumber\" value=\"$drivers[certificateNumber]\">
        <input class=\"certificateTo inputStyle\" type=\"text\" name=\"certificateTo\" value=\"$drivers[certificateTo]\">
        <input class=\"licenseSeries inputStyle\" type=\"text\" name=\"licenseSeries\" value=\"$drivers[licenseSeries]\">
        <input class=\"licenseNumber inputStyle\" type=\"text\" name=\"licenseNumber\" value=\"$drivers[licenseNumber]\">
        <input class=\"licenseTo inputStyle\" type=\"text\" name=\"licenseTo\" value=\"\">
        <input class=\"licenseResolution inputStyle\" type=\"text\" name=\"licenseResolution\" value=\"$drivers[licenseResolution]\">
        <input class=\"dispatcherName inputStyle\" type=\"text\" name=\"dispatcherName\" value=\"Уханев С.А.\">
        <input class=\"mechanicName inputStyle\" type=\"text\" name=\"mechanicName\" value=\"Уханев С.А.\">

        <input class=\"dateMechanic inputStyle\" type=\"text\" name=\"dateMechanic\" value=\"$dateMechanic\">
        <input class=\"dateGo inputStyle\" type=\"text\" name=\"dateGo\" value=\"$dateGo\">
        <input class=\"dateGoTo inputStyle\" type=\"text\" name=\"dateGoTo\" value=\"$dateGoTo\">
        <input class=\"mechanicName2 inputStyle\" type=\"text\" name=\"mechanicName2\" value=\"$surName\">
        <input
            class=\"mechanicName3 inputStyle\" type=\"text\" name=\"mechanicName3\" value=\"Уханев С.А.\">
        <input
            class=\"medic inputStyle\" type=\"text\" name=\"medic\" value=\"Рощина С.А.\">
        <input
            class=\"medicDate inputStyle\" type=\"text\" name=\"medicDate\" value=\"$medicDate\">
        <input
            class=\"medicDate2 inputStyle\" type=\"text\" name=\"medicDate2\" value=\"\">
        <input
            class=\"medic2 inputStyle\" type=\"text\" name=\"medic2\" value=\"Рощина С.А.\">
        <input class=\"driverName inputStyle\" type=\"text\" name=\"driverName\" value=\"$surName\">
        <input class=\"driverName2 inputStyle\" type=\"text\" name=\"driverName\" value=\"$surName\">

    </div>
</div>";
}

?>



