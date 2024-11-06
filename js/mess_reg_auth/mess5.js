enter.click();

document.getElementById("enterPass").style.borderColor = '#AB2929';
document.getElementById("messPass-auth").style.display = 'block';
document.getElementById("enterPass").addEventListener("input", function () {
    document.getElementById("enterPass").style.borderColor = '#6c6c6c';
    document.getElementById("messPass-auth").style.display = 'none';
} ); 