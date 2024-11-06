document.getElementById("sideMess").style.top="20%";

document.getElementById("closeMess").addEventListener("click", function () {
    document.getElementById("sideMess").style.top="-20%";
});

document.addEventListener('DOMContentLoaded', function(){

setTimeout(
    () => {
        document.getElementById("closeMess").click();
    },
    4 * 1000
  );

});