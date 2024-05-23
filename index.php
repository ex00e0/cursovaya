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
                
            <nav id="navInHeader">                                                              <!--навигация, соединенная с шапкой-->
               <img src="../images/a11.png" id="logo" alt="логотип">
               <div id="logoText">Мягкие <br> Авиалинии</div>
               <div id="navigation">
                   <div id="curPage">
                       <div id="blueLine"></div>
                       <a href="index.html" id="curHover">Главная</a>
                   </div>
                   <div><a href="board.html" class="navBlue">Табло</a></div>
                   <div><a href="info.html"  class="navBlue">Информация</a></div>
                   <div><a href="help.html"  class="navBlue">Помощь</a></div>
               </div>
               <button id="enter" class="blueButton">Вход</button>
               <button id="reg" class="blueButton">Регистрация</button>
               <img src="../images/menu.png" id="menuMobile" alt="меню навигации">
           </nav>
             <section id="searchBlock">                                                          <!--блок формы для поиска рейса-->
                <h1 id="headlineHeader">Готовы отправиться <br>
                    в путешествие?</h1>
                <form id="formHeader" action="catalogue.html">
                    <label class="labelHeader">Туда</label>
                    <input type="date" id="inputThere" value="2023-07-22" class="inputSelectHeader">
                    <label id="labelBack" class="labelHeader">Обратно</label>
                    <input type="date" id="inputBack" value="2023-07-22" class="inputSelectHeader">
                    <label id="labelFrom" class="labelHeader">Откуда</label>
                    <select id="selectFrom" class="inputSelectHeader selectHeader">
                        <option class="optionHeader">Уфа</option>
                        <option class="optionHeader">Казань</option>
                    </select>
                    <label id="labelTo" class="labelHeader">Куда</label>
                    <select id="selectTo" class="inputSelectHeader selectHeader">
                        <option class="optionHeader">Нижний Новгород</option>
                        <option class="optionHeader">Москва</option>
                    </select>
                    <label id="labelPassenger" class="labelHeader">Количество пассажиров</label>
                    <div class="selectHeaderPassenger">
                        <div id="countPassengers">1 пассажир</div>
                        <img src="../images/Polygon1.png" alt="треугольник" id="buttonTriangle">
                    </div>
                    <button id="buttonHeader" class="blueButton">Отправиться в путешествие</button>
                    <div id="blockForSelectHeaderPassenger">
                        <div id="adultBlock">
                            <div class="passengerCategory">Взрослые</div>
                            <div class="passengerDescription">старше 14 лет</div>
                            <div class="buttonMinus buttonPlusMinus activeButton" id="buttonMinusAdult">
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
                <div class="servCol">
                    <img src="../images/surgery1(1).png" class="servBlockRow1" alt="Питомец">
                    <div class="servBlockRow2">Перевозка питомца</div>
                    <div class="servBlockRow3">Путешествуйте вместе со своим питомцем</div>
                    <div class="servBlockRow4">от 2500 руб.</div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
                 <div class="servCol">
                    <img src="../images/business-class-air-astana1(2).png" class="servBlockRow1" alt="Питание">
                    <div class="servBlockRow2">Питание на выбор</div>
                    <div class="servBlockRow3">Не забудьте заказать питание на борт</div>
                    <div class="servBlockRow4">от 500 руб.</div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
                 <div class="servCol">
                    <img src="../images/Baggage_Allowance1(2).png" class="servBlockRow1" alt="Багаж">
                    <div class="servBlockRow2" id="longText">Дополнительный багаж</div>
                    <div class="servBlockRow3">Добавьте дополнительные кг к вашему багажу</div>
                    <div class="servBlockRow4">от 4000 руб.</div>
                    <button class="buttonLearnMore blueButton">Узнать больше...</button>
                 </div>
            </div>
        </div>
    </section>
        <div id="navMobileShadow"></div>                                                    <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                     <!--меню боковой навигации для мобильной версии-->
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
     
     <div id="modalShadow"></div>                                                                     <!--тень для модального окна-->
     <div id="modalEnter" class="modalRegEnter">                                                         <!--модальное окно входа-->
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
     <div id="modalReg" class="modalRegEnter">                                                                     <!--модальное окно регистрации-->
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
            <footer>                                                                                                   <!--футер с ссылками-->
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
        <script src="../js/script.js"> </script>                                                           <!--подключение javascript-->
        <script src="../js/script1(index).js"> </script>
    </body>
</html>