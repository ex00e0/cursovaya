
reg.click();

document.getElementById("regPass").style.borderColor = '#AB2929';
document.getElementById("messPass").style.display = 'block';
document.getElementById("regPass").addEventListener("input", function () {
    document.getElementById("regPass").style.borderColor = '#6c6c6c';
    document.getElementById("messPass").style.display = 'none';
} ); 