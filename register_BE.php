<?php
    $mysqli = mysqli_connect("localhost", "root", "", "nobike");
    mysqli_set_charset($mysqli,"utf8");
    $data = $_POST["user"];
    $res = mysqli_query($mysqli, "
                                INSERT INTO `user` (`no`, `name`, `user`, `pass`, `bike_no`) VALUES 
                                (NULL, '$data[0]', '$data[1]', '$data[2]', NULL);
                                ");
    mysqli_close($mysqli);
?>