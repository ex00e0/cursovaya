<?php require "header.php"; ?>
<?php 
require "database/Order.php";
require "database/Service.php";
$from = isset($_POST['from'])? $_POST['from']:false;
$to = isset($_POST['to'])? $_POST['to']:false;
$there = isset($_POST['there'])? $_POST['there']:false;
$back = isset($_POST['back'])? $_POST['back']:false;
$adults = isset($_POST['adults'])? $_POST['adults']:false;
$children = isset($_POST['children'])? $_POST['children']:false;
$number = isset($_POST['number'])? $_POST['number']:false;
$class = isset($_POST['class'])? $_POST['class']:false; 


// $countBreakfast = isset($_GET['countBreakfast'])? $_GET['countBreakfast']:false;
// $countLunch = isset($_GET['countLunch'])? $_GET['countLunch']:false;
// $countDinner = isset($_GET['countDinner'])? $_GET['countDinner']:false;

// $count10 = isset($_GET['count10'])? $_GET['count10']:false;
// $count20 = isset($_GET['count20'])? $_GET['count20']:false;
// $count40 = isset($_GET['count40'])? $_GET['count40']:false;

// $countL10 = isset($_GET['countL10'])? $_GET['countL10']:false;
// $countL20 = isset($_GET['countL20'])? $_GET['countL20']:false;
// $countL30 = isset($_GET['countL30'])? $_GET['countL30']:false;

// {"до 10 кг": 2500.00, "20 кг": 3000.00, "40+ кг": 5000.00}
//{"Набор 'Завтрак'": 500, "Набор 'Обед'": 550, "Набор 'Ужин'": 600}
// {"+10 кг": 3000.00, "+20 кг": 5000.00, "+30 кг": 8000.00}


// {"до 10 кг": "1641935283199064817.png", "20 кг": "f5589e90d55374bde077dee5a02d34ee.jpeg", "40+ кг": "2782285plii.jpg"}
// {"Набор 'Завтрак'": "omelet-BRML180820211.png", "Набор 'Обед'": "without-gluten2281301.png", "Набор 'Ужин'": "desktop-ibe-ancillaries-meal-preview-02F1.png"}
//  {"+10 кг": "images.jpg", "+20 кг": "l-DqnZ1r6PFQ4obmBiPM7g7zQeqP5RadoHttjLy75M.jpg", "+30 кг": "1207_normal.jpg"}

$sum = new Order ();
$sum = $sum -> getSum($_POST);
?>
        <main>
        <form method="post" action="user/order.php">  
        <input type="hidden" name="sum" value="<?=$sum?>">   
        <input type="hidden" value="<?=$number?>" name="number">
        <input type="hidden" value="<?=$class?>" name="class">
        <input type="hidden" value="<?=$adults?>" name='adults'>
        <input type="hidden" value="<?=$children?>" name='children'>
        
       <?php  $servs = new Service;
       $servs = $servs -> getServicesAdmin(false);
        foreach ($servs as $serv) {
            if (isset($_POST[$serv[0]]) and $_POST[$serv[0]] == "on") {
            
        ?>
                        <input type="hidden" value="on" name="<?=$serv[0]?>">
                <?php
                }}?>
        <div class="voidCatalogue"></div>
        <div class="specialMediaHeadlineGrid grid"> 
            <h1 class="headline headlineBigger headlineSpecial">Заполните информацию о пассажирах</h1>
        </div>
<?php if ($adults != 0) { for ($ii=1; $ii<($adults+1); $ii++) {?>
    <div class="grid personGrid">
             <div class="personBlock"  id="adults_form_<?=$ii?>">
                <div class="personBlockCol1 personType">Взрослый №<?=$ii?></div>
                <!-- <div class="autoFillAndSaveBlock">
                    <div class="autoFill autoFillJs">
                        <div>Автозаполнение из сохраненных</div>
                        <img src="/images/auto.png" alt="раскрытие">
                    </div>
                    <div class="autoSave">
                        <div>Сохранить пассажира</div>
                        <div class="switcher2">
                            <div class="switcherCircle2"></div>
                        </div>
                    </div>
                </div> -->
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
                <input type="hidden" value="" name="gender<?=$ii?>" id="gender<?=$ii?>">
              

                <input class="personName personBlockCol1 jsInput" type="text" placeholder="Имя" name="name<?=$ii?>" required>
                <label class="labelJs firstLabel personBlockCol1">Имя</label>

                <input class="personSecondName personBlockCol1 jsInput" type="text" placeholder="Фамилия" name="surname<?=$ii?>" required>
                <label class="labelJs secondLabel personBlockCol1">Фамилия</label>

                <input class="personLastName personBlockCol1 jsInput" type="text" placeholder="Отчество" name="patronimyc<?=$ii?>" required>
                <label class="labelJs thirdLabel personBlockCol1">Отчество</label>

                <input class="dateOfBirth personBlockCol1 jsInput" type="text" placeholder="Дата рождения" name="birth<?=$ii?>" required  onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'"  max="<?php
                    $date = date_create();
                    date_modify($date, "-14 year"); 
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>">
                <label class="labelJs fourthLabel personBlockCol1">Дата рождения</label>

                <div class="personBlockCol2 documentType">Паспорт РФ</div>
                <label class="fifthLabel personBlockCol2 labelDocument">Документ</label>
                <div class="passNoBlock personBlockCol2">

                    <input class="jsInput passS inputSpecialPaddin" type="text" placeholder="Серия" name="doc_series<?=$ii?>" required>
                    <label class="sixthLabel labelJs">Серия</label>

                    <input class="jsInput passNo inputSpecialPaddin2" type="text" placeholder="Номер" name="doc_number<?=$ii?>" required>
                    <label class="seventhLabel labelJs">Номер</label>
                </div>
                <!-- <input class="personBlockCol2 dateOfPass jsInput" placeholder="Дата выдачи">
                <label class="labelJs eighthLabel personBlockCol2">Дата выдачи</label>
                <input class="personBlockCol2 codeDepartment jsInput" placeholder="Код подразделения">
                <label class="labelJs ninthLabel personBlockCol2">Код подразделения</label>
                <input class="personBlockCol2 whoIssue jsInput" placeholder="Кем выдан">
                <label class="labelJs tenthLabel personBlockCol2">Кем выдан</label> -->
                <!-- <div class="blockFill firstAutoFill">
                    <div>Иван</div>
                </div>
                <div class="blockFill secondAutoFill">
                    <div>Алина</div>
                </div> -->
</div>
        </div>
        <div class="voidCatalogueHalf"></div>
<?php } }?> 
<?php if ($children != 0)  { for ($cc=1; $cc<($children+1); $cc++) {?>   
    <div class="grid personGrid">
            <div class="personBlock" id="children_form_<?=$cc?>">
               <div class="personBlockCol1 personType">Ребенок №<?=$cc?></div>
               <!-- <div class="autoFillAndSaveBlock">
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
               </div> -->
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
               <input type="hidden" value="" name="child_gender<?=$cc?>" id="gender<?=$ii?>">

               <input class="personName personBlockCol1 jsInput" type="text" placeholder="Имя"  name="child_name<?=$cc?>" required>
               <label class="labelJs firstLabel personBlockCol1">Имя</label>
               <input class="personSecondName personBlockCol1 jsInput" type="text" placeholder="Фамилия" name="child_surname<?=$cc?>" required>
               <label class="labelJs secondLabel personBlockCol1">Фамилия</label>
               <input class="personLastName personBlockCol1 jsInput" type="text" placeholder="Отчество" name="child_patronimyc<?=$cc?>" required>
               <label class="labelJs thirdLabel personBlockCol1">Отчество</label>
               <input class="dateOfBirth personBlockCol1 jsInput" type="text" placeholder="Дата рождения" name="child_birth<?=$cc?>" required  onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" max="<?php
                    $date = date_create();
                    $date_new = date_format($date, "Y-m-d");
                    echo $date_new;
                    ?>">
               <label class="labelJs fourthLabel personBlockCol1">Дата рождения</label>
               <div class="personBlockCol2 documentType">Свидетельство о рождении</div>
               <label class="fifthLabel personBlockCol2 labelDocument">Документ</label>
               <div class="passNoBlock personBlockCol2">
                   <input class="jsInput passS inputSpecialPaddin" type="text" placeholder="Серия" name="child_doc_series<?=$cc?>" required>
                   <label class="sixthLabel labelJs">Серия</label>
                   <input class="jsInput passNo inputSpecialPaddin2" type="text" placeholder="Номер"  name="child_doc_number<?=$cc?>" required>
                   <label class="seventhLabel labelJs">Номер</label>
               </div>
               <!-- <input class="personBlockCol2 dateOfPass jsInput" placeholder="Дата выдачи">
               <label class="labelJs eighthLabel personBlockCol2">Дата выдачи</label>
               <input class="personBlockCol2 codeDepartment jsInput" placeholder="№ записи акта">
               <label class="labelJs ninthLabel personBlockCol2">№ записи акта</label>
               <input class="personBlockCol2 whoIssue jsInput" placeholder="Место государственной регистрации">
               <label class="labelJs tenthLabel personBlockCol2">Место государственной регистрации</label> -->
               <!-- <div class="blockFill firstAutoFill">
                <div>Иван</div>
            </div>
            <div class="blockFill secondAutoFill">
                <div>Алина</div>
            </div> -->
</div>

        </div>
       <div class="voidCatalogueHalf"></div>
<?php } }?> 
        
        <!-- <div class="grid contactGrid">
            <form class="contactBlock">
                <div class="personBlockCol1 personType contactSpecial">Контакты</div>
                <div class="personBlockCol1 contactWho contactSpecial">Взрослый 1</div>
               <label class="fifthLabel personBlockCol1 labelContact">Контактное лицо</label>
               <img src="../images/selection.png" alt="раскрыть" id="selectContact">
               <input class="personBlockCol2Contact jsInput contactTel" type="text" placeholder="Номер телефона">
                <label class="labelJs labelTelContact personBlockCol2Contact">Номер телефона</label>
                
            </form>
        </div> -->
        <!-- <div class="voidCatalogueHalf"></div> -->
        <script>
// function sendForm(formId) {
//   var form = document.getElementById(formId);
//   var formData = new FormData(form);

//   fetch(form.action, {
//     method: 'POST',
//     body: formData
//   })
//   .then(response => response.text())
//   .then(data => {
//     window.location.href = 'user/order.php?data=' + encodeURIComponent(data);
//   })
//   .catch(error => {
//     console.error('Ошибка:', error);
//   });
// }

// function sendAllForms(adults, children) {
//   for (let ii = 1; ii <= adults; ii++) {
//     sendForm("adults_form_" + ii);
//   }
//   for (let cc = 1; cc <= children; cc++) {
//     sendForm("children_form_" + cc);
//   }
// }
</script>
        <div class="grid backGrid">                                                    
            <div class="gridForABack">
                <div></div>
                <div></div>
                <div class="sum-order">Сумма заказа: <?=$sum?> ₽</div>
                <button class="blueButton continueCol4" id="buttonToFormPassengers">Заказать</button>
            </div>
        </div>

        </form>      
        <div class="voidCatalogueHalf" id="forMobileNoVoid"></div>
        <div class="grid backGrid">                                                            <!--блок возвращения на предыдущие страницы-->
            <div class="gridForABack">
                <a href="index.php">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к поиску</div>
                </a>
                <a href="catalogue.php?from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?=$back?>&adults=<?=$adults?>&children=<?=$children?>">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к выбору рейса</div>
                </a>
                <a href="ticket.php?class=<?=$class?>&number=<?=$number?>&from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?=$back?>&adults=<?=$adults?>&children=<?=$children?>">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к билету</div>
                </a>
                <a href="orderAddServ.php?class=<?=$class?>&number=<?=$number?>&from=<?=$from?>&to=<?=$to?>&there=<?=$there?>&back=<?$back?>&adults=<?=$adults?>&children=<?=$children?>">
                    <svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="backToSearch">Вернуться к услугам</div>
                </a>
            </div>
        </div>

</main>
<div class="voidCatalogue"></div>
<?php require "footer.php";?>
        <script src="../js/script.js"> </script>                                                <!--подключение javascript-->
        <script src="../js/script6(orderFormPassengers).js"></script>
    </body>
</html>