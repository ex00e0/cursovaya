<!--эту страницу нужно обязательно обновлять перед медиа-запросами-->

<!DOCTYPE html>  
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>                <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей-->
        <link rel="stylesheet" href="../css/style.css">                                        <!--подключение css-->
        <title>Выбор дополнительных услуг</title>
    </head>
    <body>
     
      <nav>                                                                                              <!--навигация-->
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
        <section>
        <div class="voidCatalogue"></div>                                                                   <!--блок выбора дополнительных услуг-->
        <div class="headlineGridServ grid"> 
            <h1 class="headline headlineCol2">Выберите дополнительные услуги для комфортной поездки</h1>
        </div>
        <div class="grid gridServDetails">
            <a href="">Подробнее о дополнительных услугах..</a>
        </div>
       <div class="grid servGrid">
           <div class="servBlock">
                <div class="servWrap">
                    <div class="headlineServName">Дополнительное питание</div>
                    <div class="descriptionServ">Подберите блюда, исходя из Ваших предпочтений.</div>
                    <div class="switcher">
                        <div class="switcherCircle"></div>
                    </div>
                    <div class="selection">
                        <img src="../images/selection.png" alt="стрелка раскрытия" class="imgSelect">
                        <div class="select">Показать</div>
                    </div>
                </div>
                <div class="grid3Serv" id="blockFood">
                    <img src="../images/omelet-BRML180820211.png" alt="завтрак" class="imgServ1">
                    <img src="../images/without-gluten2281301.png" alt="обед" class="imgServ2">
                    <img src="../images/desktop-ibe-ancillaries-meal-preview-02F1.png" alt="ужин" class="imgServ3">
                    <div id="breakfast">
                            <div class="foodRow1">Набор "Завтрак"</div>
                            <div class="foodPrice">500 ₽</div>
                            <div class="buttonMinusServ buttonPlusMinus disabledButton">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="numServ">0</div>
                            <div class="buttonPlusServ buttonPlusMinus activeButton">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                        </div>
                        <div id="lunch">
                            <div class="foodRow1">Набор "Обед"</div>
                            <div class="foodPrice">550 ₽</div>
                            <div class="buttonMinusServ buttonPlusMinus disabledButton">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="numServ">0</div>
                            <div class="buttonPlusServ buttonPlusMinus activeButton">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                        </div>
                        <div id="dinner">
                            <div class="foodRow1">Набор "Ужин"</div>
                            <div class="foodPrice">600 ₽</div>
                            <div class="buttonMinusServ buttonPlusMinus disabledButton">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="numServ">0</div>
                            <div class="buttonPlusServ buttonPlusMinus activeButton">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                        </div>
                </div>
           </div>
        </div>
       <div class="voidCatalogueHalf"></div>
    <div class="grid servGrid">
        <div class="servBlock">
             <div class="servWrap">
                 <div class="headlineServName">Добавить питомцев</div>
                 <div class="descriptionServ">Возьмите с собой самого верного попутчика или даже нескольких.</div>
                 <div class="switcher">
                     <div class="switcherCircle"></div>
                 </div>
                 <div class="selection">
                     <img src="../images/selection.png" alt="стрелка раскрытия" class="imgSelect">
                     <div class="select">Показать</div>
                 </div>
             </div>
        </div>
    </div>
    <div class="voidCatalogueHalf"></div>
<div class="grid servGrid">
     <div class="servBlock">
          <div class="servWrap">
              <div class="headlineServName">Дополнительный багаж</div>
              <div class="descriptionServ">Если Ваша сумка слишком большая и тяжелая...</div>
              <div class="switcher">
                  <div class="switcherCircle"></div>
              </div>
              <div class="selection">
                  <img src="../images/selection.png" alt="стрелка раскрытия" class="imgSelect">
                  <div class="select">Показать</div>
              </div>
          </div>
     </div>
</div>
 <div class="voidCatalogueHalf"></div>
 <div class="grid servGrid">
  <div class="servBlock">
       <div class="servWrap">
           <div class="headlineServName">Автоматическая регистрация</div>
           <div class="descriptionServ">И в аэропорт можно прийти попозже.</div>
           <div class="switcher2">
               <div class="switcherCircle2"></div>
           </div>
           <div class="servPrice">100 ₽</div>
       </div>
  </div>
</div>
<div class="voidCatalogueHalf"></div>
<div class="grid servGrid">
 <div class="servBlock">
      <div class="servWrap">
          <div class="headlineServName">Посетить бизнес-зал</div>
          <div class="descriptionServ">А в ожидании рейса можно отдохнуть в нашем зале.</div>
          <div class="switcher2">
              <div class="switcherCircle2"></div>
          </div>
          <div class="servPrice">2000 ₽</div>
      </div>
 </div>
</div>
</section>
</main>
<div id="navMobileShadow"></div>                                                                               <!--тень для боковой навигации для мобильной версии-->
     <div id="navMobile">                                                                                      <!--меню боковой навигации для мобильной версии-->
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

       <div id="modalShadow"></div>                                                                               <!--тень для модального окна-->
       <div id="modalEnter" class="modalRegEnter">                                                                   <!--модальное окно входа-->
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
    <div id="modalReg" class="modalRegEnter">                                                                      <!--модальное окно регистрации-->
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
        <div class="voidCatalogueHalf"></div>
        
        <div class="grid backGrid">                                                                     <!--блок возврата на предыдущие страницы-->
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
                <button class="blueButton continueCol4" id="buttonToFormPassengers">Продолжить</button>
            </div>
        </div>
         <div class="void" id="specialVoidFooter"></div>
            <footer>                                                                                     <!--футер с ссылками-->
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
        <script src="../js/script.js"> </script>                                                 <!--подключение javascript-->
        <script src="../js/script5(orderAddServ).js"> </script>
    </body>
</html>