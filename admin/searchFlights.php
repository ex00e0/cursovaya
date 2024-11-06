<?php 
require "../database/Flight.php"; 
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
                    
                            <a href="crud/adminFlightEdit.php?number=<?=$flight[0]?>" class="editButtons"> <img src="../images/edit.png" alt="редактировать" class="editButtons"> </a>
                            
                            <!-- <img src="../images/edit.png" alt="редактировать" class="editButtons"> -->
                            <div class="code1 tableText9">(<?=$flight[11]?>)</div>
                            <div class="code2 tableText10">(<?php 
                                echo $get_name_direction['code_airport'];
                                ?>)</div>
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } 
            }
                else {
                ?>
               <div class='emptyGridAdmin grid' id='emptyBlock'>                   
                     <div class='empty'>Таких рейсов нет..</div>
                </div>
                <?php 
                }
                ?>
           <div class="voidCatalogueHalf"></div>
            </main>
        <script src="../js/script9(admin).js"> </script>  