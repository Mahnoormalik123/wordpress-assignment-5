<?php
// Function to print a table based on the given parameter
function printTable($multiplier) {
    $i = 1; // Initialize the counter
    // Using a while loop to print the table
    while ($i <= 10) {
        $result = $multiplier * $i;
        echo "$multiplier x $i = $result<br>";
        $i++; // Increment
    }
}
printTable(18);
?>
