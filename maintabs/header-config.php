<?php
    
    $email =  $_REQUEST['raw-data'];
    include '../dbconfig.php';
    $select = "select * from tbl_user where email = '$email'";
    $res = $mysqli->query($select);
    $row = $res->fetch_assoc();
    echo $row['user_id'];
    ?>