<?php 
require "../database/Order.php";  
 $data = $_POST['text'];
$search = isset($data)?$data:false;  

?>
 <!-- <div class="searchAndAddGrid">                                                               
                    <div class="searchAndAdd">
                        <img src="../images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск рейса по номеру/дате/направлению..">
                        <div>Добавить рейс</div>
                        <img src="../images/pluss.png" alt="плюс" class="admIcon" id="admAddFlightButton">
                    </div>
                </div> -->
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
           <div class="voidCatalogueHalf"></div>
            </main>
        <script src="../js/script9(admin).js"> </script>  