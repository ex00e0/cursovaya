<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                   <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <title>Информация</title>
        <link rel="stylesheet" href="../css/style.css">                                          <!--подключение css-->
    </head>
    <body>
            <nav>                                                                               <!--навигация-->
                <img src="../images/a11.png" id="logo" alt="логотип">
                <div id="logoText">Мягкие <br> Авиалинии</div>
                <div id="navigation">
                    <div><a href="index.html" class="navBlue">Главная</a></div>
                    <div> <a href="board.html" class="navBlue">Табло</a></div>
                    <div id="curPage">
                        <div id="blueLine"></div>
                        <a href="info.html"  class="curHover">Информация</a>
                    </div>
                    <div><a href="help.html"  class="navBlue">Помощь</a></div>
                </div>
                <button id="enter" class="blueButton">Вход</button>
                <button id="reg" class="blueButton">Регистрация</button>
                <img src="../images/menu.png" id="menuMobile" alt="меню навигации">
            </nav>
            
            <div id="navMobileShadow"></div>                                                         <!--тень для боковой навигации для мобильной версии-->
            <div id="navMobile">                                                                       <!--меню боковой навигации для мобильной версии-->
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
            
            <div id="modalShadow"></div>                                                                       <!--тень для модального окна-->
            <div id="modalEnter" class="modalRegEnter">                                                        <!--модальное окно входа-->
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
            <div id="modalReg" class="modalRegEnter">                                                               <!--модальное окно регистрации-->
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
            <main>
                <div class="voidCatalogueHalf"></div>
                <div class="gridNew headlineGrid">
                    <div class="headline headlineCol2">Информация</div>
                </div>
                <div class="gridNew infoGrid infoInfo">                                                <!--блок информации с ссылками-->
                    <div class="infoBlock">
                        <section class="infoRow1 col1">
                            <h1 class="headlineInfoBlock">Общая информация</h1>
                            <div><a href="">Отмена и задержка рейсов</a></div>
                            <div><a href="">Когда появляется статус рейса</a></div>
                            <div><a href="">Регистрация и таможенный контроль</a></div>
                            <div><a href="">Питание во время полета</a></div>
                        </section>
                        <section class="infoRow1 col2">
                            <h1 class="headlineInfoBlock">О компании</h1>
                            <div><a href="">Общая информация</a></div>
                            <div><a href="">Лицензии</a></div>
                            <div><a href="">Наши офисы</a></div>
                        </section>
                        <section class="infoRow2 col1">
                            <h1 class="headlineInfoBlock">О рейсах и услугах</h1>
                            <div><a href="">Полный список дополнительных услуг</a></div>
                            <div><a href="">Классы: минимум, эконом и бизнес</a></div>
                            <div><a href="">Направления</a></div>
                        </section>
                        <section class="infoRow2 col2">
                            <h1 class="headlineInfoBlock">Правила</h1>
                            <div><a href="">Перевозка животных</a></div>
                            <div><a href="">Полет с ребенком</a></div>
                            <div><a href="">Ручная кладь и багаж</a></div>
                            <div><a href="">Запрещенные для перевозки предметы</a></div>
                            <div><a href="">Необходимые документы</a></div>
                        </section>
                    </div>
                </div>
            </main>    
            <div class="void"></div>
            <footer>                                                                                      <!--футер с ссылками-->
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
        <script src="../js/script.js"> </script>                                                 <!--подключение javascript-->
    </body>
</html>