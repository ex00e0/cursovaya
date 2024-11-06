<?php require "../header.php"; ?>
<?php 
require "../../database/ClassT.php"; 

$search = isset($_POST['search'])? $_POST['search']:false;

?>
 
 <div class="searchAndAddGrid">                                                                      <!--блок поиска рейсов-->
                    <div class="searchAndAdd">
                        <img src="/images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск класса по названию.." >
                        <a href='crud/adminClassAdd.php' class="a-add-admin-flight">
                            <div>Добавить класс</div>
                            <img src="/images/pluss.png" alt="плюс" class="admIcon" id="admAddFlightButton">
                        </a>
                    </div>
                </div>
            <main>
           <?php 
           $classes = new ClassT;
             $classes  = $classes  -> getClassesAdmin($search); 

             if ($classes != null) {
             ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadServ">
                        <div>Номер</div>
                        <div>Название</div>
                        <div>Ручная кладь</div>
                        <div>Багаж</div>
                        <div>Цена</div>
                    </div>
                </div>
                <?php 
                
                foreach ($classes as $class) {
                ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchServ">
                            <div class="tableText1"><?=$class[0]?></div>
                            <div><?=$class[1]?></div>
                            <div class="tableText3">
                            <?=$class[2]?> кг
                            </div>
                            <div class="tableText6">
                            <?=$class[3]?> кг
                            </div>
                            <div class="tableText5">
                            <?=$class[4]?> ₽
                            </div>
                            <a href="crud/adminClassEdit.php?id=<?=$class[0]?>" class="editButtons"> <img src="/images/edit.png" alt="редактировать" class="editButtons"> </a>
                           
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                else {
                ?>
                <div class="emptyGridAdmin grid" id="emptyBlock">                   
                     <div class="empty">Таких классов нет..</div>
                </div>
                <?php 
                }
                ?>
                <div class="voidCatalogueHalf"></div> 
 </main>
 <div id="sideMess">
                <div id="sideMessText">Допустим, это сообщение?</div>
                <img src="/images/plus4.png" id="closeMess">
            </div>
        <script src="../js/script9(admin).js"> </script>     
        <script>
let navS = document.getElementById("admSearchFlight");
let text = "<?php $search ?>";
navS.value = text;
$(document).ready(function() {
  $('#admSearchFlight').on('keyup', getDishes);
});

var getDishes = function(){
    let request_data = $('#admSearchFlight').val();
    $.ajax({
        url: 'searchClasses.php',         /* Куда отправить запрос */
        method: 'post',             /* Метод запроса (post или get) */
        dataType: 'html',         /* Тип данных в ответе (xml, json, script, html). */
        data: {text: request_data},     /* Данные передаваемые в массиве */
        success: function(data){
            $("main").html(data);
        }
    }); 
}
</script>

<?php
if (isset($_SESSION['mess'])) {
    if (isset($_SESSION['mess']['done'])) {
        echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['done']."'; </script>";
        echo "<script src='/js/sideMess.js'></script>";
    }
    if (isset($_SESSION['mess']['no-delete'])) {
        echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['no-delete']."';
                        document.getElementById('sideMess').style.width = '40vmax';
                        document.getElementById('sideMessText').style.fontSize = '1.1vmax'; </script>";
        echo "<script src='/js/sideMess.js'></script>";
    }
    unset($_SESSION['mess']);
}
?>
</body>
</html>