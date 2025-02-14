<html>
    <head>
        <title>q10</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inputString=$_POST['inputString'];
    if(!empty($inputString)){
        $reversedString=strrev($inputString);
        echo "<p>Original String: $inputString</p>";
        echo "<p>Reversed String: $reversedString</p>";

    }
    else{
        echo "<p>please enter a string.</p>";
    }

}
?>
<form method="post">
    <label for="inputString">Enter a string:</label>
    <input type="text" id="inputString" name="inputString"required>
    <button type="submit">Reverse</button>
</form>
</body>
