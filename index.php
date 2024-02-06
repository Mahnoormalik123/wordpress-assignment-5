<?php
// Function to print a table based on the given parameter
function printTable($multiplier) {
    $i = 1; // Initialize the counter
    // Use a while loop to print the table
    while ($i <= 10) {
        $result = $multiplier * $i;
        echo "$multiplier x $i = $result<br>";
        $i++; // Increment the counter
    }
}
// Call the function to print the table of 5 
printTable(18);
?>