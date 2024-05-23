
<!-- <!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>     мета-тег для распределения контента по ширине устройства и соответствия пикселей-->   
        <!-- <title>Рейсы</title>
        <link rel="stylesheet" href="../css/style.css">                                   подключение css -->
    <!-- </head>
    <body>
            <nav class="navEnteredUser">                                                        навигация зарегистрированного пользователя-->
                <!-- <img src="../images/a11.png" class="logoEnteredUser" alt="логотип">
                <div id="logoText">Мягкие <br> Авиалинии</div>
                <div class="navigationEnteredUser">
                    <div id="curPage">
                        <div id="blueLine"></div>
                        <a href="admin.html" class="curHover">Рейсы</a>
                    </div>
                    <div><a href="" class="navBlue">Табло рейсов</a></div>
                    <div><a href=""  class="navBlue">Услуги</a></div>
                    <div><a href=""  class="navBlue">Клиенты</a></div>
                </div>
                <button id="exit" class="blueButton">Выйти</button>
                <div class="navNameUser">Администратор</div>
                <div class="navImgUser navImgUserAdmin"></div>
                <img src="../images/menu.png" id="menuMobileEnteredUser" alt="меню навигации">
            </nav> -->
            <!-- <div id="navMobileShadow"></div>                                           тень для боковой навигации для мобильной версии-->
            <!-- <div id="navMobile">                                                          меню боковой навигации для мобильной версии --> 
                    <!-- <img src="../images/plus4.png" id="close" alt="крестик">
                    <div id="navMobileText">
                        <div><a href="admin.html">Рейсы</a></div>
                        <div> 
                            <a href="" class="curHover">Табло</a>
                        </div>
                        <div><a href="">Услуги</a></div>
                        <div><a href="">Клиенты</a></div>
                    </div>
            </div>  -->
            <main>
                <div class="searchAndAddGrid">                                                                      <!--блок поиска рейсов-->
                    <div class="searchAndAdd">
                        <img src="../images/magnifier1.png" alt="поиск" class="admIconSearch">
                        <input type="text" id="admSearchFlight" placeholder="Поиск рейса по номеру/дате/направлению..">
                        <div>Добавить рейс</div>
                        <img src="../images/pluss.png" alt="плюс" class="admIcon" id="admAddFlightButton">
                    </div>
                </div>
                <div class="grid searchHeadGrid">                                                                <!--заголовок таблицы-->
                    <div class="searchHead">
                        <div>Рейс</div>
                        <div class="searchHeadMobileNone">Откуда</div>
                        <div>Вылет</div>
                        <div class="searchHeadMobileNone">Куда</div>
                        <div>Посадка</div>
                        <div>Мест</div>
                        <div>Продано</div>
                    </div>
                </div>
                <div class="gridNew resultSearchGrid">                                                         <!--блоки результатов поиска-->
                     <div class="resultSearch">
                        <div class="wrapResultSearch">
                            <div class="tableText1">MA710000</div>
                            <div class="tableText4">Уфа</div>
                            <div class="tableText3">30.10.23 <br> 03:35</div>
                            <div class="tableText6">Нижний Новгород</div>
                            <div class="tableText5">30.10.23 <br> 05:25</div>
                            <div>176</div>
                            <div>140</div>
                            <img src="../images/edit.png" alt="редактировать" class="editButtons">
                            <div class="code1 tableText9">(UFA)</div>
                            <div class="code2 tableText10">(GOJ)</div>
                        </div>
                     </div>
                </div>
                <div class="voidSmall"></div>
                <div class="gridNew resultSearchGrid">
                    <div class="resultSearch">
                       <div class="wrapResultSearch">
                           <div class="tableText1">MA710001</div>
                           <div class="tableText4">Уфа</div>
                           <div class="tableText3">30.10.23 <br> 05:00</div>
                           <div class="tableText6">Нижний Новгород</div>
                           <div class="tableText5">30.10.23 <br> 06:50</div>
                           <div>176</div>
                           <div>170</div>
                           <img src="../images/edit.png" alt="редактировать" class="editButtons">
                           <div class="code1 tableText9">(UFA)</div>
                           <div class="code2 tableText10">(GOJ)</div>
                       </div>
                    </div>
               </div>
               <div class="voidSmall"></div>
               <div class="gridNew resultSearchGrid">
                <div class="resultSearch">
                   <div class="wrapResultSearch">
                       <div class="tableText1">MA710002</div>
                       <div class="tableText4">Уфа</div>
                       <div class="tableText3">30.10.23 <br> 20:00</div>
                       <div class="tableText6">Нижний Новгород</div>
                       <div class="tableText5">30.10.23 <br> 21:50</div>
                       <div>176</div>
                       <div>175</div>
                       <img src="../images/edit.png" alt="редактировать" class="editButtons">
                       <div class="code1 tableText9">(UFA)</div>
                       <div class="code2 tableText10">(GOJ)</div>
                   </div>
                </div>
           </div>
           <div class="voidCatalogueHalf"></div>
            </main>
        <script src="../js/script9(admin).js"> </script>                                    <!--подключение javascript-->
    </body>
</html>