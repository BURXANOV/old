<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
    <style>
       
    </style>
</head>
<body>

<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        default:
            $result = 'Invalid operator';
    }
}
?>

<h2>калькулятор</h2>
<form method="post" action="">
    <label for="num1">1:</label>
    <input type="text" name="num1" required>

    <label for="operator">рес(+, -, *, /):</label>
    <input type="text" name="operator" required>

    <label for="num2">2:</label>
    <input type="text" name="num2" required>

    <input type="submit" value="=">
</form>

<?php if ($result !== ''): ?>
    <h2>результат:</h2>
    <p><?php echo $result; ?></p>
<?php endif; ?>


<a class="" href="./index.html">Главная страница</a>

</body>
</html>
