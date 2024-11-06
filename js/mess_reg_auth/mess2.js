
reg.click();

document.getElementById("regEmailTel").style.borderColor = '#AB2929';
document.getElementById("messPhoneEmail").style.display = 'block';
document.getElementById("regEmailTel").addEventListener("input", function () {
    document.getElementById("regEmailTel").style.borderColor = '#6c6c6c';
    document.getElementById("messPhoneEmail").style.display = 'none';
} ); 