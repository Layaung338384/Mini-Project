
<?php

    $username = $_POST['userName'];
    $image = $_FILES['file'];


    if($username == '' && $username == null && $image == '' && $image == null){
        header('indexx.php');
        exit();
    }

?>