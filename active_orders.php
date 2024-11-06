<?php session_start(); 
      if (!isset($_SESSION['user'])) {
        header("Location: /");
      } 
?>
<?php require "header.php"; ?>
<?php require "database/Order.php"; ?>
        <div class="voidCatalogue noForMobileAcc"></div>
       <header class="gridAccount">                                                                                 <!--шапка с именем, фото профиля и количеством активных заказов-->
             <div class="accHeaderBlock">
                <img src="/images/users/<?=$user['img']?>" alt="фото аккаунта" class="imgAccHeader">
                <div class="nameAndNumberActiveOrders">
                    <div class="accName"><?=$user['name']?></div>
                    <div class="accNumberActiveOrders">
                        <?php
                        $number_of_orders = new User;
                        $number_of_orders = $number_of_orders -> getNumberOfOrders();
                        if (substr($number_of_orders, -1) == 1 and mb_strlen($number_of_orders)==1) {
                            $letter = '';
                            $letter_1 = 'й';
                        }
                        else if ((substr($number_of_orders, -1) == 2 and substr($number_of_orders, 0, 1) != 1) || (substr($number_of_orders, -1) == 3 and substr($number_of_orders, 0, 1) != 1) || (substr($number_of_orders, -1) == 4 and substr($number_of_orders, 0, 1) != 1)) {
                            $letter = 'а';
                            $letter_1 = 'х';
                        }
                        else {
                            $letter = 'ов';
                            $letter_1 = 'х';
                        }
                        echo $number_of_orders;
                        ?> активны<?=$letter_1?> заказ<?=$letter?></div>
                </div>
             </div>
             <img src="../images/foncrug1.png" alt="небо сбоку" class="imgBackgroundAccount">
       </header>
       <main>
           <div class="grid accNavGrid">                                                                      <!--навигация между вкладками аккаунта-->
                <div class="navigationAcc">
                    <div>
                        <!-- <div class="blueLine"></div> -->
                        <a id="curHover" href="account.php">Профиль</a>
                    </div>
                    <div>
                        <!-- <div class="blueLine"></div> -->
                        <a class="navBlue" href="unactive_orders.php">Неактивные заказы</a>
                    </div>
                    <div id="curPage">
                        <div class="blueLine"></div>
                        <a class="navBlue" id="activeOrders" href="active_orders.php">Активные заказы</a>
                    </div>
                    <!-- <div id="savedPassengersBlock"><a class="navBlue" id="savedPassengers">Сохраненные пассажиры</a></div> -->
                </div>
           </div>
           <?php 
           $active_orders = new Order;
           $active_orders = $active_orders -> getActiveOrders();
           if ($active_orders != null) {
        ?>

                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHeadOrders">
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
                        <div class="wrapResultSearchOrders">
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
                            <!-- <a href="crud/adminFlightEdit.php?number=<?=$order[0]?>" class="editButtons"> <img src="../images/edit.png" alt="редактировать" class="editButtons"> </a> -->
                            
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <?php
                } }
                else {
                    ?>
                    <div class="emptyGridAdmin grid" id="emptyBlock">                     <!--блок "Пока пусто.." для вкладок, где информации нет-->
                      <div class="empty">Пока пусто..</div>
                    </div>
                    <?php
                   }
                   ?>
           
           
       </main>
       <div id="modalShadow"></div>                                                                    <!--тень для модального окна-->
       <div id="modalEnter" class="modalRegEnter">                                                       <!--модальное окно входа-->
        <img src="../images/plus2.png" id="closeEnter" class="closeEnterReg" alt="крестик">     
        <div class="modal1">Вход</div>
        <form id="formEnter">
            <input type="text" placeholder="Email или номер телефона" id="enterEmailTel" class="inputModal">
            <label class="labelModal" id="labelEnterEmailTel">Email или номер телефона</label>
            <input type="password" placeholder="Пароль" id="enterPass" class="inputModal">
            <label class="labelModal" id="labelEnterPass">Пароль</label>
            <button class="blueButton buttonEnterReg" id="buttonEnter">Войти</button>
        </form>
    </div>
    <div id="modalReg" class="modalRegEnter">                                                                 <!--модальное окно регистрации-->
        <img src="../images/plus2.png" id="closeReg" class="closeEnterReg" alt="крестик">     
        <div class="modal1">Регистрация</div>
        <form id="formReg">
            <input type="text" placeholder="Имя" id="regName" class="inputModal">
            <label class="labelModal" id="labelRegName">Имя</label>
            <input type="text" placeholder="Email или номер телефона" id="regEmailTel" class="inputModal">
            <label class="labelModal" id="labelRegEmailTel">Email или номер телефона</label>
            <input type="text" placeholder="Придумайте пароль" id="regPass" class="inputModal">
            <label class="labelModal" id="labelRegPass">Пароль</label>
            <button class="blueButton buttonEnterReg">Зарегистрироваться</button>
        </form>
    </div>
         <div class="void"></div>
        <?php require "footer.php"; ?>

<div id="sideMess">
    <div id="sideMessText">Допустим, это сообщение?</div>
    <img src="/images/plus4.png" id="closeMess">
</div>
        <script src="../js/script7(account).js"></script>                                <!--подключение javascript-->
        <script src="../js/script9(admin).js"></script>
        <?php
         if (isset($_SESSION['mess'])) {
            if (isset($_SESSION['mess']['done'])) {
                echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['done']."'; </script>";
                echo "<script src='/js/sideMess.js'></script>";
            }
            if (isset($_SESSION['mess']['edit'])) {
                echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['edit']."'; </script>";
                echo "<script src='/js/sideMess.js'></script>";
            }
            if (isset($_SESSION['mess']['image'])) {
                echo "<script> document.getElementById('messAcc-image').innerHTML = '".$_SESSION['mess']['image']."'; </script>";
                echo "<script src='/js/mess_account/mess1.js'></script>";
            }
            if (isset($_SESSION['mess']['name'])) {
                echo "<script> document.getElementById('messAcc-name').innerHTML = '".$_SESSION['mess']['name']."'; </script>";
                echo "<script src='/js/mess_account/mess2.js'></script>";
            }
            if (isset($_SESSION['mess']['email'])) {
                echo "<script> document.getElementById('messAcc-email').innerHTML = '".$_SESSION['mess']['email']."'; </script>";
                echo "<script src='/js/mess_account/mess3.js'></script>";
            }
            if (isset($_SESSION['mess']['phone'])) {
                echo "<script> document.getElementById('messAcc-phone').innerHTML = '".$_SESSION['mess']['phone']."'; </script>";
                echo "<script src='/js/mess_account/mess4.js'></script>";
            }
            if (isset($_SESSION['mess']['pass'])) {
                echo "<script> document.getElementById('messAcc-pass').innerHTML = '".$_SESSION['mess']['pass']."'; </script>";
                echo "<script src='/js/mess_account/mess5.js'></script>";
            }
            if (isset($_SESSION['mess']['email_order'])) {
                echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['email_order']."';
                document.getElementById('sideMess').width = '45vmax'; </script>";
                echo "<script src='/js/sideMess.js'></script>";
            }
            unset($_SESSION['mess']);
         }
         ?>
    </body>
</html>