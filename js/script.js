let navBlue = document.getElementsByClassName("navBlue");
                for(let i=0; i<navBlue.length;i++) {navBlue[i].addEventListener("mouseover", function () {document.getElementById("curPage").style.color="black";}   );
                                                    navBlue[i].addEventListener("mouseout", function () {document.getElementById("curPage").style.color="#2D4EFF";}  );}         //изменение цвета элементов навигации при наведении для десктопной версии

                let menuMobile=document.getElementById("menuMobile");
                menuMobile.addEventListener("click", function () {document.getElementById("navMobileShadow").style.display="block";
                                                                  document.getElementById("navMobile").style.display="grid";
                                                                  document.getElementById("navMobileText").style.display="grid";  
                                                                  document.body.style.overflow="hidden";  
                                                                  document.body.style.height="100vh";  } );    //при клике на меню в версии телефона/планшета появляется боковое меню навигации и блокируется прокрутка
                let close=document.getElementById("close");
                close.addEventListener("click", function () {document.getElementById("navMobileShadow").style.display="none";
                                                                  document.getElementById("navMobile").style.display="none";
                                                                  document.getElementById("navMobileText").style.display="none";   
                                                             document.body.style.overflow="auto"; 
                                                             document.body.style.height="auto";  } );   //при клике на крестик в версии телефона/планшета скрывается боковое меню навигации и происходит разблокировка прокрутки
                                                             
                let scrollHeight = document.body.scrollHeight;
                document.getElementById("modalShadow").style.height=`${scrollHeight}px`;            //для тени модальных окон задается высота, равная всей странице со скроллом                           
                let enter=document.getElementById("enter");
                enter.addEventListener("click", function () {document.getElementById("modalEnter").style.top="50%";
                                                            document.getElementById("modalShadow").style.display="block";} ); 
                let closeEnter = document.getElementById("closeEnter");
                closeEnter.addEventListener("click", function () {document.getElementById("modalEnter").style.top="-50%";
                                                                  document.getElementById("modalShadow").style.display="none";} );
                let reg=document.getElementById("reg");
                reg.addEventListener("click", function () {document.getElementById("modalReg").style.top="50%";
                                                            document.getElementById("modalShadow").style.display="block";
                                                            } );
                let closeReg = document.getElementById("closeReg");
                closeReg.addEventListener("click", function () {document.getElementById("modalReg").style.top="-50%";
                                                                  document.getElementById("modalShadow").style.display="none";} );     //прослушиватель событий по клику для крестиков модальных окон и кнопок регистрации и входа
                
                let inputs = document.getElementsByClassName("inputModal");
                let labelsForInputs = document.getElementsByClassName("labelModal");
                for (let i = 0; i < inputs.length; i++) {inputs[i].addEventListener("input", function () {inputs[i].style.paddingTop = "5%";
                                                                                                            labelsForInputs[i].style.display = "block";
                                                                                                            inputs[i].style.color = "black";} );        }    //изменение стилей input при вводе текста так, чтобы сверху появлялся label, а сам текст немного опускался
    



                                                                                                                            