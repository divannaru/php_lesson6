<html>

<head>
    <title>Калькулятор</title>
    <style>
        div {
            text-align: center;
        }

    </style>
</head>

<body>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Введите первое число</p>
            <input type="text" name="number1"><br>
            <p>Введите второе число</p>
            <input type="text" name="number2"><br>
            <br>
            <p><select size="3" multiple name="calculate">
                <option disabled>Выберите арифметическое действие</option>
                <option selected value="Сложение">Сложение</option>
                <option value="Вычитание">Вычитание</option>
                <option value="Умножение">Умножение</option>
                <option value="Деление">Деление</option>
            </select></p>
            <input type="submit" name="submit" value="Вычислить">
        </form>
        <?
            if (isset($_POST["submit"])){
                include "calculate.php";
            }
        ?>
<p>Результат операции: <?=$res?></p>

    </div>
</body>

</html>
