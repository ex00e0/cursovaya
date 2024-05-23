let inputsFormPassenger = document.getElementsByClassName("jsInput");
let labelsForInputsPassenger = document.getElementsByClassName("labelJs");
const mediaSmall = window.matchMedia("(max-width: 600px) and (orientation:portrait)");
const mediaTablet = window.matchMedia("(max-width: 1199px) and (min-width:601px) and (orientation:portrait)");
const mediaSmallAndTablet = window.matchMedia("(max-width: 1199px) and (orientation:portrait)");
for (let r = 0; r < inputsFormPassenger.length; r++) {inputsFormPassenger[r].addEventListener("input", function () {if (r==(inputsFormPassenger.length-1) && mediaSmallAndTablet.matches) {inputsFormPassenger[r].style.paddingTop = "7%";} else {inputsFormPassenger[r].style.paddingTop = "3%";}
                                                                                                            labelsForInputsPassenger[r].style.display = "block";
                                                                                                            inputsFormPassenger[r].style.color = "black";} );        }

let radioButtons = document.getElementsByClassName("radioButton");
let circleRadio = document.getElementsByClassName ("circleRadio");
for (let m=0; m<radioButtons.length; m++) {radioButtons[m].addEventListener("click", function () {if (radioButtons[m].classList.contains("firstRadioButton")) {circleRadio[m+1].style.display="none";
                                                        circleRadio[m].style.display="block";}
                                                        else {circleRadio[m-1].style.display="none";
                                                        circleRadio[m].style.display="block";} } ); }    //имитация работы input[type="radio"] для обычных кнопок


let switchers2 = document.getElementsByClassName("switcher2");
let circles2 = document.getElementsByClassName("switcherCircle2");
let check0 = 0;
for (let z=0; z<switchers2.length; z++) {switchers2[z].addEventListener("click", function () { if (check0 == 1) {circles2[z].style.left = "5%";
                                                                                                circles2[z].style.backgroundColor = "rgb(217, 217, 217)";
                                                                                                switchers2[z].style.borderColor  = "rgb(217, 217, 217)";
                                                                                                check0--; }
                                                                                                   else if (check0 == 0) {circles2[z].style.left = "65%";
                                                                                                circles2[z].style.backgroundColor = "rgb(45, 78, 255)";
                                                                                                switchers2[z].style.borderColor  = "rgb(45, 78, 255)";
                                                                                                check0++;}} );}
let autoFillJs = document.getElementsByClassName("autoFillJs");
let blockFill = document.getElementsByClassName("blockFill");
let checkFillDisplay = 0;
for(let fi1=0;fi1<autoFillJs.length;fi1++) {autoFillJs[fi1].addEventListener("click", function () {if (checkFillDisplay==0){ for (let fi=0;fi<blockFill.length; fi++) {blockFill[fi].style.display = "grid";} 
                                                                                                   if (mediaSmallAndTablet.matches) {circles2[fi1].style.display = "none"; }            //изменение стиля с медиа-запросом                                                                   
                                                                                                   checkFillDisplay++;}
                                                                                                   else {for (let fi=0;fi<blockFill.length; fi++) {blockFill[fi].style.display = "none";} 
                                                                                                   circles2[fi1].style.display = "block"; 
                                                                                                   checkFillDisplay--;} } );}                //появление раскрывающегося списка сохраненных пассажиров по нажатию на "Автозаполнение"
/*let contact = document.getElementById("");
let checkContactDisplay = 0;
contact.addEventListener("click", function () {if (checkContactDisplay==0){ for (let fi=0;fi<blockFill.length; fi++) {blockFill[fi].style.display = "grid";} 
                                                                           checkContactDisplay++;}
else {for (let fi=0;fi<blockFill.length; fi++) {blockFill[fi].style.display = "none";} 
      checkContactDisplay--;} } );*/