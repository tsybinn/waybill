<?php

$days = $_POST['days'];
for ($i = 1; $i <= $days; $i++) {
    $namber = $_SESSION['number']++;//session namberWay
    $dateStart = $_POST['dateStart'];
    $min = $i - 1;// in dateTime

    if ($i == 1) {
        $datetime = new DateTime($dateStart);
    } else {
        $datetime = new DateTime(".$dateStart + $min day");
    }
    //date day
    $date = $datetime->format('d.m.y');
    $dateMechanic = $datetime->format('d.m.y') . "  7:00";
    $dateGo = $datetime->format('d.m.y') . "  7:05";
    $medicDate = $datetime->format('d.m.y') . "  7:00";
    //date + one day
    $dateTo = $datetime->modify('+1 day');
    $medicDate2 = $datetime->format('d-m-y') . "  7:03";
    $dateTo = $datetime->format('d-m-y');
    $dateGoTo = $datetime->format('d.m.y') . "  7:03";


    print "<div class=\"wrapple\">
    <div class=\"way\">

        <input class=\"ogrn inputStyle\" type=\"text\" name=\"ogrn\" value=\"318366800091807\">
        <input class=\"inn inputStyle\" type=\"text\" name=\"inputStyle\" value=\"312330488634\">
        <input class=\"namberWay inputStyle\" type=\"text\" name=\"namberWay\" value= \"$namber\">
        <input class=\"dateIn inputStyle\" type=\"text\" name=\"dateIn\" value=\"$date\">
        <input class=\"dateTo inputStyle\" type=\"text\" name=\"dateTo\" value=\"$dateTo\">
        <input class=\"nameOrganization inputStyle\" type=\"text\" name=\"nameOrganization\" value=\"ИП Цыбин А.Ю.\">
        <input class=\"organizationNamber inputStyle\" type=\"text\" name=\"organizationNamber\" value=\"8-926-969-20-46\">
        <input class=\"adress inputStyle\" type=\"text\" name=\"adress\" value=\"  Матвеевская д.5 k1\">

        <input class=\"ogrn2 inputStyle\" type=\"text\" name=\"ogrn\" value=\"318366800091807\">
        <input class=\"model inputStyle\" type=\"text\" name=\"model\" value=\"хендай\">
        <input class=\"numberCar inputStyle\" type=\"text\" name=\"numberCar\" value=\"A611XC777\">
        <input class=\"driver inputStyle\" type=\"text\" name=\"driver\" value=\"Цыбин Анатолий Юрьевич\">
        <input class=\"certificateSeries inputStyle\" type=\"text\" name=\"certificateSeries\" value=\"36 27\">
        <input class=\"certificateNumber inputStyle\" type=\"text\" name=\"certificateNumber\" value=\"868364\">
        <input class=\"certificateTo inputStyle\" type=\"text\" name=\"certificateTo\" value=\"10.06.2026\">
        <input class=\"licenseSeries inputStyle\" type=\"text\" name=\"licenseSeries\" value=\"MO\">
        <input class=\"licenseNumber inputStyle\" type=\"text\" name=\"licenseNumber\" value=\"226138\">
        <input class=\"licenseTo inputStyle\" type=\"text\" name=\"licenseTo\" value=\"\">
        <input class=\"licenseResolution inputStyle\" type=\"text\" name=\"licenseResolution\" value=\"234861\">
        <input class=\"dispatcherName inputStyle\" type=\"text\" name=\"dispatcherName\" value=\"Мавиенко С.А\">
        <input class=\"mechanicName inputStyle\" type=\"text\" name=\"mechanicName\" value=\"Уханев С.А.\">

        <input class=\"dateMechanic inputStyle\" type=\"text\" name=\"dateMechanic\" value=\"$dateMechanic\">
        <input class=\"dateGo inputStyle\" type=\"text\" name=\"dateGo\" value=\"$dateGo\">
        <input class=\"dateGoTo inputStyle\" type=\"text\" name=\"dateGoTo\" value=\"$dateGoTo\">
        <input class=\"mechanicName2 inputStyle\" type=\"text\" name=\"mechanicName2\" value=\"Цыбин А.Ю\">
        <input
            class=\"mechanicName3 inputStyle\" type=\"text\" name=\"mechanicName3\" value=\"Уханев С.А.\">
        <input
            class=\"medic inputStyle\" type=\"text\" name=\"medic\" value=\"Рощина С.А.\">
        <input
            class=\"medicDate inputStyle\" type=\"text\" name=\"medicDate\" value=\"$medicDate\">
        <input
            class=\"medicDate2 inputStyle\" type=\"text\" name=\"medicDate2\" value=\"$medicDate2\">
        <input
            class=\"medic2 inputStyle\" type=\"text\" name=\"medic2\" value=\"Рощина С.А.\">
        <input class=\"driverName inputStyle\" type=\"text\" name=\"driverName\" value=\"Цыбин А.Ю.\">
        <input class=\"driverName2 inputStyle\" type=\"text\" name=\"driverName\" value=\"Цыбин А.Ю.\">

    </div>
</div>";
}

?>



