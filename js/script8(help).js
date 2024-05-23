let inputMessage = document.getElementById("inputMessage");
inputMessage.addEventListener("input", function () {inputMessage.style.color="black";} );  //изменение цвета текста при вводе
let inputTypeFile = document.getElementById("inputTypeFile");
let paperclip = document.getElementById("paperclip");
paperclip.addEventListener("click", function () {inputTypeFile.click();} ); //имитация работы input[type="file"] для скрепки сообщения