<?php 
require "../../database/ClassT.php"; 
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
        <script src="../js/script9(admin).js"> </script>  