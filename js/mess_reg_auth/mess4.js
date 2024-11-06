
enter.click();

document.getElementById("enterEmailTel").style.borderColor = '#AB2929';
document.getElementById("messPhoneEmail-auth").style.display = 'block';
document.getElementById("enterEmailTel").addEventListener("input", function () {
    document.getElementById("enterEmailTel").style.borderColor = '#6c6c6c';
    document.getElementById("messPhoneEmail-auth").style.display = 'none';
} ); 