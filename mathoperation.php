<?
function mathOperation ($arg1, $arg2, $operation){
    switch ($operation){
        case "Сложить":
            return $arg1+$arg2;
            break;
        case "Вычесть":
            return $arg1-$arg2;
            break;
        case "Умножить":
            return $arg1*$arg2;
            break;
        case "Разделить":
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
?>