<?php
    $mysqli = mysqli_connect("localhost", "root", "", "nobike");
    mysqli_set_charset($mysqli,"utf8");
    $data = $_POST["login"];
    $res = mysqli_query($mysqli, "SELECT * FROM user WHERE user = '$data[0]' AND pass = '$data[1]';");
    $row = mysqli_fetch_row($res);
    session_start();
    $_SESSION['no'] = $row[0];
    $_SESSION['name'] = $row[1];
    $_SESSION['bike_no'] = $row[4];
    mysqli_close($mysqli);
?>