<?php
// if (isset($_POST['arg1'], $_POST['arg2'], $_POST['action'])){ //Проверка ввода всех данных
//     $a = $_POST['arg1'];
//     $b = $_POST['arg2'];
//     $action = $_POST['action'];
//     $operator = array("+", "-", "*","/", "%");
//     $result = '';

//     if ($operator[0] == $action or $operator[1] == $action or $operator[2] == $action or $operator[3] == $action or $operator[4] == $action){ //Проверка оператора
//     /*foreach($operator as $value)
//         if($value==$action) Не могу реализовать таким способом, т.к. выводит ошибку циклически. Вопрос... */
//         if (($operator[3] != $action || $operator[4] != $action) && $b != 0){
//             switch ($action) {
//                 case $operator[0]:
//                         $result = $a + $b;
//                     break;
//                 case $operator[1]:
//                         $result = $a - $b;
//                     break;
//                 case $operator[2]:
//                         $result = $a * $b;
//                     break;
//                 case $operator[3]:
//                         $result = $a / $b;
//                     break;
//                 case $operator[4]:
//                         $result = $a % $b;
//                     break;        
//             }
//         }
//         else{echo "Делить на ноль нельзя";}
//     }
//     else{echo "Вы ввели неверный оператор";}    
// }   


if (isset($_POST['arg1'], $_POST['arg2'], $_POST['action'])){ //Проверка ввода всех данных
    $a = $_POST['arg1'];
    $b = $_POST['arg2'];
    $action = $_POST['action'];
    $operator = array("+", "-", "*","/", "%");
    $result = '';

foreach($operator as $value){
    if($value==$action){
        if (($operator[3] != $action || $operator[4] != $action) && $b != 0){
            switch ($action) {
                case $operator[0]:
                        $result = $a + $b;
                    break;
                case $operator[1]:
                        $result = $a - $b;
                    break;
                case $operator[2]:
                        $result = $a * $b;
                    break;
                case $operator[3]:
                        $result = $a / $b;
                    break;
                case $operator[4]:
                        $result = $a % $b;
                    break;        
            }
        }
        else{echo "Делить на ноль нельзя";}
    }
else{echo "Вы ввели неверный оператор";}    
}   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <style>
        form{width: 400px}
        label, .GO{float: right; margin-bottom: 5px;}
        input{width: 200px;}
    </style>
</head>
<body>
        <form method="post">
            <label for = "arg1">Первый аргумент:
                <input type = "number" name = "arg1"/>
            </label><br/>
            <label for = "action">Выберите оператор:
                <input type = "text" placeholder = "Допустимы +, -, *, %" name = "action"/>
            </label><br/>
            <label for = "arg2">Второй аргумент:
                <input type = "number" name = "arg2"/>
            </label><br/>
            <label for = "result">Посчитать:
                <input type = "text" name = "result" value = "" readonly/>
                <!-- При первом открытии выдает Notice. Лепить сюда такую же проверку на существование данных как вверху или настроить error_reporting? -->
            </label><br/>    
            <input class = "GO" type = "submit" value = "Посчитать">       
        </form>    
</body>
</html>