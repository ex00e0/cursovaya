<?php require "header.php"; ?>
<?php 
require "../database/Flight.php"; 

$search = isset($_POST['search'])? $_POST['search']:false;

?>
 <main>
        <div class='emptyGridAdmin grid' id='emptyBlock'>                   
                     <div class='admin-redirect'><a href='extra/services.php'>К услугам</a></div>
                </div>
                <div class='emptyGridAdmin grid' id='emptyBlock'>                   
                     <div class='admin-redirect'><a href='extra/directions.php'>К направлениям</a></div>
                </div>
                <div class='emptyGridAdmin grid' id='emptyBlock'>                   
                     <div class='admin-redirect'><a href='extra/classes.php'>К классам</a></div>
                </div>
 </main>

<?php
if (isset($_SESSION['mess'])) {
    if (isset($_SESSION['mess']['done'])) {
        echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['done']."'; </script>";
        echo "<script src='/js/sideMess.js'></script>";
    }
    if (isset($_SESSION['mess']['no-delete'])) {
        echo "<script> document.getElementById('sideMessText').innerHTML = '".$_SESSION['mess']['no-delete']."';
                        document.getElementById('sideMess').style.width = '40vmax';
                        document.getElementById('sideMessText').style.fontSize = '1.1vmax'; </script>";
        echo "<script src='/js/sideMess.js'></script>";
    }
    unset($_SESSION['mess']);
}
?>

</body>
</html>