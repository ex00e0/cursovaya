<?php 
require "../../database/Service.php";
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
        <script src="../js/script9(admin).js"> </script>  