<?php require "../../header.php"; ?>
<?php 
require "../../../database/ClassT.php"; 

$id = isset($_GET['id'])? $_GET['id']:false; 

if ($id) {
    $class = new ClassT;
    $class = $class -> getClassInfo($id);
}
?>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="../classes.php" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        <a href='deleteClass.php?id=<?=$class['id']?>' class="a-delete-admin-flight"><div class="deleteFlightText">Удалить класс</div>
                        <img src="/images/xred.png" alt="плюс" class="admIcon"></a>
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight" action="classEdit.php" method="post" enctype="multipart/form-data">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Общая информация</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="number" value="<?=$class['id']?>" class="inputAdmin adminCol1" readonly name="id">
                            <label class="labelAdmin adminCol1">Номер класса</label>
                            <input type="text" required value="<?=$class['name']?>" class="inputAdmin adminCol2" name="name" required>
                            <label class="labelAdmin adminCol2">Название</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type='number' class="inputAdmin adminCol1" name="hand_luggage" value="<?=$class['hand_luggage']?>" required min="0" max="50">
                              
                            <label class="labelAdmin adminCol1">Ручная кладь (кг)</label>
                            <input type='number' class="inputAdmin adminCol2" name="luggage" value="<?=$class['luggage']?>" required min="0" max="50">
                              
                            <label class="labelAdmin adminCol2">Багаж (кг)</label>
                            <!-- <input type="file" id="file" name="image" required>
                            <div onclick="file.click()" class="buttonFileServ" id="inputAcc-image">Загрузить..</div>
                          
                            <label class="labelAdmin adminCol2">Изображение</label> -->
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type='text' class="inputAdmin adminCol1" name="price" value="<?=$class['price']?>" required>
                              
                            <label class="labelAdmin adminCol1">Цена (₽)</label>
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
