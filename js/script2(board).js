         let todayD = new Date(); 
                let yesterdayD = new Date(Date.now()-86400000);
                let tomorrowD = new Date(Date.now()+86400000);           //получение вчерашней, сегодняшей и завтрашней дат
                let todayMonth = todayD.getMonth();
                let yesterdayMonth = yesterdayD.getMonth();
                let tomorrowMonth = tomorrowD.getMonth();               //получение месяцов этих дат
                function monthConvert (month) {switch (month)                                    //функция изменения цифры месяца на соответствующий текст
                                                {case 0: return "января";   break;
                                                    case 1: return "февраля";  break;
                                                    case 2: return "марта";   break;
                                                    case 3: return "апреля";  break;
                                                    case 4: return "мая";   break;
                                                    case 5: return "июня";  break;
                                                    case 6: return "июля";   break;
                                                    case 7: return "августа";  break;
                                                    case 8: return "сентября";   break;
                                                    case 9: return "октября";  break;
                                                    case 10: return "ноября";   break;
                                                    case 11: return "декабря";  break;} }
                todayMonth = monthConvert(todayMonth);
                yesterdayMonth = monthConvert(yesterdayMonth);
                tomorrowMonth = monthConvert(tomorrowMonth);
                today.innerHTML= `${todayD.getDate()} ` + todayMonth;
                yesterday.innerHTML= `${yesterdayD.getDate() } ` + yesterdayMonth;
                tomorrow.innerHTML= `${tomorrowD.getDate() } ` + tomorrowMonth;         //запись вчерашней, сегодняшей и завтрашней дат на страницу

                let tomorrowClick = document.getElementById("tomorrow");
                let todayClick = document.getElementById("today");
                let yesterdayClick = document.getElementById("yesterday");

                tomorrowClick.addEventListener("click", function () {document.getElementById("timetable1").style.display="none";    //появление блоков с расписанием рейсов по нажатию на каждую из дат и скрытие лишних блоков
                document.getElementById("timetable2").style.display="none";
                document.getElementById("timetable3").style.display="none"; 
                document.getElementById("timetable1T").style.display="grid";
                document.getElementById("timetable2T").style.display="grid";
                document.getElementById("timetable3T").style.display="grid"; 
                document.getElementById("timetable1Y").style.display="none";
                document.getElementById("timetable2Y").style.display="none";
                document.getElementById("timetable3Y").style.display="none";
                tomorrowClick.style.color="#2D4EFF";
                todayClick.style.color="black";
                yesterdayClick.style.color="black";} );

                todayClick.addEventListener("click", function () {document.getElementById("timetable1").style.display="grid";
                document.getElementById("timetable2").style.display="grid";
                document.getElementById("timetable3").style.display="grid"; 
                document.getElementById("timetable1T").style.display="none";
                document.getElementById("timetable2T").style.display="none";
                document.getElementById("timetable3T").style.display="none"; 
                document.getElementById("timetable1Y").style.display="none";
                document.getElementById("timetable2Y").style.display="none";
                document.getElementById("timetable3Y").style.display="none"; 
                todayClick.style.color="#2D4EFF";
                tomorrowClick.style.color="black";
                yesterdayClick.style.color="black";} );

                yesterdayClick.addEventListener("click", function () {document.getElementById("timetable1").style.display="none";
                document.getElementById("timetable2").style.display="none";
                document.getElementById("timetable3").style.display="none"; 
                document.getElementById("timetable1T").style.display="none";
                document.getElementById("timetable2T").style.display="none";
                document.getElementById("timetable3T").style.display="none"; 
                document.getElementById("timetable1Y").style.display="grid";
                document.getElementById("timetable2Y").style.display="grid";
                document.getElementById("timetable3Y").style.display="grid"; 
                yesterdayClick.style.color="#2D4EFF";
                todayClick.style.color="black";
                tomorrowClick.style.color="black";} ); 