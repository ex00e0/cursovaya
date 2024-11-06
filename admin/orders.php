<?php require "header.php"; ?>

<?php 
require "../database/Order.php"; 

$search = isset($_POST['search'])? $_POST['search']:false;

?>
 <div class="searchAndAddGrid">                                                                      <!--блок поиска рейсов-->
                    <div class="searchAndAdd">
                        <img src="/images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск заказа по номеру.." >
                       
                    </div>
                </div>
            <main>
            <?php 
           $active_orders = new Order;
           $active_orders = $active_orders -> getAllOrders($search);
           if ($active_orders != null) {
        ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadOrdersAdmin">
                        <div>Номер</div>
                        <div class="searchHeadMobileNone">Дата</div>
                        <div>Количество билетов</div>
                        <div class="searchHeadMobileNone">Номер рейса</div>
                        <div>Сумма</div>
                    </div>
                </div>
                <?php 
                
                foreach ($active_orders as $order) {
                ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchOrdersAdmin">
                            <div class="tableText1"><?=$order[0]?></div>
                            <div class="tableText4"> <?php 
                                echo substr($order[2], 8, 2).".".substr($order[2], 5, 2).".".substr($order[2], 2, 2);
                                ?>
                                <br> 
                                <?php 
                                echo substr($order[2], 11, 5);
                                ?></div>
                            <div class="tableText3"><?=$order[1]?></div>
                            <div class="tableText5">
                               <?php
                               $flight_no = new Order;
                               $flight_no = $flight_no -> getFlightNo($order[0]);
                               echo $flight_no;
                               ?>
                            </div>
                            <div><?=$order[5]?> ₽</div>
                            <a href="order_extr.php?order=<?=$order[0]?>&flight=<?=$flight_no?>&sum=<?=$order[5]?>">Подробнее..</a>
                            <a href="crud/deleteOrder.php?number=<?=$order[0]?>" class="editButtons delete-order-sp"> <img src="/images/xred.png" alt="редактировать" class="editButtons"> </a>
                            <a href="crud/editStatusOrder.php?number=<?=$order[0]?>" class="editButtons delete-order-sp"> <img src="/images/edit.png" alt="редактировать" class="editButtons"> </a>
                            
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
               
                else {
                ?>
                <div class="emptyGridAdmin grid" id="emptyBlock">                   
                     <div class="empty">Таких заказов нет..</div>
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
        url: 'searchOrders.php',         /* Куда отправить запрос */
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