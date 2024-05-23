<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                                                  <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                                                   <!--подключение css-->
        <title>Заполнение данных</title>
    </head>
    <body>
     
      <nav>                                                                                  <!--навигация-->
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
        <main>
        <section>                                                                                      <!--блок заполнения информации о пассажирах-->
        <div class="voidCatalogue"></div>
        <div class="specialMediaHeadlineGrid grid"> 
            <h1 class="headline headlineBigger headlineSpecial">Заполните информацию о пассажирах</h1>
        </div>

        <div class="grid personGrid">
             <form class="personBlock">
                <div class="personBlockCol1 personType">Взрослый №1</div>
                <div class="autoFillAndSaveBlock">
                    <div class="autoFill autoFillJs">
                        <div>Автозаполнение из сохраненных</div>
                        <img src="../images/auto.png" alt="раскрытие">
                    </div>
                    <div class="autoSave">
                        <div>Сохранить пассажира</div>
                        <div class="switcher2">
                            <div class="switcherCircle2"></div>
                        </div>
                    </div>
                </div>
                <div class="personBlockCol1 radioBlock">
                    <div class="firstRadioButton radioButton">
                        <div class="circleRadio1 circleRadio"></div>
                    </div>
                    <label>Мужчина</label>
                    <div class="secondRadioButton  radioButton">
                        <div class="circleRadio2 circleRadio"></div>
                    </div>
                    <label>Женщина</label>
                </div>
                <input class="personName personBlockCol1 jsInput" type="text" placeholder="Имя">
                <label class="labelJs firstLabel personBlockCol1">Имя</label>
                <input class="personSecondName personBlockCol1 jsInput" type="text" placeholder="Фамилия">
                <label class="labelJs secondLabel personBlockCol1">Фамилия</label>
                <input class="personLastName personBlockCol1 jsInput" type="text" placeholder="Отчество (если есть)">
                <label class="labelJs thirdLabel personBlockCol1">Отчество</label>
                <input class="dateOfBirth personBlockCol1 jsInput" type="text" placeholder="Дата рождения">
                <label class="labelJs fourthLabel personBlockCol1">Дата рождения</label>
                <div class="personBlockCol2 documentType">Паспорт РФ</div>
                <label class="fifthLabel personBlockCol2 labelDocument">Документ</label>
                <div class="passNoBlock personBlockCol2">
                    <input class="jsInput passS inputSpecialPaddin" type="text" placeholder="Серия">
                    <label class="sixthLabel labelJs">Серия</label>
                    <input class="jsInput passNo inputSpecialPaddin2" type="text" placeholder="Номер">
                    <label class="seventhLabel labelJs">Номер</label>
                </div>
                <input class="personBlockCol2 dateOfPass jsInput" placeholder="Дата выдачи">
                <label class="labelJs eighthLabel personBlockCol2">Дата выдачи</label>
                <input class="personBlockCol2 codeDepartment jsInput" placeholder="Код подразделения">
                <label class="labelJs ninthLabel personBlockCol2">Код подразделения</label>
                <input class="personBlockCol2 whoIssue jsInput" placeholder="Кем выдан">
                <label class="labelJs tenthLabel personBlockCol2">Кем выдан</label>
                <div class="blockFill firstAutoFill">
                    <div>Иван</div>
                </div>
                <div class="blockFill secondAutoFill">
                    <div>Алина</div>
                </div>
            </form>
        </div>
        <div class="voidCatalogueHalf"></div>
        <div class="grid personGrid">
            <form class="personBlock">
               <div class="personBlockCol1 personType">Ребенок №1</div>
               <div class="autoFillAndSaveBlock">
                   <div class="autoFill autoFillJs">
                       <div>Автозаполнение из сохраненных</div>
                       <img src="../images/auto.png" alt="раскрытие">
                   </div>
                   <div class="autoSave">
                       <div>Сохранить пассажира</div>
                       <div class="switcher2">
                           <div class="switcherCircle2"></div>
                       </div>
                   </div>
               </div>
               <div class="personBlockCol1 radioBlock">
                   <div class="firstRadioButton radioButton">
                       <div class="circleRadio1 circleRadio"></div>
                   </div>
                   <label>Мальчик</label>
                   <div class="secondRadioButton radioButton">
                       <div class="circleRadio2 circleRadio"></div>
                   </div>
                   <label>Девочка</label>
               </div>
               <input class="personName personBlockCol1 jsInput" type="text" placeholder="Имя">
               <label class="labelJs firstLabel personBlockCol1">Имя</label>
               <input class="personSecondName personBlockCol1 jsInput" type="text" placeholder="Фамилия">
               <label class="labelJs secondLabel personBlockCol1">Фамилия</label>
               <input class="personLastName personBlockCol1 jsInput" type="text" placeholder="Отчество (если есть)">
               <label class="labelJs thirdLabel personBlockCol1">Отчество</label>
               <input class="dateOfBirth personBlockCol1 jsInput" type="text" placeholder="Дата рождения">
               <label class="labelJs fourthLabel personBlockCol1">Дата рождения</label>
               <div class="personBlockCol2 documentType">Свидетельство о рождении</div>
               <label class="fifthLabel personBlockCol2 labelDocument">Документ</label>
               <div class="passNoBlock personBlockCol2">
                   <input class="jsInput passS inputSpecialPaddin" type="text" placeholder="Серия">
                   <label class="sixthLabel labelJs">Серия</label>
                   <input class="jsInput passNo inputSpecialPaddin2" type="text" placeholder="Номер">
                   <label class="seventhLabel labelJs">Номер</label>
               </div>
               <input class="personBlockCol2 dateOfPass jsInput" placeholder="Дата выдачи">
               <label class="labelJs eighthLabel personBlockCol2">Дата выдачи</label>
               <input class="personBlockCol2 codeDepartment jsInput" placeholder="№ записи акта">
               <label class="labelJs ninthLabel personBlockCol2">№ записи акта</label>
               <input class="personBlockCol2 whoIssue jsInput" placeholder="Место государственной регистрации">
               <label class="labelJs tenthLabel personBlockCol2">Место государственной регистрации</label>
               <div class="blockFill firstAutoFill">
                <div>Иван</div>
            </div>
            <div class="blockFill secondAutoFill">
                <div>Алина</div>
            </div>
           </form>
        </div>
       <div class="voidCatalogueHalf"></div>
        <div class="grid contactGrid">
            <form class="contactBlock">
                <div class="personBlockCol1 personType contactSpecial">Контакты</div>
                <div class="personBlockCol1 contactWho contactSpecial">Взрослый 1</div>
               <label class="fifthLabel personBlockCol1 labelContact">Контактное лицо</label>
               <img src="../images/selection.png" alt="раскрыть" id="selectContact">
               <input class="personBlockCol2Contact jsInput contactTel" type="text" placeholder="Номер телефона">
                <label class="labelJs labelTelContact personBlockCol2Contact">Номер телефона</label>
                
            </form>
        </div>
        <div class="voidCatalogueHalf"></div>
        <div class="grid backGrid">                                                    
            <div class="gridForABack">
                <button class="blueButton continueCol4" id="buttonToFormPassengers">Оплата</button>
            </div>
        </div>
        <div class="voidCatalogueHalf" id="forMobileNoVoid"></div>
        <div class="grid backGrid">                                                            <!--блок возвращения на предыдущие страницы-->
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
                <a href="ticket.html">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к билету</div>
                </a>
                <a href="orderAddServ.html">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к услугам</div>
                </a>
            </div>
        </div>
</section>
</main>
<div id="navMobileShadow"></div>                                                                          <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                                  <!--меню боковой навигации для мобильной версии-->
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

       <div id="modalShadow"></div>                                                                                <!--тень для модального окна-->
       <div id="modalEnter" class="modalRegEnter">                                                                 <!--модальное окно входа-->
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

        
         <div class="void" id="forMobileNoVoid2"></div>
         <div class="voidCatalogueHalf" id="forMobileVoid"></div>
            <footer>                                                                                   <!--футер с ссылками-->
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
        <script src="../js/script.js"> </script>                                                <!--подключение javascript-->
        <script src="../js/script6(orderFormPassengers).js"></script>
    </body>
</html>