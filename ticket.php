<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                     <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                           <!--подключение css-->
        <title>Выбранный билет</title>
    </head>
    <body>
     <div id="navMobileShadow"></div>                                                              <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                           <!--меню боковой навигации для мобильной версии-->
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
     <div id="modalShadow"></div>                                                                        <!--тень для модального окна-->
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

      <nav>
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
        <div class="voidCatalogue"></div>
        <main>
    <section>
        <div class="headlineGrid grid">                                                                  <!--блок краткой информации о билете, "Вы выбрали"-->
            <h1 class="headline headlineCol2">Вы выбрали</h1>
        </div>
        <div class="grid flightInfoGrid">
            <div class="flightInfo">
                <div class="flightBlockDate">
                    <div class="flightDateRow1 flightGray">пн</div>
                    <div class="flightDateRow2">30</div>
                    <div class="flightDateRow3">октября</div>
                </div>
                <div class="flightBlockFrom">
                    <div class="flightFromToRow1">03:35</div>
                    <div class="flightGray flightFromToRow2">Уфа</div>
                    <div class="flightGray flightFromToRow3">(UFA)</div>
                </div>
                <div class="flightBlockInWay">
                    <img class="flightImgInWay" src="../images/vputi2.png" alt="самолет в пути">
                    <div class="flightInWay">В пути 1ч 50мин</div>
                </div>
                <div class="flightBlockTo">
                    <div class="flightFromToRow1">05:25</div>
                    <div class="flightGray flightFromToRow2">Нижний Новгород</div>
                    <div class="flightGray flightFromToRow3">(GOJ)</div>
                </div>
                <div class="flightBlockClass">
                    <div class="flightNoTick">Номер рейса</div>
                    <div class="flightClassTick">Класс</div>
                    <div class="flightPrice">8000 ₽</div>
                    <div class="flightNoName">MA710000</div>
                    <div class="flightClassName">Эконом</div>
                    
                </div>
            </div>
        </div>
    </section>
        <div class="voidCatalogueHalf"></div>
    <section>
        <div class="headlineGrid grid"> 
            <h1 class="headline headlineCol2">Подробная информация о рейсе</h1>
        </div>
        <div class="grid detailedInfoGrid">                                                                       <!--блок подробной информации о рейсе-->
            <div class="detailedInfo">
                <div class="baggageReturnBlock conditionsGrid">
                    <div>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle cx="12" cy="12" r="12" fill="#6C6C6C"/>
                            <rect x="6" y="6" width="12" height="12" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_766_7" transform="scale(0.00390625)"/>
                            </pattern>
                            <image id="image0_766_7" width="256" height="256" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                        <div class="conditionsFontSize1 conditionsDisabled">Багаж недоступен</div>
                    </div>
                    <div>
                       <img src="../images/check.png" alt="галочка">
                        <div class="conditionsFontSize1">Ручная кладь до 10 кг, 55х40х23</div>
                    </div>
                    <div>
                        <img src="../images/check.png" alt="галочка">
                         <div class="conditionsFontSize1">Возврат доступен</div>
                     </div>
                </div>
                <div class="blueConditionsBlock conditionsGrid">
                    <div>
                        <img src="../images/paw1.png" alt="лапка">
                        <div class="conditionsFontSize1 conditionsBlue">Питомцы до 50 кг</div>
                    </div>
                    <div>
                       <img src="../images/restaurant1.png" alt="еда">
                        <div class="conditionsFontSize1 conditionsBlue">Меню: вода</div>
                    </div>
                    <div>
                        <img src="../images/distance.png" alt="путь">
                         <div class="conditionsFontSize1 conditionsBlue">Расстояние: 2000км</div>
                     </div>
                </div>
                <div class="airplaneBlock">
                    <div>Boeing 737-700</div>
                    <img src="../images/14985910751883558981.png" alt="Boeing 737-700">
                </div>
                <div class="airplaneConditionsBlock conditionsGrid">
                    <div>
                        <img src="../images/speedometer1.png" alt="скорость">
                        <div class="conditionsFontSize1">800 км/ч крейсерская скорость</div>
                    </div>
                    <div>
                       <img src="../images/seat1.png" alt="эконом">
                        <div class="conditionsFontSize1">168 мест в эконом-классе</div>
                    </div>
                    <div>
                        <img src="../images/airline1.png" alt="бизнес" id="heightWidthBusiness">
                         <div class="conditionsFontSize1">8 мест в бизнес-классе</div>
                     </div>
                </div>
            </div>
        </div>
    </section>
        <div class="voidCatalogueHalf"></div>
        
        <div class="grid backGrid">                                                           <!--блок возвращения на предыдущие страницы-->
            <div class="gridForABack">
                <a href="index.html">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к поиску</div>
                </a>
                <a href="catalogue.html">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к выбору рейса</div>
                </a>
                <button class="blueButton continueCol4" id="buttonToOrderAddServ">Продолжить</button>
            </div>
        </div>
    </main>
         <div class="void" id="specialVoidCat"></div>
         <div class="voidCatalogueHalf" id="specialVoidCatMibile"></div>
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
        <script src="../js/script.js"> </script>                                                          <!--подключение javascript-->
        <script src="../js/script4(ticket).js"> </script>
    </body>
</html>