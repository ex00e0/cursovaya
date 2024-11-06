<?php session_start(); 
      if (!isset($_SESSION['user'])) {
        header("Location: /");
      } 

?>
<?php require "header.php"; ?>
<?php require "database/Order.php"; 
require "database/Flight.php";
require "database/ClassT.php";
require "database/Service.php";

$order = isset($_GET['order'])?$_GET['order']:false;
$sum = isset($_GET['sum'])?$_GET['sum']:false;
$flight_no = isset($_GET['flight'])?$_GET['flight']:false;
$flight = new Flight;
$flight = $flight -> getFlightInfo($flight_no);

$aviatickets = new Order;
$aviatickets = $aviatickets -> getAviatickets($order);

$aviatickets_services = new Order;
$aviatickets_services = $aviatickets_services -> getAviatickets_services($order);

$class = $aviatickets[0][2];
$class_info = new ClassT;
$class_info = $class_info -> getClassInfo($class);

?>
        <div class="voidCatalogue noForMobileAcc"></div>
       
       <main>
       <div class="grid backGrid">                                                           <!--блок возвращения на предыдущие страницы-->
            <div class="gridForABack">
                <a href="account.php">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch width-more">Вернуться к аккаунту</div>
                </a>
                
            </div>
        </div>
        <div class="voidCatalogue noForMobileAcc"></div>
       <?php
        if ($flight != null) {
        ?>
        <div class="headlineGrid grid">                                                                  <!--блок краткой информации о билете, "Вы выбрали"-->
            <h1 class="headline headlineCol2">Информация о рейсе </h1>
        </div>
        <div class="grid flightInfoGrid">
            <div class="flightInfo">
                <div class="flightBlockDate">
                    <div class="flightDateRow1 flightGray">
                        <?php
                            $day_week = date('w', strtotime($flight['date_dep']));
                        switch ($day_week) {
                            case '1': 
                                $day_week = 'пн';
                                break;
                                case '2': 
                                    $day_week = 'вт';
                                    break;
                                    case '3': 
                                        $day_week = 'ср';
                                        break;
                                        case '4': 
                                            $day_week = 'чт';
                                            break;
                                            case '5': 
                                                $day_week = 'пт';
                                                break;
                                                case '6': 
                                                    $day_week = 'сб';
                                                    break;
                                                    case '0': 
                                                        $day_week = 'вс';
                                                        break;
                                                        
                        }
                        echo $day_week;
                        ?>
                    </div>
                    <div class="flightDateRow2"><?php
                        echo substr($flight['date_dep'], 8, 2);
                    ?></div>
                    <div class="flightDateRow3">
                        <?php
                        $case = substr($flight['date_dep'], 5, 2);
                        switch ($case) {
                            case '01': 
                                $case = 'января';
                                break;
                                case '02': 
                                    $case = 'февраля';
                                    break;
                                    case '03': 
                                        $case = 'марта';
                                        break;
                                        case '04': 
                                            $case = 'апреля';
                                            break;
                                            case '05': 
                                                $case = 'мая';
                                                break;
                                                case '06': 
                                                    $case = 'июня';
                                                    break;
                                                    case '07': 
                                                        $case = 'июля';
                                                        break;
                                                        case '08': 
                                                            $case = 'августа';
                                                            break;
                                                            case '09': 
                                                                $case = 'сентября';
                                                                break;
                                                                case '10': 
                                                                    $case = 'октября';
                                                                    break;
                                                                    case '11': 
                                                                        $case = 'ноября';
                                                                        break;
                                                                        case '12': 
                                                                            $case = 'декабря';
                                                                            break;
                                                        
                        }
                        echo $case;
                        ?>
                    </div>
                </div>
                <div class="flightBlockFrom">
                    <div class="flightFromToRow1"><?=substr($flight['date_dep'], 11, 5)?></div>
                    <div class="flightGray flightFromToRow2">
                        <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight['departure']);
                          echo $get_name_direction['name'];
                    
                    ?></div>
                    <div class="flightGray flightFromToRow3">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight['departure']);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?>
                    </div>
                </div>
                <div class="flightBlockInWay">
                    <img class="flightImgInWay" src="../images/vputi2.png" alt="самолет в пути">
                    <div class="flightInWay">В пути 
                        <?php
                        $way_timestamp =  strtotime($flight['date_arr'])-strtotime($flight['date_dep']);
                        $hour = intdiv($way_timestamp/60, 60);
                        $min = ($way_timestamp/60)%60;
                        echo $hour;
                        echo "ч ";
                        if ($min != 0) {
                            echo $min;
                            echo "мин";
                        }
                        ?>
                        </div>
                </div>
                <div class="flightBlockTo">
                    <div class="flightFromToRow1"><?=substr($flight['date_arr'], 11, 5)?></div>
                    <div class="flightGray flightFromToRow2">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight['arrival']);
                          echo $get_name_direction['name'];
                    
                    ?>
                    </div>
                    <div class="flightGray flightFromToRow3">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight['arrival']);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?>
                    </div>
                </div>
                <?php if ($class_info != null) { ?>
                <div class="flightBlockClass">
                    
                    <div class="flightNoTick">Номер рейса</div>
                    <div class="flightClassTick">Класс</div>
                    <div class="flightPrice"><?=$class_info['price']?> ₽</div>
                    <div class="flightNoName"><?=$flight['number']?></div>
                    <div class="flightClassName"><?=$class_info['name']?></div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
        <div class="voidCatalogue"></div>
    <div>
        <?php
        } 
        ?>
        <div class="headlineGrid grid">                                                                
            <h1 class="headline headlineCol2">Информация о пассажирах</h1>
        </div>
        <div class="grid searchHeadGridSp">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadOrders">
                        <div>Серия документа</div>
                        <div class="searchHeadMobileNone">Номер документа</div>
                        <div>Фамилия</div>
                        <div class="searchHeadMobileNone">Имя</div>
                        <div>Отчество</div>
                        <div>Дата рождения</div>
                    </div>
                </div>
        <?php 
        foreach ($aviatickets as $user) {
            $user_id = $user[4];
           $user_info = new User;
           $user_info = $user_info -> getInfoForOrders($user_id);
           if ($user_info != null) {
        ?>

                
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchOrders">
                            <div class="tableText1"><?=$user_info['doc_series']?></div>
                            <div ><?=$user_info['doc_number']?></div>   
                            <div ><?=$user_info['surname']?></div>   
                            <div ><?=$user_info['name']?></div>   
                            <div ><?=$user_info['patronimyc']?></div>  
                            <div >
                            <?php 
                                echo substr($user_info['birth'], 8, 2).".".substr($user_info['birth'], 5, 2).".".substr($user_info['birth'], 2, 2);
                                ?>  </div>                          
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                ?>
        </div>
        <div class="voidCatalogue"></div>
    <div>
       <div class="headlineGrid grid">                                                                
            <h1 class="headline headlineCol2">Информация об услугах</h1>
        </div>
           <?php 
          

             if ($aviatickets_services != null) {
            ?>
            <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadServ">
                        <div></div>
                        <div>Изображение</div>
                        <div>Название</div>
                        <div>Описание</div>
                        <div>Цена</div>
                    </div>
                </div>
            <?php
                foreach ($aviatickets_services as $serv) {
                    $services = new Service;
                    $services = $services -> getServiceInfo($serv[2]); 
                
             ?>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearchServ">
                            <div class="tableText1"></div>
                            <img src='/images/services/<?=$services['image']?>' class='img-serv'>
                            <div class="tableText3">
                            <?=$services['name']?>
                            </div>
                            <div class="tableText6" id="spText">
                            <?=$services['description']?>
                            </div>
                            <div class="tableText5">
                            <?php
                            $count = 0;
                            if ($services['price'] != null) {
                                echo $services['price'];
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
                           
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }  else {
                ?>  
                <div class="emptyGridAdmin grid" id="emptyBlock">                     <!--блок "Пока пусто.." для вкладок, где информации нет-->
                      <div class="empty">Вы не выбрали услуг</div>
                    </div>
                <?php } ?>
                <div class="voidCatalogue"></div>
                <div class="headlineGrid grid">                                                                
            <h1 class="headline headlineCol2 just-s-end">Итого: <?=$sum?> ₽</h1>
        </div>  
       </main>
       
         <div class="void"></div>
        <?php require "footer.php"; ?>

    </body>
</html>