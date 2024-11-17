<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input number from the form
    $number = $_POST['number'];

    // Check if the number is even or odd
    if ($number % 2 == 0) {
        echo "<h3>$number is Even.</h3>";
    } else {
        echo "<h3>$number is Odd.</h3>";
    }
}
?>