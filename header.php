<?php session_start(); ?>
<?php require "database/User.php"; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                    <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                          <!--подключение css-->
        <title>Мягкие авиалинии</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  
    </head>
    <body>
     <div id="navMobileShadow"></div>                                                      <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                  <!--меню боковой навигации для мобильной версии-->
        <img src="../images/plus4.png" id="close" alt="крестик">
             <div id="navMobileText">
                 <div><a href="index.php">Главная</a></div>
                 <div><a href="board.php">Табло рейсов</a></div>
                 <div><a href="info.php">Информация</a></div>
                 <!-- <div><a href="help.php">Помощь</a></div> -->
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

      <nav <?php if (isset($_SESSION['user'])) { ?> class="navEnteredUser" <?php } ?> >                                                                                     <!--навигация-->
               <img src="../images/a11.png" id="logo" alt="логотип">
               <div id="logoText">Мягкие <br> Авиалинии</div>
               <div id="navigation">
                    <?php
                    if ($_SERVER['PHP_SELF']=='/board.php' || $_SERVER['PHP_SELF']=='/index.php' || $_SERVER['PHP_SELF']=='/info.php' || $_SERVER['PHP_SELF']=='/help.php') 
                    {?> 
                    <div <?php if ($_SERVER['PHP_SELF']=='/index.php') {echo "id='curPage'";} ?>>
                            <?php if ($_SERVER['PHP_SELF']=='/index.php') {echo "<div id='blueLine'></div>";} ?>
                            <a href="index.php" <?php if ($_SERVER['PHP_SELF']=='/index.php') {echo "class='curHover'";} 
                                                      else {echo "class='navBlue'";} ?>>Главная</a>
                    </div>        
                    <div <?php if ($_SERVER['PHP_SELF']=='/board.php') {echo "id='curPage'";} ?>>
                            <?php if ($_SERVER['PHP_SELF']=='/board.php') {echo "<div id='blueLine'></div>";} ?>
                            <a href="board.php" <?php if ($_SERVER['PHP_SELF']=='/board.php') {echo "class='curHover'";} 
                                                      else {echo "class='navBlue'";} ?>>Табло рейсов</a>
                    </div>
                    <div <?php if ($_SERVER['PHP_SELF']=='/info.php') {echo "id='curPage'";} ?>>
                            <?php if ($_SERVER['PHP_SELF']=='/info.php') {echo "<div id='blueLine'></div>";} ?>
                            <a href="info.php" <?php if ($_SERVER['PHP_SELF']=='/info.php') {echo "class='curHover'";} 
                                                     else {echo "class='navBlue'";} ?>>Информация</a>
                    </div>
                    <!-- <div <?php if ($_SERVER['PHP_SELF']=='/help.php') {echo "id='curPage'";} ?>>
                            <?php if ($_SERVER['PHP_SELF']=='/help.php') {echo "<div id='blueLine'></div>";} ?>
                            <a href="help.php" <?php if ($_SERVER['PHP_SELF']=='/help.php') {echo "class='curHover'";}
                                                    else {echo "class='navBlue'";} ?>>Помощь</a>
                    </div> -->
                    <?php }
                    else {?> 
                        <div>
                            <a href="index.php" class="noNavPage">Главная</a>
                        </div>
                        <div><a href="board.php" class="noNavPage">Табло рейсов</a></div>
                        <div><a href="info.php"  class="noNavPage">Информация</a></div>
                        <!-- <div><a href="help.php"  class="noNavPage">Помощь</a></div> -->
                    <?php }
                    ?>
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
               <img src="../images/menu.png"  <?php if (isset($_SESSION['user'])) { ?> id="menuMobileEnteredUser" <?php } else { ?> id="menuMobile" <?php } ?> alt="меню навигации">
        </nav>