document.getElementById("inputAcc-name").style.borderColor = '#AB2929';
document.getElementById("messAcc-name").style.display = 'block';
document.getElementById("inputAcc-name").addEventListener("input", function () {
    document.getElementById("inputAcc-name").style.borderColor = '#6c6c6c';
    document.getElementById("messAcc-name").style.display = 'none';
} ); 