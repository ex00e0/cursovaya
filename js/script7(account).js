let profile = document.getElementById("curPage");
let allOrders = document.getElementById("allOrders");
let activeOrders = document.getElementById("activeOrders");
let savedPassengers = document.getElementById("savedPassengers");
let navBlue = document.getElementsByClassName("navBlue");
                for(let i=0; i<navBlue.length;i++) {navBlue[i].addEventListener("mouseover", function () {document.getElementById("curPage").style.color="black";}   );
                                                    navBlue[i].addEventListener("mouseout", function () {document.getElementById("curPage").style.color="#2D4EFF";}  );}      //изменение цвета текста при наведении для элементов навигации для десктопной версии
profile.addEventListener("click", function () {allOrders.style.color = "black";
                                                profile.style.color= "#2D4EFF";
                                                activeOrders.style.color= "black";
                                                savedPassengers.style.color= "black";
                                                document.getElementById("emptyBlock").style.display = "none";
                                                document.getElementById("profile1").style.display = "grid";} );          //аналогично тому, что выше
allOrders.addEventListener("click", function () {allOrders.style.color = "#2D4EFF";
                                                 profile.style.color= "black";
                                                 activeOrders.style.color= "black";
                                                 savedPassengers.style.color= "black";
                                                document.getElementById("profile1").style.display = "none";
                                                document.getElementById("emptyBlock").style.display = "grid";} );
activeOrders.addEventListener("click", function () {allOrders.style.color = "black";
                                                    profile.style.color= "black";
                                                    activeOrders.style.color= "#2D4EFF";
                                                    savedPassengers.style.color= "black";
                                                     document.getElementById("profile1").style.display = "none";
                                                document.getElementById("activeOrders").style.display = "grid";} );
// savedPassengers.addEventListener("click", function () {allOrders.style.color = "black";
//                                                         profile.style.color= "black";
//                                                         activeOrders.style.color= "black";
//                                                         savedPassengers.style.color= "#2D4EFF";
//                                                             document.getElementById("profile1").style.display = "none";
//                                                 document.getElementById("emptyBlock").style.display = "grid";} );