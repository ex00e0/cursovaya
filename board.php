<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>      <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей--> 
        <title>Табло рейсов</title>
        <link rel="stylesheet" href="../css/style.css">                           <!--подключение css-->
    </head>
    <body>
            <nav>                                                                                <!--навигация-->
                <img src="../images/a11.png" id="logo" alt="логотип">
                <div id="logoText">Мягкие <br> Авиалинии</div>
                <div id="navigation">
                    <div><a href="index.html" class="navBlue">Главная</a></div>
                    <div id="curPage">
                        <div id="blueLine"></div>
                        <a href="board.html" class="curHover">Табло</a>
                    </div>
                    <div><a href="info.html"  class="navBlue">Информация</a></div>
                    <div><a href="help.html"  class="navBlue">Помощь</a></div>
                </div>
                <button id="enter" class="blueButton">Вход</button>
                <button id="reg" class="blueButton">Регистрация</button>
                <img src="../images/menu.png" id="menuMobile" alt="меню навигации">
            </nav>
            
            <div id="navMobileShadow"></div>                                                                <!--тень для боковой навигации для мобильной версии-->
            <div id="navMobile">                                                                            <!--меню боковой навигации для мобильной версии-->
                    <img src="../images/plus4.png" id="close" alt="крестик">
                    <div id="navMobileText">
                        <div><a href="index.html">Главная</a></div>
                        <div>
                            <a href="board.html" class="curHover">Табло</a>
                        </div>
                        <div><a href="info.html">Информация</a></div>
                        <div><a href="help.html">Помощь</a></div>
                    </div>
            </div>
            
            <div id="modalShadow"></div>                                                                               <!--тень для модального окна-->
            <div id="modalEnter" class="modalRegEnter">                                                               <!--модальное окно входа-->
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
            <div id="modalReg" class="modalRegEnter">                                                                         <!--модальное окно регистрации-->
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
            <main id="timetableBlock">                                                                        <!--блоки расписнаия рейсов на вчера, сегодня и завтра-->
                <div class="headline" id="headline1">Табло рейсов</div>
                <div class="headline" id="headline2">
                    <div id="yesterday">29 октября</div>
                    <div id="today">30 октября</div>
                    <div id="tomorrow">31 октября</div>
                </div>
                <div id="tableHead">
                    <div class="tableText1">Рейс</div>
                    <div class="tableText4">Откуда</div>
                    <div class="tableText3">Время вылета</div>
                    <div class="tableText6">Куда</div>
                    <div class="tableText5">Время посадки</div>
                    <div class="terminalGate tableText2">Статус</div>
                    <div class="terminalGate tableText7">Терминал</div>
                    <div class="terminalGate tableText8">Выход</div>
                </div>
                <div id="timetable1" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710000</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">03:35</div>
                        <div class="tableText6">Нижний Новгород</div>
                        <div class="tableText5">05:25</div>
                        <div class="statusGreen terminalGate tableText2">Прилетел</div>
                        <div class="terminalGate tableText7" >1</div>
                        <div class="terminalGate tableText8">4</div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(GOJ)</div>
                    </div>
                </div>
                <div id="timetable2" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710001</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">05:00</div>
                        <div class="tableText6">Нижний Новгород</div>
                        <div class="tableText5">06:50</div>
                        <div class="statusRed terminalGate tableText2">Отменен</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8">2</div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(GOJ)</div>
                    </div>
                </div>
                <div id="timetable3" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710002</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">20:00</div>
                        <div class="tableText6">Нижний Новгород</div>
                        <div class="tableText5">21:50</div>
                        <div class="statusYellow terminalGate tableText2">Регистрация</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8"></div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(GOJ)</div>
                    </div>
                </div>
                <div id="timetable1T" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710000</div>
                        <div class="tableText4">Казань</div>
                        <div class="tableText3">03:35</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">05:25</div>
                        <div class="statusGreen terminalGate tableText2">Прилетел</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8">4</div>
                        <div class="code1 tableText9">(KZN)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
                <div id="timetable2T" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710001</div>
                        <div class="tableText4">Казань</div>
                        <div class="tableText3">05:00</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">06:50</div>
                        <div class="statusRed terminalGate tableText2">Отменен</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8">2</div>
                        <div class="code1 tableText9">(KZN)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
                <div id="timetable3T" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710002</div>
                        <div class="tableText4">Казань</div>
                        <div class="tableText3">20:00</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">21:50</div>
                        <div class="statusYellow terminalGate tableText2">Регистрация</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8"></div>
                        <div class="code1 tableText9">(KZN)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
                <div id="timetable1Y" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710000</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">03:35</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">05:25</div>
                        <div class="statusGreen terminalGate tableText2">Прилетел</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8">4</div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
                <div id="timetable2Y" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710001</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">05:00</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">06:50</div>
                        <div class="statusRed terminalGate tableText2">Отменен</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8">2</div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
                <div id="timetable3Y" class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1">MA710002</div>
                        <div class="tableText4">Уфа</div>
                        <div class="tableText3">20:00</div>
                        <div class="tableText6">Москва</div>
                        <div class="tableText5">21:50</div>
                        <div class="statusYellow terminalGate tableText2">Регистрация</div>
                        <div class="terminalGate tableText7">1</div>
                        <div class="terminalGate tableText8"></div>
                        <div class="code1 tableText9">(UFA)</div>
                        <div class="code2 tableText10">(VKO)</div>
                    </div>
                </div>
            </main>
            <div class="void"></div>
            <footer>                                                                                                   <!--футер с ссылками-->
                <div id="footerCol1">
                    <div class="headlineFooter headline">Связь с нами</div>
                    <a class="buttonFooter" id="buttonF1"  href="help.html">
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
        <script src="../js/script.js"> </script>                                            <!--подключение javascript-->
        <script src="../js/script2(board).js"> </script>
    </body>
</html>