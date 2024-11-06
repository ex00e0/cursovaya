<?php session_start(); ?>
<?php require "database/User.php"; 
require "database/Flight.php";
require "database/Service.php"; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset='utf-8'>                  <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                        <!--подключение css-->
        <title>Главная</title>
    </head>
    <body>
         <header id="headerMain">
            <img src="../images/a4.png" id="imgSky" alt="картинка неба">
            <img src="../images/samolet1.png" id="imgAirplane" alt="самолет">
                
            <nav id="navInHeader"  <?php if (isset($_SESSION['user'])) { ?> class="navEnteredUser" <?php } ?>>                                                              <!--навигация, соединенная с шапкой-->
               <img src="../images/a11.png" id="logo" alt="логотип">
               <div id="logoText">Мягкие <br> Авиалинии</div>
               <div id="navigation">
                   <div id="curPage">
                       <div id="blueLine"></div>
                       <a href="index.php" id="curHover">Главная</a>
                   </div>
                   <div><a href="board.php" class="navBlue">Табло рейсов</a></div>
                   <div><a href="info.php"  class="navBlue">Информация</a></div>
                   <!-- <div><a href="help.php"  class="navBlue">Помощь</a></div> -->
               </div>
               <?php if (isset($_SESSION['user'])) {
                $user = new User;
                $user = $user -> getInfoForHeader($_SESSION['user']);
                ?>
                <a href="user/exit.php" id="exit" class="blueButton">Выйти</a>
                <a href="account.php" class="navNameUser"><?=$user['name']?></a>
                <a href="account.php" class="navImgUser"> <img src="/images/users/<?=$user['img']?>" ></a>
                <?php } else { ?>
               <button id="enter" class="blueButton">Вход</button>
               <button id="reg" class="blueButton">Регистрация</button>
               <?php } ?>
               <img src="../images/menu.png" <?php if (isset($_SESSION['user'])) { ?> id="menuMobileEnteredUser" <?php } else { ?> id="menuMobile" <?php } ?> alt="меню навигации">
           </nav>
             <section id="searchBlock">                                                          <!--блок формы для поиска рейса-->
                <h1 id="headlineHeader">Готовы отправиться <br>
                    в путешествие?</h1>
                <form id="formHeader" action="catalogue.php" method="get">
                    <label class="labelHeader">Вылет</label>
                    <input type="date" id="inputThere" value="<?=date('Y-m-d')?>" class="inputSelectHeader" min="<?=date('Y-m-d')?>" max="<?php
                    $date = date_create();
                    date_modify($date, "+1 year"); 
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>" name="there" required>
                    <label id="labelBack" class="labelHeader">Прилет</label>
                    <input type="date" id="inputBack" value="<?php $datetime = new DateTime('tomorrow'); echo $datetime->format('Y-m-d');?>" class="inputSelectHeader" min="<?=date('Y-m-d')?>" max="<?php
                    $date = date_create();
                    date_modify($date, "+1 year"); 
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>" name="back" required>
                    <label id="labelFrom" class="labelHeader">Откуда</label>
                    <select id="selectFrom" class="inputSelectHeader selectHeader" name="from">
                        <?php
                        $directions = new Flight;
                        $directions = $directions -> getAllDirections();
                        foreach ($directions as $direction) {
                        ?>
                        <option class="optionHeader" value="<?=$direction[0]?>"><?=$direction[1]." (".$direction[2].")"?></option>
                        <?php
                        }
                        ?>
                        <!-- <option class="optionHeader" value="Уфа">Уфа</option>
                        <option class="optionHeader" value="Казань">Казань</option> -->
                    </select>
                    <label id="labelTo" class="labelHeader">Куда</label>
                    <select id="selectTo" class="inputSelectHeader selectHeader" name="to">
                        <?php
                            $directions = new Flight;
                            $directions = $directions -> getAllDirections();
                            foreach ($directions as $direction) {
                            ?>
                            <option class="optionHeader" value="<?=$direction[0]?>"><?=$direction[1]." (".$direction[2].")"?></option>
                            <?php
                            }
                            ?>
                    </select>
                    <label id="labelPassenger" class="labelHeader">Количество пассажиров</label>
                    <div class="selectHeaderPassenger">
                        <div id="countPassengers">1 пассажир</div>
                        <img src="../images/Polygon1.png" alt="треугольник" id="buttonTriangle">
                    </div>
                    <input type="hidden" id="hidden_passengers_1" value="1" name="adults">
                    <input type="hidden" id="hidden_passengers_2" value="0" name="children">
                    <button id="buttonHeader" class="blueButton">Отправиться в путешествие</button>
                    <div id="blockForSelectHeaderPassenger">
                        <div id="adultBlock">
                            <div class="passengerCategory">Взрослые</div>
                            <div class="passengerDescription">старше 14 лет</div>
                            <div class="buttonMinus buttonPlusMinus disabledButton" id="buttonMinusAdult">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="passengerNumber" id="adultNum">1</div>
                            <div class="buttonPlus buttonPlusMinus activeButton" id="buttonPlusAdult">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                        </div>
                        <div id="childrenBlock">
                            <div class="passengerCategory">Дети</div>
                            <div class="passengerDescription">от 0 до 14 лет</div>
                            <div class="buttonMinus buttonPlusMinus disabledButton" id="buttonMinusChildren">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="passengerNumber" id="childrenNum">0</div>
                            <div class="buttonPlus buttonPlusMinus activeButton" id="buttonPlusChildren">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                        </div>
                    </div>
                </form>
            </section>
         </header>
         <div class="void2"></div>
         <div id="sliderBlock">                                                                                 <!--слайдер-->
             <div id="slideButtonLeft" class="slideButton">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M7 13L1 7L7 1" stroke="#F9F9F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
             </div>
             <div id="slideWrap">
             <div id="slide1" class="slide">
                   <div class="slideHeadline">Теперь питомца не нужно оставлять соседу</div>
                   <div class="slideA"><a href="">Воспользуйтесь нашей услугой “Перевозка питомца”</a></div>
             </div>
             <div id="slide2" class="slide">
                <div class="slideHeadline">Летать можно с комфортом и по своему вкусу</div>
                <div class="slideA"><a href="">Вы можете выбрать питание, посетить бизнес-зал и не только.. </a></div>
             </div>
             <div id="slide3" class="slide">
                <div class="slideHeadline">У нас доступны различные классы билетов</div>
                <div class="slideA"><a href="">Выбирайте бизнес, эконом или минимум</a></div>
             </div>
            </div>
             <div id="slideButtonRight" class="slideButton">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M1 13L7 7L1 1" stroke="#F9F9F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
             </div>
        </div>
         <div class="void2X"></div>
    <section>
        <?php ?>
        <div class="grid gridMainServ">                                                                            <!--блок дополнительных услуг с заголовком-->
            <div class="headlineMainServBlock">
                <h1 class="headlineBigger headlineMainServ">Наши дополнительные услуги</h1>
                <a href="" class="headlineMainServA">
                    <div class="fullListServ1">Полный список услуг</div>
                    <svg class="fullListServ2" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" id="c22">
                       <path d="M1 13L7 7L1 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="voidCatalogue"></div>
        <div class="grid gridThreeColServ">
            <div class="servBlockMain">
                <?php
                $services = new Service;
                $services = $services -> getServicesAdmin(false);
                if ($services != null) {
                ?>
                <div class="servCol">
                    <img src="/images/services/<?=$services[0][4]?>" class="servBlockRow1" alt="Питомец">
                    <div class="servBlockRow2"><?=$services[0][2]?></div>
                    <div class="servBlockRow3"><?=$services[0][3]?></div>
                    <div class="servBlockRow4">
                        <?php
                        if ($services[0][1] == null) {
                            $price = (array) json_decode($services[0][5]);
                            foreach ($price as $pr) {
                                echo "от ".$pr." руб.";
                                break;
                            }
                           
                        }
                        else {
                            echo $services[0][1]." руб.";
                        }
                        ?></div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
                 <div class="servCol">
                    <img src="/images/<?=$services[1][4]?>" class="servBlockRow1" alt="Питание">
                    <div class="servBlockRow2" id="longText"><?=$services[1][2]?></div>
                    <div class="servBlockRow3"><?=$services[1][3]?></div>
                    <div class="servBlockRow4">
                    <?php
                        if ($services[1][1] == null) {
                            $price = (array) json_decode($services[1][5]);
                            foreach ($price as $pr) {
                                echo "от ".$pr." руб.";
                                break;
                            }
                           
                        }
                        else {
                            echo $services[1][1]." руб.";
                        }
                        ?>
                    </div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
                 <div class="servCol">
                    <img src="/images/<?=$services[2][4]?>" class="servBlockRow1" alt="Багаж">
                    <div class="servBlockRow2" ><?=$services[2][2]?></div>
                    <div class="servBlockRow3"><?=$services[2][3]?></div>
                    <div class="servBlockRow4">
                    <?php
                        if ($services[2][1] == null) {
                            $price = (array) json_decode($services[2][5]);
                            foreach ($price as $pr) {
                                echo "от ".$pr." руб.";
                                break;
                            }
                           
                        }
                        else {
                            echo $services[2][1]." руб.";
                        }
                        ?>
                    </div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
        <div id="navMobileShadow"></div>                                                    <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                     <!--меню боковой навигации для мобильной версии-->
        <img src="../images/plus4.png" id="close" alt="крестик">
             <div id="navMobileText">
                 <div><a href="index.php">Главная</a></div>
                 <div>
                     <a href="board.php">Табло</a>
                 </div>
                 <div><a href="info.php">Информация</a></div>
                 <div><a href="help.php">Помощь</a></div>
             </div>
     </div>
     
     <div id="modalShadow"></div>                                                                     <!--тень для модального окна-->
     <div id="modalEnter" class="modalRegEnter">                                                         <!--модальное окно входа-->
         <img src="../images/plus2.png" id="closeEnter" class="closeEnterReg" alt="крестик">     
         <div class="modal1">Вход</div>
         <form id="formEnter" action="user/auth.php" method="post">
             <input type="text" placeholder="Email или номер телефона" id="enterEmailTel" class="inputModal" name="phoneEmail" required>
             <label class="labelModal" id="labelEnterEmailTel">Email или номер телефона</label>
             <div id="messPhoneEmail-auth"></div>
             <input type="password" placeholder="Пароль" id="enterPass" class="inputModal" name="pass" required>
             <label class="labelModal" id="labelEnterPass">Пароль</label>
             <div id="messPass-auth"></div>
             <button class="blueButton buttonEnterReg" id="buttonEnter">Войти</button>
         </form>
     </div>
     <div id="modalReg" class="modalRegEnter">                                                                     <!--модальное окно регистрации-->
         <img src="../images/plus2.png" id="closeReg" class="closeEnterReg" alt="крестик">     
         <div class="modal1">Регистрация</div>
         <form id="formReg" action="user/reg.php" method="post">
             <input type="text" placeholder="Имя" id="regName" class="inputModal" name="name" required>
             <label class="labelModal" id="labelRegName">Имя</label>
             <div id="messName"></div>
             <input type="text" placeholder="Email или номер телефона" id="regEmailTel" class="inputModal" name="phoneEmail" required>
             <label class="labelModal" id="labelRegEmailTel">Email или номер телефона</label>
             <div id="messPhoneEmail"></div>
             <input type="text" placeholder="Придумайте пароль" id="regPass" class="inputModal" name="pass" required>
             <label class="labelModal" id="labelRegPass">Пароль</label>
             <div id="messPass"></div>
             <button class="blueButton buttonEnterReg">Зарегистрироваться</button>
         </form>
     </div>
         <div class="void"></div>
<?php require "footer.php"; ?>
        <script src="../js/script.js"> </script>                                                           <!--подключение javascript-->
        <script src="../js/script1(index).js"> </script>
        <?php
         if (isset($_SESSION['mess'])) {
            if (isset($_SESSION['mess']['name'])) {
                echo "<script> document.getElementById('messName').innerHTML = '".$_SESSION['mess']['name']."'; </script>";
                echo "<script src='js/mess_reg_auth/mess1.js'></script>";
            }
            if (isset($_SESSION['mess']['phoneEmail'])) {
                echo "<script> document.getElementById('messPhoneEmail').innerHTML = '".$_SESSION['mess']['phoneEmail']."'; </script>";
                echo "<script src='js/mess_reg_auth/mess2.js'></script>";
            }
            if (isset($_SESSION['mess']['pass'])) {
                echo "<script> document.getElementById('messPass').innerHTML = '".$_SESSION['mess']['pass']."'; </script>";
                echo "<script src='js/mess_reg_auth/mess3.js'></script>";
            }
            if (isset($_SESSION['mess']['pass-auth'])) {
                echo "<script> document.getElementById('messPass-auth').innerHTML = '".$_SESSION['mess']['pass-auth']."'; </script>";
                echo "<script src='js/mess_reg_auth/mess5.js'></script>";
            }
            if (isset($_SESSION['mess']['phoneEmail-auth'])) {
                echo "<script> document.getElementById('messPhoneEmail-auth').innerHTML = '".$_SESSION['mess']['phoneEmail-auth']."'; </script>";
                echo "<script src='js/mess_reg_auth/mess4.js'></script>";
            }
            unset($_SESSION['mess']);
         }
         
         ?>
    </body>
</html>