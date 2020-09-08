<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>one lab web</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <table align="center" border="1" bgcolor="#fff0f5" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <h2 align="center">Шибаев Семён Сергеевич<br>
                P3210<br>
                Вариант 2126</h2>
        </tr>
        <tr>
            <td>
                <form onsubmit="return valid(this);"
                      action="script.php" method="post" name="form" id="form">
                    <p class="text"> Введите абсциссу X,выберете ординату Y и параметр R.<br></p>
                    Введите значение X из интервала (-3;3)
                    <input type="text" name="X" maxlength="7"><br>

                    Введите целочисленное значение Y из предложенных :<br>
                    <input type="radio" name="Y" value="-4" id="-4" required> <label for="-4"> -4 </label>
                    <input type="radio" name="Y" value="-3" id="-3" required> <label for="-3"> -3 </label>
                    <input type="radio" name="Y" value="-2" id="-2" required> <label for="-2"> -2 </label>
                    <input type="radio" name="Y" value="-1" id="-1" required> <label for="-1"> -1 </label>
                    <input type="radio" name="Y" value="0" id="0" required> <label for="0"> 0 </label>
                    <input type="radio" name="Y" value="1" id="1" required> <label for="1"> 1 </label>
                    <input type="radio" name="Y" value="2" id="2" required> <label for="2"> 2 </label>
                    <input type="radio" name="Y" value="3" id="3" required> <label for="3"> 3 </label>
                    <input type="radio" name="Y" value="4" id="4" required> <label for="4"> 4 </label>

                    <br>Введите целочисленное значение R из предложенных :<br>
                    <input type="radio" name="R" value="1" id="1" required> <label for="1"> 1 </label>
                    <input type="radio" name="R" value="1.5" id="1.5" required> <label for="1.5"> 1.5 </label>
                    <input type="radio" name="R" value="2" id="2" required> <label for="2"> 2 </label>
                    <input type="radio" name="R" value="2.5" id="2.5" required> <label for="2.5"> 2.5 </label>
                    <input type="radio" name="R" value="3" id="3" required> <label for="3"> 3 </label>
                    <br><input type="submit" name="ready" value="Готово">
                    </form>
                <form name="des" method="post" action="script.php" >
                    <input type="submit" name="des" value="Очистить сессию" >
                </form>

            <td >
                <img src="laba1.png" id="graphic">
            </td>
        <tr>
        </tr>
        <table align="center" border="1" cellpadding="0" cellspacing="0" width="100%" style="color:brown; width: 150px">
            <tr>
                <td><h3>Координата X</h3></td>
                <td><h3>Координата Y</h3></td>
                <td><h3>Параметр R</h3></td>
                <td><h3>Результат</h3></td>
                <td><h3>Дата и время запроса</h3></td>
                <td><h3>Время выполнения</h3></td>
            </tr>

            <?php
            if (isset($_SESSION["data"]))
                foreach ($_SESSION["data"] as $se)
                    print $se;
            ?>


        </table>

        </table>


        <script type="text/javascript">
            function valid(form) {
                var fail = false;
                var X = form.X.value;

                if (X === "") {
                    fail = "Введите X из интервала (-3;3)";
                    alert(fail);
                    return false;
                }
                if (isNaN(X)) {
                    fail = "Введите X из интервала (-3;3)";
                    alert(fail);
                    return false;
                }
                if (X > 3 || X < -3) {
                    fail = "Введите X из интервала (-3;3)";
                    alert(fail);
                    return false;
                }
                return true;

            }


        </script>

    </body>
</html>