<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Document</title>
    </head>
    <body>
        The result is <?php
        echo ($result);?>
        <?php
        $first_num = $_POST['first_number'];
        $second_num = $_POST['second_number'];
        $operator = $_POST['operator'];
        $result = '';
        if (is_numeric($first_num) && is_numeric($second_num)) {
            switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
            }
        }?>
    </body>
</html>