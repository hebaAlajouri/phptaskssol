<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <!-- Form to input numbers and select operation -->
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operation=$_POST['operation'];
        $result="";
        switch($operation){
            case "add":
                $result=$num1+$num2;
                break;
            case "subtract":
                $result=$num1-$num2;
                break;
            case "multiply":
                $result=$num1*$num2;
                break;
            case "divide":
                if($sum2 !=0){
                    $result=$num1/$num2;

                }
                else{
                    $result="Can not divide by zero";

                }
                break;
                
            default:
            $result="Invalid operation!";
            break;
        }
        echo "<h3>Result:$result</h3>";

    }
    ?>
    </body>