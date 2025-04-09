<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="calculator.css">
  <title>Calculator in PHP</title>
</head>
<body>
  <?php
    $firstNum = $_POST['firstNum'] ?? '';
    $secondNum = $_POST['secondNum'] ?? '';
    $operator = $_POST['operator'] ?? '';
    $result = '';

    if (is_numeric($firstNum) && is_numeric($secondNum)) {
        if ($operator == "Divide" && $secondNum == 0) {
            $result = "You cannot divide by zero.";
        } else {
            switch ($operator) {
                case "Add":
                    $result = $firstNum + $secondNum;
                    break;
                case "Subtract":
                    $result = $firstNum - $secondNum;
                    break;
                case "Multiply":
                    $result = $firstNum * $secondNum;
                    break;
                case "Divide":
                    $result = $firstNum / $secondNum;
                    break;
            }
        }
    }
  ?>

  <div id="calculator">
    <h1>PHP Calculator Program</h1>
    <form action="" method="post" id="quiz-form">
      <p>
        <label for="firstNum"><b>First Number</b></label>
        <input type="number" name="firstNum" id="firstNum" required value="<?php echo $firstNum; ?>" />
      </p>
      <p>
        <label for="secondNum"><b>Second Number</b></label>
        <input type="number" name="secondNum" id="secondNum" required value="<?php echo $secondNum; ?>" />
      </p>
      <p>
        <label for="result"><b>Result</b></label>
        <input readonly name="result" value="<?php echo $result; ?>" />
      </p>
      <input type="submit" name="operator" value="Add" />
      <input type="submit" name="operator" value="Subtract" />
      <input type="submit" name="operator" value="Multiply" />
      <input type="submit" name="operator" value="Divide" />
    </form>
  </div>
</body>
</html>
