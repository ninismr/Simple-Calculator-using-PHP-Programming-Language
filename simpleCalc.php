<!DOCTYPE html>
<head>
    <title>Simple Calculator</title>
</head>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "Addition":
            $result = $num1 + $num2;
            break;
        case "Subtraction":
            $result = $num1 - $num2;
            break;
        case "Multiplication":
            $result = $num1 * $num2;
            break;
        case "Division":
            $result = $num1 / $num2;
            break;
        case "Modulus":
            $result = $num1 % $num2;
            break;
        case "Exponentiation":
            $result = $num1 ** $num2;
    }
}

?>

<body>
    <div id="page-wrap">
        <h1>Simple Calculator</h1>
            <form action="" method="post" id="form">
                <p>
                    <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" /> 
                    <b>First Number</b>
                </p>
                <p>
                    <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> 
                    <b>Second Number</b>
                </p>
                <input type="submit" name="operator" value="Addition"/>
                <input type="submit" name="operator" value="Subtraction"/>
                <input type="submit" name="operator" value="Multiplication"/>
                <input type="submit" name="operator" value="Division"/>
                <input type="submit" name="operator" value="Modulus"/>
                <input type="submit" name="operator" value="Exponentiation"/>
                <p>
                    <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
                    <b>Result</b>
                </p>
            </form>
    </div>
</body>
</html>