<html>
<head>
    <title>My Page</title>
</head>
<body>

<?php 
function prim($num) {
    if ($num < 2) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }  
    }
    return true;
}

$num = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"]) && is_numeric($_POST["name"])) {
        $num = intval($_POST["name"]); 

        if (prim($num)) {
            $message = "$num is a Prime Number.";
        } else {
            $message = "$num is NOT a Prime Number.";
        }
    } else {
        $message = "Please enter a valid number.";
    }
}
?>


<form method="post">
    <label for="name">Enter your number:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($num); ?>">
    <button type="submit">Submit</button>
</form>


<p><?php echo $message; ?></p>

</body>
</html>
