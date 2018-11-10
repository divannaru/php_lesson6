<?
$a=$_POST[number3];
$b=$_POST[number4];
$act2=$_POST[submit2];

echo $act;

include "mathoperation.php";
if (is_numeric($a) && is_numeric($b)){
    $res1=mathOperation($a, $b, $act2);
}
else{
    echo "То, что вы ввели хотя бы в одно из полей, не является числом, либо одно из полей пустое<br>Введите числа! Дробные числа нужно вводить точку";
}