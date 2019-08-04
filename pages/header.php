<? if (!isset ($_GET['addDriver'])): ?>
    <form method="POST">
        <div class="picker ">
            <div class="inputDate"><label>Введите дату начала:<input class="dateStart" type="text" name="dateStart"
                                                                     placeholder="d.m.Y"></label>
            </div>
        </div>
        <div class="bootstrap ">
            <div class="vibor ">
                <div class="btn-group-toggle  " data-toggle="buttons">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="1"> 1
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="2"> 2
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="3"> 3
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="4"> 4
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="5"> 5
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="6"> 6
                        </label></div>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="days" value="7"> 7
                        </label></div>
                </div>
            </div>
            <div class="checkboxDr  ">
                <div class="btn-group btn-group-toggle centr" data-toggle="buttons">
                    <label class="btn btn-outline-secondary mr-2  ">
                        <input type="radio" name="driver" value="tsybin" autocomplete="off"> Tsybin
                    </label>
                    <label class="btn btn-outline-secondary mr-2 ">
                        <input type="radio" name="driver" value="sukach" autocomplete="off"> Sukach
                    </label>
                    <label class="btn btn-outline-secondary mr-2 ">
                        <input type="radio" name="driver" value="major" autocomplete="off"> Major
                    </label>
                </div>
            </div>
            <div class="d">
                <button type="submit" class="btn a
            btn-outline-secondary btn-l bcontainer-fluid"
                        name="submitDays">Создать
                </button>
            </div>
        </div>
        <div>
        </div>
        </div>
    </form>
    <? if (empty($_POST) and empty($_GET)): ?>
        <div class="addNewDriver"><a title="Добавить нового водителя" href="?addDriver"><img src="img/addDriver.png"
                                                                                             width="100"
                                                                                             alt="Добавить нового водителя"></a>
        </div>
    <? endif; ?>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitDays'])) { ?>
        <div class="info">
            <div class="howMuch"><p>Создано путевых на <?php echo $wayBill->days($_POST['days']) ?> </p></div>
            <a class="print-doc" href="javascript:(print());"><img src="img/printN.png" width="100" height="100"></a>
        </div>
    <?php } ?>
<? endif; ?>

