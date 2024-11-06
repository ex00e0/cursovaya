
reg.click();

document.getElementById("regName").style.borderColor = '#AB2929';
document.getElementById("messName").style.display = 'block';
document.getElementById("regName").addEventListener("input", function () {
    document.getElementById("regName").style.borderColor = '#6c6c6c';
    document.getElementById("messName").style.display = 'none';
} ); 