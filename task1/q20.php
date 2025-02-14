<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            width:100%;
            text-align:center;
        }
        th,td{
            border:1px solid black;
            padding: 3px;
        }
        </style>
</head>
<body>
    <table cellpadding="3px" cellspacing="0px">
        <?php
        $rows=5;
        $columns=6;
        for($i=1;$i<=$rows;$i++){
            echo "<tr>";
            for($j=1;$j<=$columns;$j++){
                $result=$i*$j;
                echo "<td>$i*$j=$result</td>";

            }
            echo "</tr>";
        }
        ?>
</body>
</html>