<?php require "../../header.php"; ?>
<?php 
require "../../../database/Direction.php"; 

$id = isset($_GET['id'])? $_GET['id']:false; 

if ($id) {
    $direction = new Direction;
    $direction = $direction -> getDirectionInfo($id);
}
?>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="../directions.php" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        <a href='deleteDirection.php?id=<?=$direction['id']?>' class="a-delete-admin-flight"><div class="deleteFlightText">Удалить направление</div>
                        <img src="/images/xred.png" alt="плюс" class="admIcon"></a>
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight" action="directionEdit.php" method="post" enctype="multipart/form-data">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Общая информация</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$direction['id']?>" class="inputAdmin adminCol1" readonly name="id">
                            <label class="labelAdmin adminCol1">Номер направления</label>
                            <input type="text" required value="<?=$direction['name']?>" class="inputAdmin adminCol2" name="name">
                            <label class="labelAdmin adminCol2">Название</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                        <input type='text' class="inputAdmin adminCol1" name="code" value="<?=$direction['code_airport']?>" required maxlength="3">
                              
                              <!-- <input type="text" value="Уфа" class="inputAdmin adminCol1"> -->
                              <label class="labelAdmin adminCol1">Код аэропорта</label>
                              <!-- <input type="file" id="file" name="image" required>
                              <div onclick="file.click()" class="buttonFileServ" id="inputAcc-image">Загрузить..</div>
                            
                              <label class="labelAdmin adminCol2">Изображение</label> -->
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
