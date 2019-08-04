<?php if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addDriver'])){
    $name = $_POST['name'];
    $ogrn = $_POST['ogrn'];
    $inn = $_POST['inn'];
    $ip = $_POST['ip'];
    $driver = $_POST['driver'];
    $model = $_POST['model'];
    $numberCar = $_POST['numberCar'];
    $certificateSeries = $_POST['certificateSeries'];
    $certificateNumber = $_POST['certificateNumber'];
    $certificateTo = $_POST['certificateTo'];
    $licenseSeries = $_POST['licenseSeries'];
    $licenseNumber = $_POST['licenseNumber'];
    $licenseResolution = $_POST['licenseResolution'];

    //внимание!!!! нет проверки





    $write = " $$name = [
        'name' => '$name',
        'ogrn' => '$ogrn',
        'inn'=> '$inn',
        'ip' => '$ip',
        'driver' => '$driver',
        'model' => '$model',
        'numberCar' => '$numberCar',
        'certificateSeries' => '$certificateSeries',
        'certificateNumber' => '$certificateNumber',
        'certificateTo' => '$certificateTo',
        'licenseSeries' => '$licenseSeries',
        'licenseNumber' => '$licenseNumber',
        'licenseResolution' => '$licenseResolution',];";

   }


function  writeDriver($textLog) {
    $file = 'elems/driver.php';
    $fOpen = fopen($file, 'a');
    $textLog .= "\n";
    fwrite($fOpen, $textLog);
    fclose($fOpen);
}



//   var_dump($driverTest);
    ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .addDriver {
            width: 500px;
            margin: 0 auto;
            border:1px solid black;
            padding: 5px;


    </style>
    <title>Заполните форму</title>
</head>
<body>
<div class="addDriver">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1"> Введите ИМЯ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value=""
                   aria-describedby="emailHelp" placeholder="ivan">
        </div> <div class="form-group">
            <label for="exampleInputEmail1"> Введите ogrn</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="ogrn" value=""
                   aria-describedby="emailHelp" placeholder="318366800000007">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите inn</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="inn" value=""
                   aria-describedby="emailHelp" placeholder="312000488634">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите ИП</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ip" value=""
                   aria-describedby="emailHelp" placeholder="ИП Иванов А.Ю.">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите фамилию и отчество водителя</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="driver" value=""
                   aria-describedby="emailHelp" placeholder="Иванов Анатолий Юрьевич">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите model авто</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="model" value=""
                   aria-describedby="emailHelp" placeholder="ХЕНДАЙ Солярис">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите numberCar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="numberCar" value=""
                   aria-describedby="emailHelp" placeholder="A000XC777">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите серию в/у</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="certificateSeries" value=""
                   aria-describedby="emailHelp" placeholder="31 25">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите номер в/у</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="certificateNumber" value=""
                   aria-describedby="emailHelp" placeholder="868364">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите дату окончания в/у</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="certificateTo" value=""
                   aria-describedby="emailHelp" placeholder="10.06.2026">
        </div>

  <div class="form-group">
            <label for="exampleInputEmail1"> Введите серию лицензии такси</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="licenseSeries" value=""
                   aria-describedby="emailHelp" placeholder="MO">
        </div>

 <div class="form-group">
            <label for="exampleInputEmail1"> Введите номер разрешения</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="licenseNumber" value=""
                   aria-describedby="emailHelp" placeholder="226138">
        </div>

 <div class="form-group">
            <label for="exampleInputEmail1"> Введите разрешения</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="licenseResolution" value=""
                   aria-describedby="emailHelp" placeholder="234861">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="addDriver">Submit</button>
        </div>
    </form>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>


