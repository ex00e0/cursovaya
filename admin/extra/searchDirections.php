<?php 
require "../../database/Direction.php"; 
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
           $directions = new Direction;
             $directions  = $directions  -> getDirectionsAdmin($search); 

             if ($directions != null) {
             ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadServ">
                        <div>Номер</div>
                        <div>Код аэропорта</div>
                        <div>Название</div>
                    </div>
                </div>
                <?php 
                
                foreach ($directions as $direction) {
                ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchServ">
                            <div class="tableText1"><?=$direction[0]?></div>
                            <div> <?=$direction[2]?></div>
                            <div class="tableText3">
                            <?=$direction[1]?>
                            </div>
                            <div class="tableText6">
                          
                            </div>
                            <div class="tableText5">
                            
                            </div>
                            <a href="crud/adminDirectionEdit.php?id=<?=$direction[0]?>" class="editButtons"> <img src="/images/edit.png" alt="редактировать" class="editButtons"> </a>
                           
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                else {
                ?>
                <div class="emptyGridAdmin grid" id="emptyBlock">                   
                     <div class="empty">Таких направлений нет..</div>
                </div>
                <?php 
                }
                ?>
                <div class="voidCatalogueHalf"></div> 
 </main>
        <script src="../js/script9(admin).js"> </script>  