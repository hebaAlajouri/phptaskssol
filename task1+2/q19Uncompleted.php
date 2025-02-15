<?php
for ($i = 0; $i < 5; $i++) { // Loop for rows (0 to 4)
    
    // Print 'A' i+1 times
    for ($j = 0; $j <= $i; $j++) { 
        echo "A";
    }

    // Print another letter (starting from B) (5 - i) times
    $letter = chr(65 + $i); // Convert row index to letter
    for ($j = 0; $j < (5 - $i); $j++) { 
        echo $letter;
    }

    echo "<br>"; // Move to the next line
}
?>
