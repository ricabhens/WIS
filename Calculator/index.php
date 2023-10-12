<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="action.php" method="post">
            <label for="first_number">Enter First Number:</label>
            <input name="first_number" id="first_number" type="number">

            <label for="second number">Enter Second Number:</label>
            <input name="second_number" id="second_number" type="number">

            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </body>
</html>