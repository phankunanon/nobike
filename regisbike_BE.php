<?php
    $mysqli = mysqli_connect("localhost", "root", "", "nobike");
    mysqli_set_charset($mysqli,"utf8");
    $data = $_POST["bike"];
    $res = mysqli_query($mysqli, "
                                INSERT INTO `bike` (`no_bike`, `name`, `ip_gps`, `noise`, `lock_bike`, `Brand`, `Color`) VALUES 
                                (NULL, '$data[0]', '$data[1]', '0' , '0', '$data[2]', '$data[3]');
                                ");
    mysqli_close($mysqli);
?>