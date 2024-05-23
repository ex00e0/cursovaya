<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                    <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                          <!--подключение css-->
        <title>Мягкие авиалинии</title>
    </head>
    <body>
     <div id="navMobileShadow"></div>                                                      <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                  <!--меню боковой навигации для мобильной версии-->
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
     <div id="modalShadow"></div>                                                                          <!--тень для модального окна-->
     <div id="modalEnter" class="modalRegEnter">                                                            <!--модальное окно входа-->
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
     <div id="modalReg" class="modalRegEnter">                                                                       <!--модальное окно регистрации-->
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

      <nav>                                                                                     <!--навигация-->
               <img src="../images/a11.png" id="logo" alt="логотип">
               <div id="logoText">Мягкие <br> Авиалинии</div>
               <div id="navigation">
                   <div>
                       <a href="index.html" class="noNavPage">Главная</a>
                   </div>
                   <div><a href="board.html" class="noNavPage">Табло</a></div>
                   <div><a href="info.html"  class="noNavPage">Информация</a></div>
                   <div><a href="help.html"  class="noNavPage">Помощь</a></div>
               </div>
               <button id="enter" class="blueButton">Вход</button>
               <button id="reg" class="blueButton">Регистрация</button>
               <img src="../images/menu.png" id="menuMobile" alt="меню навигации">
        </nav>