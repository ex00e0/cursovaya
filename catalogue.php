<?php require "header.php"; ?>
<?php require "database/Flight.php";
require "database/ClassT.php"; ?>
<?php
$from = isset($_GET['from'])? $_GET['from']:false;
$to = isset($_GET['to'])? $_GET['to']:false;
$there = isset($_GET['there'])? $_GET['there']:false;
$back = isset($_GET['back'])? $_GET['back']:false;
$adults = isset($_GET['adults'])? $_GET['adults']:false;
$children = isset($_GET['children'])? $_GET['children']:false;
$flights = new Flight;
$flights = $flights -> getFlightsCatalogue($from, $to, $there, $back, $adults, $children);
?>
        <div class="voidCatalogue"></div>
        <main>
        <section>                                                                               <!--блок каталога-->
        
    <div>
        <?php
        if ($flights != null) {
        ?>
        <div class="headlineGrid grid"> 
            <h1 class="headline headlineCol2">Выберите нужный рейс и класс</h1>
        </div>
        <?php
        foreach ($flights as $flight) {
        ?>
         <div class="grid flightGrid">
            <div class="flight">Рейс <span class="flightNo"><?=$flight[0]?></span></div>
        </div>
        <div class="grid flightInfoGrid">
            <div class="flightInfo">
                <div class="flightBlockDate">
                    <div class="flightDateRow1 flightGray">
                        <?php
                            $day_week = date('w', strtotime($flight[1]));
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
                        echo substr($flight[1], 8, 2);
                    ?></div>
                    <div class="flightDateRow3">
                        <?php
                        $case = substr($flight[1], 5, 2);
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
                    <div class="flightFromToRow1"><?=substr($flight[1], 11, 5)?></div>
                    <div class="flightGray flightFromToRow2">
                        <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[3]);
                          echo $get_name_direction['name'];
                    
                    ?></div>
                    <div class="flightGray flightFromToRow3">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[3]);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?>
                    </div>
                </div>
                <div class="flightBlockInWay">
                    <img class="flightImgInWay" src="../images/vputi2.png" alt="самолет в пути">
                    <div class="flightInWay">В пути 
                        <?php
                        $way_timestamp =  strtotime($flight[2])-strtotime($flight[1]);
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
                    <div class="flightFromToRow1"><?=substr($flight[2], 11, 5)?></div>
                    <div class="flightGray flightFromToRow2">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[4]);
                          echo $get_name_direction['name'];
                    
                    ?>
                    </div>
                    <div class="flightGray flightFromToRow3">
                    <?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[4]);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?>
                    </div>
                </div>
                <div class="flightBlockClass">
                    <?php 
                    $count_class = 0;
                    $classes = new ClassT;
                    $classes = $classes -> getClasses();
                    if ($classes != null) {
                        foreach ($classes as $class) {
                    ?>
                        <div class="flightClass<?php if ($count_class == 0) {echo "Minimum";} 
                                                        else if ($count_class == 1) {echo "Econom";}
                                                        else if ($count_class == 2) {echo "Business";} ?>"><?=$class[1]?></div>
                         <a href="ticket.php?number=<?=$flight[0]?>&class=<?=$class[0]?>&from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?=$back?>&adults=<?=$adults?>&children=<?=$children?>" class="blueButton button<?php if ($count_class == 0) {echo "Minimum";} 
                                                        else if ($count_class == 1) {echo "Econom";}
                                                        else if ($count_class == 2) {echo "Business";} ?> buttonClass"><?=$class[4]?> ₽</a>
                    <?php
                        $count_class++;
                        }
                    ?>
                        
                        <!-- <div class="flightClassEconom">Эконом</div>
                        <div class="flightClassBusiness">Бизнес</div>
                       
                        <a href="ticket.php?number=<?=$flight[0]?>&class=Эконом&from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?=$back?>&adults=<?=$adults?>&children=<?=$children?>" class="blueButton buttonEconom buttonClass">8000 ₽</a>
                        <a href="ticket.php?number=<?=$flight[0]?>&class=Бизнес&from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?=$back?>&adults=<?=$adults?>&children=<?=$children?>" class="blueButton buttonBusiness buttonClass">16000 ₽</a> -->
                    <?php
                    }
                    ?>
                    
                    <!-- <button class="blueButton buttonEconom buttonClass">8000 ₽</button>
                    <button class="blueButton buttonBusiness buttonClass">16000 ₽</button> -->
                </div>
            </div>
        </div>
    </div>
        <div class="voidCatalogue"></div>
    <div>
        <?php
        } }
        else {
            echo " <div class='headlineGrid grid'> 
            <h1 class='noFlights headlineCol2'>Упс, таких рейсов нет. Возможно, вы указали неверные данные для поиска</h1>
        </div>";
        }
        ?>
       
        <!-- <div class="grid flightGrid">
            <div class="flight">Рейс <span class="flightNo">MA710001</span></div>
        </div>
        <div class="grid flightInfoGrid">
            <div class="flightInfo">
                <div class="flightBlockDate">
                    <div class="flightDateRow1 flightGray">пн</div>
                    <div class="flightDateRow2">30</div>
                    <div class="flightDateRow3">октября</div>
                </div>
                <div class="flightBlockFrom">
                    <div class="flightFromToRow1">05:00</div>
                    <div class="flightGray flightFromToRow2">Уфа</div>
                    <div class="flightGray flightFromToRow3">(UFA)</div>
                </div>
                <div class="flightBlockInWay">
                    <img class="flightImgInWay" src="../images/vputi2.png" alt="самолет в пути">
                    <div class="flightInWay">В пути 1ч 50мин</div>
                </div>
                <div class="flightBlockTo">
                    <div class="flightFromToRow1">06:50</div>
                    <div class="flightGray flightFromToRow2">Нижний Новгород</div>
                    <div class="flightGray flightFromToRow3">(GOJ)</div>
                </div>
                <div class="flightBlockClass">
                    <div class="flightClassMinimum">Минимум</div>
                    <div class="flightClassEconom">Эконом</div>
                    <div class="flightClassBusiness">Бизнес</div>
                    <button class="blueButton buttonMinimum buttonClass">6000 ₽</button>
                    <button class="blueButton buttonEconom buttonClass">8000 ₽</button>
                    <button class="disabledButton buttonBusiness">Нет мест</button>
                </div>
            </div>
        </div>
    </div>
        <div class="voidCatalogue"></div>
    <div>
        <div class="grid flightGrid">
            <div class="flight">Рейс <span class="flightNo">MA710002</span></div>
        </div>
        <div class="grid flightInfoGrid">
            <div class="flightInfo">
                <div class="flightBlockDate">
                    <div class="flightDateRow1 flightGray">пн</div>
                    <div class="flightDateRow2">30</div>
                    <div class="flightDateRow3">октября</div>
                </div>
                <div class="flightBlockFrom">
                    <div class="flightFromToRow1">20:00</div>
                    <div class="flightGray flightFromToRow2">Уфа</div>
                    <div class="flightGray flightFromToRow3">(UFA)</div>
                </div>
                <div class="flightBlockInWay">
                    <img class="flightImgInWay" src="../images/vputi2.png" alt="самолет в пути">
                    <div class="flightInWay">В пути 1ч 50мин</div>
                </div>
                <div class="flightBlockTo">
                    <div class="flightFromToRow1">21:50</div>
                    <div class="flightGray flightFromToRow2">Нижний Новгород</div>
                    <div class="flightGray flightFromToRow3">(GOJ)</div>
                </div>
                <div class="flightBlockClass">
                    <div class="flightClassMinimum">Минимум</div>
                    <div class="flightClassEconom">Эконом</div>
                    <div class="flightClassBusiness">Бизнес</div>
                    <button class="blueButton buttonMinimum buttonClass">6000 ₽</button>
                    <button class="blueButton buttonEconom buttonClass">8000 ₽</button>
                    <button class="blueButton buttonBusiness buttonClass">16000 ₽</button>
                </div>
            </div> 
        </div> 
    </div>-->
        <div class="voidCatalogueHalf"></div>
        <div class="grid backGrid">
            <div class="gridForABack">                                                                         <!--блок возвращения на прошлые страницы-->
                <a href="index.php" id="specialCat">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к поиску</div>
                </a>
            </div>
        </div>
    </section>
    </main>
         <div class="void"  id="specialVoidCat"></div>
         <div class="voidCatalogueHalf" id="specialVoidCatMobile"></div>
            <?php require "footer.php"; ?>
<?php if (!isset($_SESSION['user'])) {
?>
<script src="../js/script.js"> </script>
<?php
}
?>
                                                              <!--подключение javascript-->
        <script src="../js/script3(catalogue).js"> </script>
    </body>
</html>