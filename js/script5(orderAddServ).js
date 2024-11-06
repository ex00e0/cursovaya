
function isOverflownHeight(element) {return element.clientHeight; }        //функция для получения высоты элемента
const mediaSmall = window.matchMedia("(max-width: 600px) and (orientation:portrait)");
const mediaTablet = window.matchMedia("(max-width: 1199px) and (min-width:601px) and (orientation:portrait)");      //медиа-запросы для телефона и планшета


let blockFood = document.getElementsByClassName("blockFood");

let switchers = document.getElementsByClassName("switcher");
let circles = document.getElementsByClassName("switcherCircle");
let servGrid = document.getElementsByClassName("servGrid");
let selections = document.getElementsByClassName("selection");
let select = document.getElementsByClassName("select");
let imgSelect = document.getElementsByClassName("imgSelect");
let servWrap = document.getElementsByClassName("servWrap");
let check0 = 0;
let checkSelect = 0;                                                //получение разных элементов страницы

// for (let j=0;j<selections.length;j++) {
// selections[j].addEventListener("click", function () {if (checkSelect == 0) {select[j].innerHTML="Скрыть";
//                                                                             imgSelect[j].style.transform = "rotate(180deg)";
//                                                                             if (mediaSmall.matches) {servGrid[j].style.height="55vmax";} 
//                                                                             else if (mediaTablet.matches) {servGrid[j].style.height="65vmax";}
//                                                                             else {servGrid[j].style.height="38vmax";}
//                                                                             servWrap[j].style.height="20%";
//                                                                             if (j==0 || j==1 || j==2) {blockFood[j].style.display = "grid";}
//                                                                            checkSelect++;}       //по нажатию на "Выбрать" раскрывается блок с подробностями выбора дополнительной услуги, "Выбрать" изменяется на "Скрыть"
                                                            
//                                                     else {if (checkSelect==1) {select[j].innerHTML="Показать";
//                                                     if (j==0 || j==1 || j==2) {blockFood[j].style.display = "none";}
//                                                     imgSelect[j].style.transform = "rotate(360deg)";
//                                                     if (mediaSmall.matches || mediaTablet.matches) {servGrid[j].style.height="11vmax";} 
//                                                                             else {servGrid[j].style.height="8vmax";}
//                                                     servWrap[j].style.height="100%";
//                                                                          checkSelect--; }}});  }   //по нажатию на "Скрыть" скрывается блок с подробностями выбора дополнительной услуги, "Скрыть" изменяется на "Выбрать"
// let countBreakfast = 0;
// let countLunch = 0;
// let countDinner = 0;

// let count10 = 0;
// let count20 = 0;
// let count40 = 0;

// let countL10 = 0;
// let countL20 = 0;
// let countL30 = 0;

// let buttonMinus = document.getElementsByClassName("buttonMinusServ");
// let buttonPlus = document.getElementsByClassName("buttonPlusServ");
// let numbersServ = document.getElementsByClassName("numServ");
// for (let x=0; x<buttonMinus.length; x++) {buttonMinus[x].addEventListener("click", function () {if (buttonMinus[x].classList.contains('activeButton')) {buttonPlus[x].classList.remove("disabledButton");             // если кнопка + или - имеет класс "active", то для нее возможно уменьшение или прибавление числа выбранного блюда
//                                                                                                                                                         buttonPlus[x].classList.add("activeButton");      
                                                                                                                                       
//                                                                                                                                                          if (x==3) {countBreakfast--;
//                                                                                                                                                                    numbersServ[x].innerHTML = `${countBreakfast}`; 
//                                                                                                                                                                    if (countBreakfast==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                     buttonMinus[x].classList.remove("activeButton");}}
//                                                                                                                                                             else if (x==4) {countLunch--;
//                                                                                                                                                                 numbersServ[x].innerHTML = `${countLunch}`;
//                                                                                                                                                                 if (countLunch==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                     buttonMinus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                 else if (x==5) {countDinner--;
//                                                                                                                                                                     numbersServ[x].innerHTML = `${countDinner}`;
//                                                                                                                                                                     if (countDinner==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                     buttonMinus[x].classList.remove("activeButton");} }

//                                                                                                                                                                 else if (x==0) {count10--;
//                                                                                                                                                                     numbersServ[x].innerHTML = `${count10}`; 
//                                                                                                                                                                     if (count10==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                      buttonMinus[x].classList.remove("activeButton");}}
//                                                                                                                                                              else if (x==1) {count20--;
//                                                                                                                                                                  numbersServ[x].innerHTML = `${count20}`;
//                                                                                                                                                                  if (count20==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                      buttonMinus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                  else if (x==2) {count40--;
//                                                                                                                                                                      numbersServ[x].innerHTML = `${count40}`;
//                                                                                                                                                                      if (count40==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                      buttonMinus[x].classList.remove("activeButton");}
//                                                                                                                                                                      }

//                                                                                                                                                                      else if (x==6) {countL10--;
//                                                                                                                                                                         numbersServ[x].innerHTML = `${countL10}`; 
//                                                                                                                                                                         if (countL10==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                          buttonMinus[x].classList.remove("activeButton");}}
//                                                                                                                                                                  else if (x==7) {countL20--;
//                                                                                                                                                                      numbersServ[x].innerHTML = `${countL20}`;
//                                                                                                                                                                      if (countL20==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                          buttonMinus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                      else if (x==8) {countL30--;
//                                                                                                                                                                          numbersServ[x].innerHTML = `${countL30}`;
//                                                                                                                                                                          if (countL30==0) {buttonMinus[x].classList.add("disabledButton");
//                                                                                                                                                                          buttonMinus[x].classList.remove("activeButton");}
//                                                                                                                                                                          }
                                                                                                                                                        
//                                                                                                                                                         if (numbersServ[0].textContent == 0 && numbersServ[1].textContent == 0 && numbersServ[2].textContent == 0) {circles[0].style.left = "5%";
//                                                                                                                                                         circles[0].style.backgroundColor = "rgb(217, 217, 217)";
//                                                                                                                                                         switchers[0].style.borderColor  = "rgb(217, 217, 217)";}                                   //если хотя бы в одном из блюд количество не равно 0, то автоматически активируется переключатель выше
//                                                                                                                                                         if (numbersServ[3].textContent == 0 && numbersServ[4].textContent == 0 && numbersServ[5].textContent == 0) {circles[1].style.left = "5%";
//                                                                                                                                                             circles[1].style.backgroundColor = "rgb(217, 217, 217)";
//                                                                                                                                                             switchers[1].style.borderColor  = "rgb(217, 217, 217)";}
//                                                                                                                                                             if (numbersServ[6].textContent == 0 && numbersServ[7].textContent == 0 && numbersServ[8].textContent == 0) {circles[2].style.left = "5%";
//                                                                                                                                                                 circles[2].style.backgroundColor = "rgb(217, 217, 217)";
//                                                                                                                                                                 switchers[2].style.borderColor  = "rgb(217, 217, 217)";}
//                                                                                                                                                         } } );}
// for (let x=0; x<buttonPlus.length; x++) {buttonPlus[x].addEventListener("click", function () {if (buttonPlus[x].classList.contains('activeButton')) {buttonMinus[x].classList.remove("disabledButton");
//                                                                                                                                                         buttonMinus[x].classList.add("activeButton");
//                                                                                                                                                          if (x==3) {countBreakfast++;
//                                                                                                                                                                    numbersServ[x].innerHTML = `${countBreakfast}`; 
//                                                                                                                                                                    if (countBreakfast==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                     buttonPlus[x].classList.remove("activeButton");}}
//                                                                                                                                                             else if (x==4) {countLunch++;
//                                                                                                                                                                 numbersServ[x].innerHTML = `${countLunch}`;
//                                                                                                                                                                 if (countLunch==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                     buttonPlus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                 else if (x==5) {countDinner++;
//                                                                                                                                                                     numbersServ[x].innerHTML = `${countDinner}`;
//                                                                                                                                                                     if (countDinner==5) {buttonPlus[x].classList.add("disabledButton");       // для buttonPlus задается ограничение до 5 блюд
//                                                                                                                                                                     buttonPlus[x].classList.remove("activeButton");}} 

//                                                                                                                                                                     if (x==0) {count10++;
//                                                                                                                                                                         numbersServ[x].innerHTML = `${count10}`; 
//                                                                                                                                                                         if (count10==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                          buttonPlus[x].classList.remove("activeButton");}}
//                                                                                                                                                                  else if (x==1) {count20++;
//                                                                                                                                                                      numbersServ[x].innerHTML = `${count20}`;
//                                                                                                                                                                      if (count20==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                          buttonPlus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                      else if (x==2) {count40++;
//                                                                                                                                                                          numbersServ[x].innerHTML = `${count40}`;
//                                                                                                                                                                          if (count40==5) {buttonPlus[x].classList.add("disabledButton");       
//                                                                                                                                                                          buttonPlus[x].classList.remove("activeButton");}} 
                                                                                                                                                                        
//                                                                                                                                                                          if (x==6) {countL10++;
//                                                                                                                                                                             numbersServ[x].innerHTML = `${countL10}`; 
//                                                                                                                                                                             if (countL10==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                              buttonPlus[x].classList.remove("activeButton");}}
//                                                                                                                                                                      else if (x==7) {countL20++;
//                                                                                                                                                                          numbersServ[x].innerHTML = `${countL20}`;
//                                                                                                                                                                          if (countL20==5) {buttonPlus[x].classList.add("disabledButton");
//                                                                                                                                                                              buttonPlus[x].classList.remove("activeButton");}} 
//                                                                                                                                                                          else if (x==8) {countL30++;
//                                                                                                                                                                              numbersServ[x].innerHTML = `${countL30}`;
//                                                                                                                                                                              if (countL30==5) {buttonPlus[x].classList.add("disabledButton");       
//                                                                                                                                                                              buttonPlus[x].classList.remove("activeButton");}} 

//                                                                                                                                                                     if (numbersServ[0].textContent != 0 || numbersServ[1].textContent != 0 || numbersServ[2].textContent != 0) {circles[0].style.left = "60%";
//                                                                                                                                                                     circles[0].style.backgroundColor = "rgb(45, 78, 255)";
//                                                                                                                                                                     switchers[0].style.borderColor  = "rgb(45, 78, 255)";}

//                                                                                                                                                                     if (numbersServ[3].textContent != 0 || numbersServ[4].textContent != 0 || numbersServ[5].textContent != 0) {circles[1].style.left = "60%";
//                                                                                                                                                                         circles[1].style.backgroundColor = "rgb(45, 78, 255)";
//                                                                                                                                                                         switchers[1].style.borderColor  = "rgb(45, 78, 255)";}
//                                                                                                                                                                         if (numbersServ[6].textContent != 0 || numbersServ[7].textContent != 0 || numbersServ[8].textContent != 0) {circles[2].style.left = "60%";
//                                                                                                                                                                             circles[2].style.backgroundColor = "rgb(45, 78, 255)";
//                                                                                                                                                                             switchers[2].style.borderColor  = "rgb(45, 78, 255)";}



//                                                                                                                                                         } } );}
let switchers2 = document.getElementsByClassName("switcher2");
let circles2 = document.getElementsByClassName("switcherCircle2");
for (let z=0; z<switchers2.length; z++) {switchers2[z].addEventListener("click", function () { if (check0 == 1) {circles2[z].style.left = "5%";        //работа переключателя по клику для дополнительных услуг без выпадающего блока
                                        circles2[z].style.backgroundColor = "rgb(217, 217, 217)";
                                        switchers2[z].style.borderColor  = "rgb(217, 217, 217)";
                                        check0--;
                                       document.getElementById("serv_" + z).value = "off"; }
                                           else if (check0 == 0) {circles2[z].style.left = "65%";
                                        circles2[z].style.backgroundColor = "rgb(45, 78, 255)";
                                        switchers2[z].style.borderColor  = "rgb(45, 78, 255)";
                                        check0++;
                                        document.getElementById("serv_" + z).value = "on"; }} );}
// let buttonCont=document.getElementById("buttonToFormPassengers");
// buttonCont.addEventListener("click", function () {document.location='orderFormPassengers.php';} );     //перемещение на другую страницу по кнопке "продолжить"

// function sendServ (class_t,number,from,to,there,back,adults,children) {
  
//     location.href="orderFormPassengers.php?class=" + class_t + "&number=" + number + "&from=" + from + "&to=" + to + "&there=" + there + "&back=" + back + "&adults=" + adults + "&children=" + children + "&countBreakfast=" + countBreakfast + "&=countLunch=" + countLunch + "&=countDinner=" + countDinner + "&count10=" + count10 + "&count20=" + count20 + "&count40=" + count40 + "&countL10=" + countL10 + "&countL20=" + countL20 + "&countL30=" + countL30;
// }





                                                                     