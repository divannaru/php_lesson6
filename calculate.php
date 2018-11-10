<?
$x=$_POST[number1];
$y=$_POST[number2];
$act=$_POST[calculate];

if (is_numeric($x) && is_numeric($y)){
    $res=mathOperation($x, $y, $act);
}
else{
    echo "То, что вы ввели хотя бы в одно из полей, не является числом, либо одно из полей пустое<br>Введите числа! Дробные числа нужно вводить точку";
}

function mathOperation ($arg1, $arg2, $operation){
    switch ($operation){
        case "Сложение":
            return $arg1+$arg2;
            break;
        case "Вычитание":
            return $arg1-$arg2;
            break;
        case "Умножение":
            return $arg1*$arg2;
            break;
        case "Деление":
            if ($arg2!=0){
                return $arg1/$arg2;
            }
            else {
                echo "Ошибка! Вы пытаетесь выполнить деление на 0";
            }
            break;
        default:
            echo "Ошибка";
            break;
    }
}
