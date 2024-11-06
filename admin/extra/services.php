<?php require "../header.php"; ?>
<?php 
require "../../database/Service.php"; 

$search = isset($_POST['search'])? $_POST['search']:false;

?>
 
 <div class="searchAndAddGrid">                                                                      <!--блок поиска рейсов-->
                    <div class="searchAndAdd">
                        <img src="/images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск услуги по названию.." >
                        <a href='crud/adminServiceAdd.php' class="a-add-admin-flight">
                            <div>Добавить услугу</div>
                            <img src="/images/pluss.png" alt="плюс" class="admIcon" id="admAddFlightButton">
                        </a>
                    </div>
                </div>
            <main>
           <?php 
           $services = new Service;
             $services = $services -> getServicesAdmin($search); 

             if ($services != null) {
             ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadServ">
                        <div>Номер</div>
                        <div>Изображение</div>
                        <div>Название</div>
                        <div>Описание</div>
                        <div>Цена</div>
                    </div>
                </div>
                <?php 
                
                foreach ($services as $service) {
                ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchServ">
                            <div class="tableText1"><?=$service[0]?></div>
                            <img src='/images/services/<?=$service[4]?>' class='img-serv'>
                            <div class="tableText3">
                            <?=$service[2]?>
                            </div>
                            <div class="tableText6">
                            <?=$service[3]?>
                            </div>
                            <div class="tableText5">
                            <?php
                            $count = 0;
                            if ($service[1] != null) {
                                echo $service[1];
                            } 
                            else {
                                $price = (array) json_decode($service[5]);
                                foreach ($price as $key => $item) {
                                    if ($count == 0) {
                                        echo "от ".$item;
                                    }
                                    $count++;
                                }
                            }
                            ?> ₽
                            </div>
                            <a href="crud/adminServiceEdit.php?number=<?=$service[0]?>" class="editButtons"> <img src="/images/edit.png" alt="редактировать" class="editButtons"> </a>
                           
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                else {
                ?>
                <div class="emptyGridAdmin grid" id="emptyBlock">                   
                     <div class="empty">Таких услуг нет..</div>
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
        url: 'searchServices.php',         /* Куда отправить запрос */
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