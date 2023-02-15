<!DOCTYPE html>

<head>
	<title>PROG8170 - Assingment 01</title>
</head>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $second_num - $first_num;
            break;
        case "Multiply":
            $result = $first_num * $first_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <div id="page-wrap">
	<h1>PROG8170 - Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Seconds Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" alt="Add 'em up"/>
            <input type="submit" name="operator" value="Substract" alt="Subtrackt"/>
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" alt="Divide and conquer"/>
	  </form>
    </div>
    <a href="https://redtri.com/wp-content/uploads/2020/12/canyon-lake.png?w=605">Take me home!</a>
</body>
</html>