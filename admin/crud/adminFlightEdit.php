<?php require "../header.php"; ?>
<?php 
require "../../database/Flight.php"; 

$number = isset($_GET['number'])? $_GET['number']:false; 

if ($number) {
    $flight = new Flight;
    $flight = $flight -> getFlightInfo($number);
}
?>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="../index.php" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        <a href='deleteFlight.php?number=<?=$flight['number']?>' class="a-delete-admin-flight"><div class="deleteFlightText">Удалить рейс</div>
                        <img src="/images/xred.png" alt="плюс" class="admIcon"></a>
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight" action="flightEdit.php" method="post">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Общая информация</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$flight['number']?>" class="inputAdmin adminCol1" readonly name="number">
                            <label class="labelAdmin adminCol1">Номер рейса</label>
                            <input type="text" required value="<?=$flight['airplane_number']?>" class="inputAdmin adminCol2" name="airplane_number">
                            <label class="labelAdmin adminCol2">Воздушное судно</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <select class="inputAdmin adminCol1" name="departure">
                                <?php 
                                $directions = new Flight;
                                $directions = $directions -> getAllDirections();
                                foreach ($directions as $direction) {
                                    if ($direction[0] == $flight['departure']) {
                                ?>
                                     <option value="<?=$direction[0]?>" selected><?=$direction[1]."(".$direction[2].")"?></option>
                                <?php
                                    } else {
                                ?>
                                    <option value="<?=$direction[0]?>"><?=$direction[1]."(".$direction[2].")"?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <!-- <input type="text" value="Уфа" class="inputAdmin adminCol1"> -->
                            <label class="labelAdmin adminCol1">Откуда</label>
                            <input type="datetime-local" required min="<?php echo substr(date(DATE_ATOM, mktime(0)), 0, 16); ?>" value="<?=substr($flight['date_dep'], 0, 10)."T".substr($flight['date_dep'], 11, 5)?>" class="inputAdmin adminCol2" name="date_dep">
                            <label class="labelAdmin adminCol2">Дата вылета</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                        <select class="inputAdmin adminCol1" name="arrival">
                                <?php 
                                $directions = new Flight;
                                $directions = $directions -> getAllDirections();
                                foreach ($directions as $direction) {
                                    if ($direction[0] == $flight['arrival']) {
                                ?>
                                     <option value="<?=$direction[0]?>" selected><?=$direction[1]."(".$direction[2].")"?></option>
                                <?php
                                    } else {
                                ?>
                                    <option value="<?=$direction[0]?>"><?=$direction[1]."(".$direction[2].")"?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <!-- <input type="text" value="Нижний Новгород" class="inputAdmin adminCol1"> -->
                            <label class="labelAdmin adminCol1">Куда</label>
                            <input type="datetime-local" required min="<?php echo substr(date(DATE_ATOM, mktime(0)), 0, 16); ?>" value="<?=substr($flight['date_arr'], 0, 10)."T".substr($flight['date_arr'], 11, 5)?>" class="inputAdmin adminCol2" name="date_arr">
                            <label class="labelAdmin adminCol2">Дата посадки</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Места</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$flight['places']?>" min="1" max="250" class="inputAdmin adminCol1" name="places">
                            <label class="labelAdmin adminCol1">Количество мест</label>
                            <!-- <input type="text" value="8" class="inputAdmin adminCol2">
                            <label class="labelAdmin adminCol2">Бизнес-класс</label> -->
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <!--<div class="gridEdit headlineEditGrid">
                        <div>Дополнительные услуги</div>
                    </div> -->
                    <!-- <div class="gridEdit headlineEditGrid">
                        <div>Условия: бизнес-класс</div>
                    </div>
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="стандарт бизнес" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Условия: эконом-класс</div>
                    </div>
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="вода" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Условия: минимум-класс</div>
                    </div> 
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="-" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>  -->
                    <div class="gridEdit headlineEditGrid">
                        <button class="blueButton buttonSaveEditFlight">Сохранить</button>
                    </div>
                </form>
           <div class="voidCatalogueHalf"></div>
            </main>
            <div id="sideMess">
                <div id="sideMessText">Допустим, это сообщение?</div>
                <img src="/images/plus4.png" id="closeMess">
            </div>
        <script src="../js/script9(admin).js"> </script>                                 <!--подключение javascript-->
        <script src="../js/scriptForInputWithValue.js"></script>
        <?php
if (isset($_SESSION['mess'])) {
    if (isset($_SESSION['mess']['done'])) {
        echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['done']."'; 
        document.getElementById('sideMess').style.width = '40vmax'; </script>";
        echo "<script src='/js/sideMess.js'></script>";
    }
    unset($_SESSION['mess']);
}
?>
    </body>
</html>
