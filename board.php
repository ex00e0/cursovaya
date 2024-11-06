<?php require "header.php"; ?>
<?php require "database/Flight.php"; ?>
<div id="timetableTH">
<div class="headline" id="headline1">Табло рейсов</div>
                <div class="headline" id="headline2">
                    <div id="yesterday" onclick="document.getElementById('today').style.color='black';
                    document.getElementById('tomorrow').style.color='black';
                    document.getElementById('yesterday').style.color='#2D4EFF';">29 октября</div>
                    <div id="today" onclick="document.getElementById('tomorrow').style.color='black';
                    document.getElementById('yesterday').style.color='black';
                    document.getElementById('today').style.color='#2D4EFF';">30 октября</div>
                    <div id="tomorrow" onclick="document.getElementById('today').style.color='black';
                    document.getElementById('yesterday').style.color='black';
                    document.getElementById('tomorrow').style.color='#2D4EFF';">31 октября</div>
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
</div>
<div class="voidSmall"></div>
            <main>  
           <?php 
           $day = date('Y-m-d');
           $flights = new Flight;
           $flights = $flights-> getFlightsTimetable ($day);
           if ($flights != null) {
           foreach ($flights as $flight) {
            ?>
            <div class="timetableTR">
           <div class="timetable">
                    <div class="wrapTimetable">
                        <div class="tableText1"><?=$flight[0]?></div>
                        <div class="tableText4"><?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[3]);
                          echo $get_name_direction['name'];
                    
                    ?></div>
                        <div class="tableText3"><?=substr($flight[1], 11, 5)?></div>
                        <div class="tableText6"><?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[4]);
                          echo $get_name_direction['name'];
                    
                    ?></div>
                        <div class="tableText5"><?=substr($flight[2], 11, 5)?></div>

                        <?php
                         $get_status_info = new Flight;
                         $get_status_info = $get_status_info -> getFlightStatusInfoByStatusId ($flight[6]);
                          
                    
                        ?>

                        <div class="<?php if ($get_status_info['status'] == 'Вылетел') {echo "statusGreen";}
                             else if ($get_status_info['status'] == 'Регистрация') {echo "statusYellow";}
                             else if ($get_status_info['status'] == 'Отменен') {echo "statusRed";} 
                             else if ($get_status_info['status'] == 'Создан') {echo "statusGray";} ?> terminalGate tableText2"><?=$get_status_info['status'] ?></div>
                        <div class="terminalGate tableText7" ><?=$get_status_info['terminal'] ?></div>
                        <div class="terminalGate tableText8"><?=$get_status_info['gate'] ?></div>
                        <div class="code1 tableText9"><?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[3]);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?></div>
                        <div class="code2 tableText10"><?php
                         $get_name_direction = new Flight;
                         $get_name_direction = $get_name_direction -> getNameDirection($flight[4]);
                          echo "(".$get_name_direction['code_airport'].")";
                    
                    ?></div>
                    </div>
        </div>
            </div>
            <div class="voidSmall"></div>
            <?php
           } } else {
            ?>
            <div class="emptyGridAdmin grid" id="emptyBlock">                     <!--блок "Пока пусто.." для вкладок, где информации нет-->
              <div class="empty">На этот день нет рейсов..</div>
            </div>
            <?php
           }
           ?>
           
                 <!--     </div>
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
                </div> -->
            </main>
            <div class="void"></div>
           <?php require "footer.php"; ?>
        <script src="../js/script.js"> </script>                                            <!--подключение javascript-->
   
        <script>
// let navS = document.getElementById("");
// let text = "<?php $search ?>";
// navS.value = text;
$(document).ready(function() {
  $('#yesterday').on('click', getY);
  $('#tomorrow').on('click', getT);
  $('#today').on('click', getTo);
});

var getY = function(){
    let request_data = "yesterday";
    $.ajax({
        url: 'boardYT.php',         /* Куда отправить запрос */
        method: 'post',             /* Метод запроса (post или get) */
        dataType: 'html',         /* Тип данных в ответе (xml, json, script, html). */
        data: {text: request_data},     /* Данные передаваемые в массиве */
        success: function(data){
            $("main").html(data);
        }
    }); 
}
var getTo = function(){
    let request_data = "today";
    $.ajax({
        url: 'boardYT.php',         /* Куда отправить запрос */
        method: 'post',             /* Метод запроса (post или get) */
        dataType: 'html',         /* Тип данных в ответе (xml, json, script, html). */
        data: {text: request_data},     /* Данные передаваемые в массиве */
        success: function(data){
            $("main").html(data);
        }
    }); 
}
var getT = function(){
    let request_data = "tomorrow";
    $.ajax({
        url: 'boardYT.php',         /* Куда отправить запрос */
        method: 'post',             /* Метод запроса (post или get) */
        dataType: 'html',         /* Тип данных в ответе (xml, json, script, html). */
        data: {text: request_data},     /* Данные передаваемые в массиве */
        success: function(data){
            $("main").html(data);
        }
    }); 
}
</script>
<script src="../js/script2(board).js"> </script>
    </body>
</html>