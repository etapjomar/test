<?php
$db_host = 'testetap.cluster-cfjxljztcukg.ap-southeast-1.rds.amazonaws.com';
$db_user = "sysops"; //change it
$db_pass = "1Qaz_4567(><)"; //change it
$db_name = "test"; //change it
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
    //echo 'connected';
}
