<form method="POST">
    <div class="picker">
        <div class="inputDate"><label>Введите дату начала:<input class="dateStart" type="text" name="dateStart"
                                                                 placeholder="d.m.Y"></label>
        </div>

        <div class="checkbox">

            <label class="week"><input type="radio" name="days" value="1">1 дeнь</label>
            <label class="week"><input type="radio" name="days" value="2">2 дня</label>
            <label class="week"><input type="radio" name="days" value="3">3 дня</label>
            <label class="week"><input type="radio" name="days" value="4">4 дня</label>
            <label class="week"><input type="radio" name="days" value="5">5 дней</label>
            <label class="week"><input type="radio" name="days" value="6">6 дней</label>
            <label class="week"><input type="radio" name="days" value="7">7 дней</label>

        </div>
        <div class="checkboxDr">

            <label class="checkD"><input type="radio" name="driver" value="sukach">sukach</label>
            <label class="checkD"><input type="radio" name="driver" value="tsybin">tsybin</label>
        </div>
    </div>
    <input class="submit" type="submit" name="submitDays" value="Создать">

</form>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitDays'])) { ?>
    <div class="info">
        <div class="howMuch"><p>Создано путевых на <?= $_POST['days'] ?> дней</p></div>
        <a class="print-doc" href="javascript:(print());"><img src="img/print.jpg" width="100" height="100"></a>
    </div>
<?php } ?>