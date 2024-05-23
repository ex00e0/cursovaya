<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset='utf-8'>        <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->      
        <link rel="stylesheet" href="../css/style.css">                                  <!--подключение css-->
        <title>Аккаунт</title>
    </head>
    <body>
     <div id="navMobileShadow"></div>                                <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                             <!--меню боковой навигации для мобильной версии-->
        <img src="../images/plus4.png" id="close" alt="крестик">
             <div id="navMobileText">
                 <div><a href="index.html">Главная</a></div>
                 <div>
                     <a href="board.html">Табло</a>
                 </div>
                 <div><a href="info.html">Информация</a></div>
                 <div><a href="help.html">Помощь</a></div>
             </div>
     </div>

        <nav class="navEnteredUser">                                                       <!--навигация-->
            <img src="../images/a11.png" class="logoEnteredUser" alt="логотип">
            <div id="logoText">Мягкие <br> Авиалинии</div>
            <div class="navigationEnteredUser">
                <div>
                    <a href="index.html" class="noNavPage">Главная</a>
                </div>
                <div><a href="board.html" class="noNavPage">Табло</a></div>
                <div><a href="info.html"  class="noNavPage">Информация</a></div>
                <div><a href="help.html"  class="noNavPage">Помощь</a></div>
            </div>
            <button id="exit" class="blueButton">Выйти</button>
            <div class="navNameUser">Puppy</div>
            <div class="navImgUser navImgUserPuppy"></div>
            <img src="../images/menu.png" id="menuMobileEnteredUser" alt="меню навигации">
        </nav>
        <div class="voidCatalogue noForMobileAcc"></div>
       <header class="gridAccount">                                                                                 <!--шапка с именем, фото профиля и количеством активных заказов-->
             <div class="accHeaderBlock">
                <img src="../images/Pug-puppy-standing-in-profile-on-a-white-background(1)1-round2.png" alt="фото аккаунта" class="imgAccHeader">
                <div class="nameAndNumberActiveOrders">
                    <div class="accName">Puppy</div>
                    <div class="accNumberActiveOrders">0 активных заказов</div>
                </div>
             </div>
             <img src="../images/foncrug1.png" alt="небо сбоку" class="imgBackgroundAccount">
       </header>
       <main>
           <div class="grid accNavGrid">                                                                      <!--навигация между вкладками аккаунта-->
                <div class="navigationAcc">
                    <div id="curPage">
                        <div class="blueLine"></div>
                        <a id="curHover">Профиль</a>
                    </div>
                    <div id="allOrders"><a class="navBlue">Все заказы</a></div>
                    <div><a class="navBlue" id="activeOrders">Активные заказы</a></div>
                    <div id="savedPassengersBlock"><a class="navBlue" id="savedPassengers">Сохраненные пассажиры</a></div>
                </div>
           </div>
           <div class="grid basicInfoGrid" id="profile1">                                          <!--блок с изменением основной информации профиля-->
               <form class="basicInfoBlock">
                   <div class="basicCol1">
                       <div class="accGrayText">Изменить фото профиля</div>
                       <img src="../images/camera1.png" alt="фото" class="imgBasicCol1">
                       <input type="file" id="file">
                       <button onclick="file.click()">Загрузить..</button>
                   </div>
                   <div class="basicCol2">
                        <div class="accGrayText">Изменить имя профиля</div>
                        <img src="../images/edit.png" alt="редактирование" class="imgBasicCol2" >
                        <input type="text" placeholder="Введите имя..">
                    </div>
                    <div class="basicCol1">
                        <div class="accGrayText">Изменить email</div>
                        <img src="../images/email.png" alt="email" class="imgBasicCol1">
                        <input type="email"  placeholder="Введите email..">
                    </div>
                    <div class="basicCol2 specialMobileBasicBlock">
                        <div class="accGrayText">Изменить номер телефона</div>
                        <img src="../images/phone-call3.png" alt="телефон" class="imgBasicCol2">
                        <input type="tel" placeholder="Введите номер телефона..">
                    </div>
                    <button class="blueButton buttonSave1">Сохранить</button>
                </form>
           </div>
           <div class="emptyGrid grid" id="emptyBlock">                     <!--блок "Пока пусто.." для вкладок, где информации нет-->
              <div class="empty">Пока пусто..</div>
            </div>
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
            <footer>                                                                                                <!--футер с ссылками-->
                <div id="footerCol1">
                    <div class="headlineFooter headline">Связь с нами</div>
                    <a class="buttonFooter" id="buttonF1" href="help.html">
                           <img src="../images/speech-bubble1.png" alt="сообщение" class="imgButtonFooter">                        
                    </a>
                    <a class="buttonFooter" id="buttonF2" href="tel:+79528123641">
                        <img src="../images/phone-call1.png" alt="звонок" class="imgButtonFooter">              
                    </a>
                    <a class="buttonFooter" id="buttonF3" href="https://t.me/trapbed">
                        <img src="../images/telegram1.png" alt="телеграм" class="imgButtonFooter">                        
                    </a>
                    <div id="buttonFooterText1">Служба поддержки</div>
                    <div id="buttonFooterText2">Звонок</div>
                    <div id="buttonFooterText3">Телеграм</div>
                </div>
                <img src="../images/Group2.png" alt="градиент">
                <div class="footerPart" id="footerCol2">
                    <div class="headline headlineFooter">О компании</div>
                    <div class="footerPartRow4"><a href="">Общая информация</a></div>
                    <div class="footerPartRow5"><a href="">Лицензии</a></div>
                    <div class="footerPartRow6"><a href="">Правила</a></div>
                </div>
                <img src="../images/Group2.png" alt="градиент" id="gradMobileNone">
                <div class="footerPart" id="footerCol3">
                    <div class="headline headlineFooter">О рейсах</div>
                    <div class="footerPartRow4"><a href="">Табло с рейсами</a></div>
                    <div class="footerPartRow5"><a href="">Классы</a></div>
                    <div class="footerPartRow6"><a href="">Дополнительные услуги</a></div>
                    <div class="footerPartRow7"><a href="">Направления</a></div>
                </div>
                <img src="../images/Group2.png" alt="градиент">
                <div class="footerPart" id="footerCol4">
                    <div class="headline headlineFooter">Офисы</div>
                    <div class="footerPartRow4"><a href="">Главный офис</a></div>
                    <div class="footerPartRow5"><a href="">Офис в Уфе</a></div>
                    <div class="footerPartRow6"><a href="">Офис в Екатеринбурге</a></div>
                    <div class="footerPartRow7"><a href="">Офис в Нижнем Новгороде</a></div>
                </div>
            </footer>
        <script src="../js/script7(account).js"></script>                                <!--подключение javascript-->
        <script src="../js/script9(admin).js"></script>
    </body>
</html>