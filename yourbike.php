<?php
$mysqli = mysqli_connect("localhost", "root", "", "nobike");
mysqli_set_charset($mysqli,"utf8");
session_start();
/*
echo $_SESSION['no'];
echo $_SESSION['name'];
echo $_SESSION['bike_no'];
*/
$id_bike = array();
if ($_SESSION['bike_no'] == NULL)
{
    echo "Please register your bike";
}
else
{
    $bike = $_SESSION['bike_no'];
    $n = strlen($bike);
    for($i = 0 , $id = 0 ,$cnt = 0 ;$i < $n ; $i++)
    {
        $id *= 10;
        $id += intval($bike[$i]);
        if($bike[$i] == ':' || $i+1 == $n)
        {
            if ($bike[$i] == ':')
            {
                $id /= 10;
            }
            $id_bike[$cnt] = $id;
            $cnt++;
            $id = 0;
        }
        
    }
}

echo "Test array<br>";
foreach  ($id_bike as $i)
{
    echo $i;
    echo "<br>";
    //show your bike with $i
}
?>