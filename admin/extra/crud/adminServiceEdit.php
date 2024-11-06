<?php require "../../header.php"; ?>
<?php 
require "../../../database/Service.php"; 

$number = isset($_GET['number'])? $_GET['number']:false; 

if ($number) {
    $service = new Service;
    $service = $service -> getServiceInfo($number);
}
?>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="../services.php" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        <a href='deleteService.php?number=<?=$service['number']?>' class="a-delete-admin-flight"><div class="deleteFlightText">Удалить услугу</div>
                        <img src="/images/xred.png" alt="плюс" class="admIcon"></a>
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight" action="serviceEdit.php" method="post" enctype="multipart/form-data">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Общая информация</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$service['number']?>" class="inputAdmin adminCol1" readonly name="number">
                            <label class="labelAdmin adminCol1">Номер услуги</label>
                            <input type="text" required value="<?=$service['name']?>" class="inputAdmin adminCol2" name="name">
                            <label class="labelAdmin adminCol2">Название</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type='text' class="inputAdmin adminCol1" name="description" value="<?=$service['description']?>" required>
                              
                            <!-- <input type="text" value="Уфа" class="inputAdmin adminCol1"> -->
                            <label class="labelAdmin adminCol1">Описание</label>
                            <input type="file" id="file" name="image" required>
                            <div onclick="file.click()" class="buttonFileServ" id="inputAcc-image">Загрузить..</div>
                            <!-- <input type="datetime-local" required min="<?php echo substr(date(DATE_ATOM, mktime(0)), 0, 16); ?>" value="<?=substr($flight['date_dep'], 0, 10)."T".substr($flight['date_dep'], 11, 5)?>" class="inputAdmin adminCol2" name="date_dep"> -->
                            <label class="labelAdmin adminCol2">Изображение</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type='text' class="inputAdmin adminCol1" name="price" value="<?=$service['price']?>" required>
                              
                            <!-- <input type="text" value="Уфа" class="inputAdmin adminCol1"> -->
                            <label class="labelAdmin adminCol1">Цена (₽)</label>
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
