<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"  charset='utf-8'>        <!--мета-тег для распределения контента по ширине устройства и соответствия пикселей--> 
        <title>Редатирование рейса</title>
        <link rel="stylesheet" href="../css/style.css">                            <!--подключение css-->
    </head>
    <body>
            <nav class="navEnteredUser">                                                       <!--навигация зарегистрированного пользователя-->
                <img src="../images/a11.png" class="logoEnteredUser" alt="логотип">
                <div id="logoText">Мягкие <br> Авиалинии</div>
                <div class="navigationEnteredUser">
                    <div>
                        <a href="admin.html" class="noNavPage">Рейсы</a>
                    </div>
                    <div><a href="" class="noNavPage">Табло рейсов</a></div>
                    <div><a href=""  class="noNavPage">Услуги</a></div>
                    <div><a href=""  class="noNavPage">Клиенты</a></div>
                </div>
                <button id="exit" class="blueButton">Выйти</button>
                <div class="navNameUser">Администратор</div>
                <div class="navImgUser navImgUserAdmin"></div>
                <img src="../images/menu.png" id="menuMobileEnteredUser" alt="меню навигации">
            </nav>
            <div id="navMobileShadow"></div>                                            <!--тень для боковой навигации для мобильной версии-->
            <div id="navMobile">                                                          <!--меню боковой навигации для мобильной версии-->
                    <img src="../images/plus4.png" id="close" alt="крестик">
                    <div id="navMobileText">
                        <div><a href="admin.html">Рейсы</a></div>
                        <div>
                            <a href="" class="curHover">Табло</a>
                        </div>
                        <div><a href="">Услуги</a></div>
                        <div><a href="">Клиенты</a></div>
                    </div>
            </div>
            <main>
                <div class="grid backAndDeleteGrid">                                                   <!--блок возвращения назад и удаления рейса-->
                    <div class="backAndDelete">
                        <a href="admin.html" class="backEdit">
                            <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Вернуться к поиску</div>
                        </a>
                        <div class="deleteFlightText">Удалить рейс</div>
                        <img src="../images/xred.png" alt="плюс" class="admIcon">
                    </div>
                </div>
                <div class="voidSmall"></div>
                <form class="formEditFlight">                                                                      <!--форма изменения данных о рейсе-->
                    <div class="gridEdit headlineEditGrid">
                        <div>Общая информация</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="text" value="MA710000" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Номер рейса</label>
                            <input type="text" value="Boeing 737-700" class="inputAdmin adminCol2">
                            <label class="labelAdmin adminCol2">Воздушное судно</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="text" value="Уфа" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Откуда</label>
                            <input type="text" value="30.10.2023 03:35" class="inputAdmin adminCol2">
                            <label class="labelAdmin adminCol2">Дата вылета</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="text" value="Нижний Новгород" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Куда</label>
                            <input type="text" value="30.10.2023 05:25" class="inputAdmin adminCol2">
                            <label class="labelAdmin adminCol2">Дата посадки</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Места</div>
                    </div>
                    <div class="gridEdit headlineEditGrid">
                        <div class="inputSelect2Cols">
                            <input type="text" value="176" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Количество мест</label>
                            <input type="text" value="8" class="inputAdmin adminCol2">
                            <label class="labelAdmin adminCol2">Бизнес-класс</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <!--<div class="gridEdit headlineEditGrid">
                        <div>Дополнительные услуги</div>
                    </div> -->
                    <div class="gridEdit headlineEditGrid">
                        <div>Условия: бизнес-класс</div>
                    </div>
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="стандарт бизнес" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Условия: эконом-класс</div>
                    </div>
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="вода" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <div>Условия: минимум-класс</div>
                    </div> 
                    <div class="gridEdit editGridForConditions">
                        <div class="conditions6ColumnsAdmin">
                            <input type="text" value="70 кг" class="inputAdmin adminCol1">
                            <label class="labelAdmin adminCol1">Багаж</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol2Cond">
                            <label class="labelAdmin adminCol2Cond">Размеры багажа</label>
                            <input type="text" value="70 кг" class="inputAdmin adminCol3">
                            <label class="labelAdmin adminCol3">Ручная кладь</label>
                            <input type="text" value="55х40х20" class="inputAdmin adminCol4">
                            <label class="labelAdmin adminCol4">Размеры клади</label>
                            <input type="text" value="50 кг" class="inputAdmin adminCol5">
                            <label class="labelAdmin adminCol5">Питомцы</label>
                            <input type="text" value="-" class="inputAdmin adminCol6">
                            <label class="labelAdmin adminCol6">Меню</label>
                        </div>
                    </div>
                    <div class="voidSmall"></div>
                    <div class="gridEdit headlineEditGrid">
                        <button class="blueButton buttonSaveEditFlight">Сохранить</button>
                    </div>
                </form>
           <div class="voidCatalogueHalf"></div>
            </main>
        <script src="../js/script9(admin).js"> </script>                                 <!--подключение javascript-->
        <script src="../js/scriptForInputWithValue.js"></script>
    </body>
</html>