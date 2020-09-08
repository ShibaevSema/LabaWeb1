<?php
header("Location: http://localhost", true, 301);
session_start();
$starting = microtime(true);
date_default_timezone_set('Europe/Moscow');
$time = date("d.m.y H:i");
$X = $_POST['X'];
$Y = $_POST['Y'];
$R = $_POST['R'];
$DELETE = $_POST['des'];
var_dump($_POST);
if ($DELETE == "Очистить сессию") {
    session_destroy();
}
if ($X == "" || !is_numeric($X) || floatval($X) > 3 || floatval($X) < -3) return;

if (!in_array($Y, array("-4", "-3", "-2", "-1", "0", "1", "2", "3", "4"))) {
    return;
}
if (!in_array($R, array("1", "1.5", "2", "2.5", "3"))) {
    return;
}
$X = floatval($X);
$Y = intval($Y);
$R = floatval($R);

if (($X > 0) && ($Y > 0)) {
    if (pow($X, 2) + pow($Y, 2) <= pow($R, 2)) {
        $RES = 'Точка попадает на фигуру';
    } else {
        $RES = 'Точка не попадает на фигуру';
    }
}
if (($X > 0) && ($Y < 0)) {
    if (($Y >= -$R / 2) && ($X <= $R)) {
        $RES = 'Точка попадает на фигуру';
    } else {
        $RES = 'Точка не попадает на фигуру';
    }
}
if (($X < 0) && ($Y < 0)) {
    if (($Y + $X) >= -$R) {
        $RES = 'Точка попадает на фигуру';
    } else {
        $RES = 'Точка не попадает на фигуру';
    }
}
if (($X < 0) && ($Y > 0)) {
    $RES = 'Точка не попадает на фигуру';
}
if ($X == 0 && $Y == 0) {
    $RES = 'Точка попадает на фигуру';
} elseif ($Y > abs($R) && $X == 0) {
    $RES = 'Точка не попадает на фигуру';
} elseif ($Y <= abs($R) && $X == 0) {
    $RES = 'Точка попадает на фигуру';
} elseif ($X > abs($R) && $Y == 0) {
    $RES = 'Точка не попадает на фигуру';
} elseif ($X <= abs($R) && $Y == 0) {
    $RES = 'Точка попадает на фигуру';
}
$finishing = microtime(true);
$timeWork = $finishing - $starting;
$timeWork = round($timeWork, 4);
if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = array();
}

$se = "<tr>    
<td> $X </td>
<td> $Y </td>
<td> $R </td>
<td> $RES 
<td> $time </td>
<td> $timeWork </td>
</tr>";
array_push($_SESSION["data"], $se);




