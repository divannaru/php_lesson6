<html>

<head>
    <title>Калькулятор</title>
    <style>
        div, h1 {
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Калькулятор</h1>
    <div>
      <h2>Первый вариант</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Введите первое число</p>
            <input type="text" name="number1"><br>
            <p>Введите второе число</p>
            <input type="text" name="number2"><br>
            <br>
            <p><select size="3" multiple name="calculate">
                <option disabled>Выберите арифметическое действие</option>
                <option selected value="Сложить">Сложить</option>
                <option value="Вычесть">Вычесть</option>
                <option value="Умножить">Умножить</option>
                <option value="Разделить">Разделить</option>
            </select></p>
            <input type="submit" name="submit" value="Вычислить">
        </form>
        <?
            if (isset($_POST["submit"])){
                include "calculatetest.php";
            }
        ?>
        <p>Результат операции: <?=$res?></p>
    </div>
    <hr>
    <div>
       <h2>Второй вариант</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Введите первое число</p>
            <input type="text" name="number3"><br>
            <p>Введите второе число</p>
            <input type="text" name="number4"><br>
            <p>Выберите арифметическое действие</p>
            <input type="submit" name="submit2" value="Сложить">
            <input type="submit" name="submit2" value="Вычесть">
            <input type="submit" name="submit2" value="Умножить">
            <input type="submit" name="submit2" value="Разделить">
        </form>
        <?
            if ($_POST["submit2"]!=null){
                include "calculate2.php";
            }
        ?>
        <p>Результат операции: <?=$res1?></p>
    </div>
</body>

</html>
