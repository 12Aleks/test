
<?php
if($_POST['pol'] <= 60 && $_POST['pol'] >= 10){
    $t = 'Success';
}else{
    $t = 'Sorry';
}
$z = $_POST['pol'];