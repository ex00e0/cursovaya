<!--эту страницу нужно обязательно обновлять перед медиа-запросами-->
<?php require "header.php"; ?>
<?php require "database/Service.php"; 

$from = isset($_GET['from'])? $_GET['from']:false;
$to = isset($_GET['to'])? $_GET['to']:false;
$there = isset($_GET['there'])? $_GET['there']:false;
$back = isset($_GET['back'])? $_GET['back']:false;
$adults = isset($_GET['adults'])? $_GET['adults']:false;
$children = isset($_GET['children'])? $_GET['children']:false;
$number = isset($_GET['number'])? $_GET['number']:false;
$class = isset($_GET['class'])? $_GET['class']:false;
?>
        <main>
        <form action="orderFormPassengers.php" id="form-cont" method="post">

        <input type="hidden" value="<?=$from?>" name="from">
        <input type="hidden" value="<?=$to?>" name="to">
        <input type="hidden" value="<?=$there?>" name="there">
        <input type="hidden" value="<?=$back?>" name="back">
        <input type="hidden" value="<?=$adults?>" name="adults">
        <input type="hidden" value="<?=$children?>" name="children">
        <input type="hidden" value="<?=$number?>" name="number">
        <input type="hidden" value="<?=$class?>" name="class">

        <div class="voidCatalogue"></div>
        <?php
        $count_serv = 0;
        $services = new Service;
        $services = $services -> getServicesAdmin (false);
        if ($services != null) {
        ?>
        <div class="headlineGridServ grid"> 
            <h1 class="headline headlineCol2">Выберите дополнительные услуги для комфортной поездки</h1>
        </div>
        <div class="grid gridServDetails">
            <a href="">Подробнее о дополнительных услугах..</a>
        </div>
        <?php
            foreach ($services as $serv) {
                
                if ($serv[1] == null) {
        ?>
        <div class="grid servGrid">
           <div class="servBlock">
                <div class="servWrap">
                    <div class="headlineServName"><?=$serv[2]?></div>
                    <div class="descriptionServ"><?=$serv[3]?></div>
                    <div class="switcher">
                        <div class="switcherCircle"></div>
                    </div>
                    <div class="selection">
                        <img src="../images/selection.png" alt="стрелка раскрытия" class="imgSelect">
                        <div class="select">Показать</div>
                    </div>
                </div>
                <div class="grid3Serv blockFood">
                    <?php 
                    $compound = (array) json_decode($serv[5]);
                    $count = 0;
                    $countC = 0;
                    $image_compound = (array) json_decode($serv[6]);
                    // var_dump($image_compound);
                    foreach ($image_compound as $key => $img) {
                        $count++;
                    ?>
                        <img src="/images/services/<?=$img?>" alt="завтрак" class="imgServ<?=$count?>">
                    <?php
                    }
                    ?>
                    
                    
                    <!-- <img src="/images/without-gluten2281301.png" alt="обед" class="imgServ2">
                    <img src="/images/desktop-ibe-ancillaries-meal-preview-02F1.png" alt="ужин" class="imgServ3"> -->
                    
                        <?php
                    foreach ($compound as $keyC => $itemC) {
                        $countC++;
                    ?>
                        <div id="<?php if($countC == 1) {echo "breakfast";} else if ($countC==2) {echo "lunch";} else if ($countC==3) {echo "dinner";} ?>">
                        <div class="foodRow1"><?=$keyC?></div>
                            <div class="foodPrice"><?=$itemC?> ₽</div>
                            <div class="buttonMinusServ buttonPlusMinus disabledButton">
                                <img src="../images/minusPassenger.png" alt="минус">
                            </div>
                            <div class="numServ">0</div>
                            <div class="buttonPlusServ buttonPlusMinus activeButton">
                                <img src="../images/plusPassenger.png" alt="плюс">
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                           
                        
                </div>
           </div>
        </div>
       <div class="voidCatalogueHalf"></div>
        <?php
                }
                else {
                ?>
                <div class="grid servGrid">
                <div class="servBlock">
                    <div class="servWrap">
                        <div class="headlineServName"><?=$serv[2]?></div>
                        <div class="descriptionServ"><?=$serv[3]?></div>
                        <div class="switcher2">
                            <div class="switcherCircle2"></div>
                        </div>
                        <div class="servPrice"><?=$serv[1]?> ₽</div>
                        <input type="hidden" value="" name="<?=$serv[0]?>" id="serv_<?=$count_serv?>">
                    </div>
                </div>
                </div>
                <div class="voidCatalogueHalf"></div>
                <?php
                $count_serv++;
                }
        ?>
        <?php
            }
        }
        ?>
        
       
    <!-- <div class="grid servGrid">
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
</div> -->
    </form>
</main>

    <script src="../js/script.js"> </script>  
        <div class="voidCatalogueHalf"></div>
        
        <div class="grid backGrid">                                                                     <!--блок возврата на предыдущие страницы-->
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
                
                <?php if (isset($_SESSION['user'])) { ?>
                    <button class="blueButton continueCol4" id="buttonToFormPassengers" onclick="document.getElementById('form-cont').submit();">Продолжить</button>
                <?php } else { ?>
                    <button class="blueButton continueCol4" id="buttonToFormPassengers" onclick="enter.click()">Авторизоваться</button>
                <?php } ?>
            </div>
        </div>
         <div class="void" id="specialVoidFooter"></div>
         <?php require "footer.php"; ?>
                                                       <!--подключение javascript-->
        <script src="../js/script5(orderAddServ).js"> </script>
        <script>
            scrollHeight = document.body.scrollHeight;
            document.getElementById("modalShadow").style.height=`${scrollHeight}px`;  
        </script>
    </body>
</html>