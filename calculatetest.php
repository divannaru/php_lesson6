<?
$x=$_POST[number1];
$y=$_POST[number2];
$act=$_POST[calculate];
include "mathoperation.php";

if (is_numeric($x) && is_numeric($y)){
    $res=mathOperation($x, $y, $act);
}
else{
    echo "То, что вы ввели хотя бы в одно из полей, не является числом, либо одно из полей пустое<br>Введите числа! Дробные числа нужно вводить точку";
}