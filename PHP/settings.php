<?php
session_start();
error_reporting(0);

// echo '<pre>';
// print_r($_POST['sesja']);
// echo '</pre>';

if(isset($_POST['sesja'])) {
    $_SESSION['sesja']= $_POST['sesja'];
}




if($_SESSION['sesja'] ==''){
    ?>
        <div class="shirtColor">
        <div class="logoText"></div>
        <div class="logoMini"></div>
    </div>
    <?php
}
else {
    echo $_SESSION['sesja'];

}



            
?>