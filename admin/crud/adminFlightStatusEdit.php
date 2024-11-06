<?php require "../header.php"; ?>
<?php 
require "../../database/Flight.php"; 

$number = isset($_GET['number'])? $_GET['number']:false; 

if ($number) {
    $flight = new Flight;
    $flight = $flight -> getFlightStatusInfo($number);
}
?>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="../board.php" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight" action="flightStatusEdit.php" method="post">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Информация о статусе рейса</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$flight['number']?>" class="inputAdmin adminCol1" readonly>
                            <input type="hidden" value="<?=$flight['status_id']?>" name="status_id">
                            <label class="labelAdmin adminCol1">Номер рейса</label>
                            <select class="inputAdmin adminCol2" name="status">
                                <?php
                                $status_list = new Flight;
                                $status_list = $status_list -> getStatusList();
                                foreach ($status_list as $list) {
                                    if ($list[1] == $flight['status']){
                                    ?>
                                        <option value='<?=$list[1]?>' selected><?=$list[1]?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value='<?=$list[1]?>'><?=$list[1]?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                            <label class="labelAdmin adminCol2">Текущий статус</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" min="1" max="10" value="<?php if ($flight['terminal'] != null) echo $flight['terminal'];?>" class="inputAdmin adminCol1" name="terminal">
                            <label class="labelAdmin adminCol1">Терминал</label>
                            <input type="number" min="1" max="100" value="<?php if ($flight['gate'] != null) echo $flight['gate'];?>" class="inputAdmin adminCol2" name="gate">
                            <label class="labelAdmin adminCol2">Выход</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    
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
