<?php session_start(); 
      if (!isset($_SESSION['user']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
        header("Location: ../");
      } 
?>
<?php 

if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
    require "../../../database/User.php"; 
}
else if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
    require "../../database/User.php"; 
}
else {
    require "../database/User.php"; 
}

?> 
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>   
         <title>Админ-панель</title>
        <link rel="stylesheet" href="/css/style.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>      
     </head>
    <body>
    <?php if (isset($_SESSION['user'])) {
                 $user = new User;
                 $user = $user -> getInfoForHeader($_SESSION['user']);
            }
                ?>
            <nav class="navEnteredUser">                                                    
                 <img src="/images/a11.png" class="logoEnteredUser" alt="логотип">
                <div id="logoText">Мягкие <br> Авиалинии</div>
                <div class="navigationEnteredUser">
                    <div  <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/index.php') {
                            echo "id='curPage'";
                        }
                        ?>>
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/index.php') {
                            echo " <div id='blueLine'></div>";
                        }
                        ?>
                        <!-- <div id="blueLine"></div> -->
                        <a href="
                        <?php
                        
                        if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
                            echo "../../index.php";
                        } 
                        else if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
                            echo "../index.php";
                        }
                        else {
                            echo "index.php";
                        }
                        ?>
                        " class="
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/index.php') {
                            echo "curHover";
                        }
                        else {
                            echo "navBlue";
                        }
                        ?>
                        ">Рейсы</a>
                    </div>
                    <div
                    <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/board.php') {
                            echo "id='curPage'";
                        }
                        ?>
                        >
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/board.php') {
                            echo " <div id='blueLine'></div>";
                        }
                        ?>
                        <a href="
                     <?php
                        
                        if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
                            echo "../../board.php";
                        }
                        else if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
                            echo "../board.php";
                        }
                        else {
                            echo "board.php";
                        }
                        ?>
                        " class="
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/board.php') {
                            echo "curHover";
                        }
                        else {
                            echo "navBlue";
                        }
                        ?>
                        ">Табло рейсов</a></div>
                    <div <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/orders.php') {
                            echo "id='curPage'";
                        }
                        ?>>
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/orders.php') {
                            echo " <div id='blueLine'></div>";
                        }
                        ?>
                        <a href=" <?php
                        
                        if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
                            echo "../../orders.php";
                        }
                        else if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
                            echo "../orders.php";
                        }
                        else {
                            echo "orders.php";
                        }
                        ?>"  class="
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/orders.php') {
                            echo "curHover";
                        }
                        else {
                            echo "navBlue";
                        }
                        ?>">Заказы</a></div>
                    <div <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/extr.php') {
                            echo "id='curPage'";
                        }
                        ?>>
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/extr.php') {
                            echo " <div id='blueLine'></div>";
                        }
                        ?>
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/extr.php') {
                            echo " <div id='blueLine'></div>";
                        }
                        ?>
                        <a href="
                     <?php
                        
                         if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
                            echo "../../extr.php";
                        }
                        else if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
                            echo "../extr.php";
                        }
                        else {
                            echo "extr.php";
                        }
                        ?>
                        " class="
                        <?php
                        if ($_SERVER['PHP_SELF'] == '/admin/extr.php') {
                            echo "curHover";
                        }
                        else {
                            echo "navBlue";
                        }
                        ?>">Прочее</a></div>
                </div>
                <a href="
                <?php
                       
                       if (mb_substr($_SERVER['PHP_SELF'], 0, 17) == '/admin/extra/crud') {
                            echo "../../../user/exit.php";
                        }
                        else  if (mb_substr($_SERVER['PHP_SELF'], 0, 11) == '/admin/crud' || mb_substr($_SERVER['PHP_SELF'], 0, 12) == '/admin/extra') {
                            echo "../../user/exit.php";
                        }
                        else {
                            echo "../user/exit.php";
                        }
                        ?>
                " id="exit" class="blueButton">Выйти</a>
                <div class="navNameUser"><?=$user['name']?></div>
                <div class="navImgUser navImgUserAdmin"></div>
                <img src="/images/menu.png" id="menuMobileEnteredUser" alt="меню навигации">
            </nav> 
             <div id="navMobileShadow"></div>
            <div id="navMobile">                                                         
                <img src="/images/plus4.png" id="close" alt="крестик">
                    <div id="navMobileText">
                        <div><a href="index.php">Рейсы</a></div>
                        <div> 
                            <a href="" class="curHover">Табло</a>
                        </div>
                        <div><a href="">Услуги</a></div>
                        <div><a href="">Клиенты</a></div>
                    </div>
            </div>  