<?php require "header.php"; ?>
<?php 
require "../database/Flight.php"; 

$search = isset($_POST['search'])? $_POST['search']:false;

?>
 <div class="searchAndAddGrid">                                                                      <!--блок поиска рейсов-->
                    <div class="searchAndAdd">
                        <img src="/images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск рейса по номеру/направлению.." >
                        
                    </div>
                </div>
            <main>
           <?php 
           $flights = new Flight;
             $flights = $flights -> getFlightsAdmin($search); 

             if ($flights != null) {
             ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHead">
                        <div>Рейс</div>
                        <div class="searchHeadMobileNone">Откуда</div>
                        <div>Вылет</div>
                        <div class="searchHeadMobileNone">Куда</div>
                        <div>Посадка</div>
                        <div>Мест</div>
                        <div>Осталось</div>
                    </div>
                </div>
                <?php 
                
                foreach ($flights as $flight) {
                    $get_name_direction = new Flight;
                    $get_name_direction = $get_name_direction -> getNameDirection($flight[4]);
                ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearch">
                            <div class="tableText1"><?=$flight[0]?></div>
                            <div class="tableText4"><?=$flight[10]?></div>
                            <div class="tableText3">
                                <?php 
                                echo substr($flight[1], 8, 2).".".substr($flight[1], 5, 2).".".substr($flight[1], 2, 2);
                                ?>
                                <br> 
                                <?php 
                                echo substr($flight[1], 11, 5);
                                ?>
                            </div>
                            <div class="tableText6">
                                <?php 
                                echo $get_name_direction['name'];
                                ?>
                            </div>
                            <div class="tableText5">
                                <?php 
                                echo substr($flight[2], 8, 2).".".substr($flight[2], 5, 2).".".substr($flight[2], 2, 2);
                                ?>
                                <br> 
                                <?php 
                                echo substr($flight[2], 11, 5);
                                ?>
                            </div>
                            <div><?=$flight[7]?></div>
                            <div><?=$flight[8]?></div>
                            <a href="crud/adminFlightStatusEdit.php?number=<?=$flight[0]?>" class="editButtons"> <img src="../images/edit.png" alt="редактировать" class="editButtons"> </a>
                            <div class="code1 tableText9">(<?=$flight[11]?>)</div>
                            <div class="code2 tableText10">(<?php 
                                echo $get_name_direction['code_airport'];
                                ?>)</div>
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                else {
                ?>
                <div class="emptyGrid grid" id="emptyBlock">                   
                     <div class="empty">Таких рейсов нет..</div>
                </div>
                <?php 
                }
                ?>
                
                <!-- <div class="gridNew resultSearchGrid">
                    <div class="resultSearch">
                       <div class="wrapResultSearch">
                           <div class="tableText1">MA710001</div>
                           <div class="tableText4">Уфа</div>
                           <div class="tableText3">30.10.23 <br> 05:00</div>
                           <div class="tableText6">Нижний Новгород</div>
                           <div class="tableText5">30.10.23 <br> 06:50</div>
                           <div>176</div>
                           <div>170</div>
                           <img src="../images/edit.png" alt="редактировать" class="editButtons">
                           <div class="code1 tableText9">(UFA)</div>
                           <div class="code2 tableText10">(GOJ)</div>
                       </div>
                    </div>
               </div>
               <div class="voidSmall"></div>
               <div class="gridNew resultSearchGrid">
                <div class="resultSearch">
                   <div class="wrapResultSearch">
                       <div class="tableText1">MA710002</div>
                       <div class="tableText4">Уфа</div>
                       <div class="tableText3">30.10.23 <br> 20:00</div>
                       <div class="tableText6">Нижний Новгород</div>
                       <div class="tableText5">30.10.23 <br> 21:50</div>
                       <div>176</div>
                       <div>175</div>
                       <img src="../images/edit.png" alt="редактировать" class="editButtons">
                       <div class="code1 tableText9">(UFA)</div>
                       <div class="code2 tableText10">(GOJ)</div>
                   </div>
                </div>
           </div> -->
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
        url: 'searchFlightsBoard.php',         /* Куда отправить запрос */
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