<?php
function sumEvenNumbers($arr) {
    $sum = 0;

    foreach ($arr as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }

    return $sum;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input array from the form
    $inputArray = $_POST['inputArray'];

    // Convert the input string to an array of integers
    $arr = explode(",", $inputArray);
    $arr = array_map('intval', $arr);

    // Calculate the sum of even numbers
    $evenSum = sumEvenNumbers($arr);
} else {
    // If the form is not submitted, set the initial value for $evenSum to 0
    $evenSum = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sum of Even Numbers</h1>
        <form method="POST">
            <label for="inputArray">Enter an array of integers (comma-separated):</label>
            <input type="text" name="inputArray" id="inputArray" required>
            <button type="submit">Calculate Sum</button>
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Sum of even numbers in the array: <?php echo $evenSum; ?></p>
        <?php } ?>
    </div>
</body>
</html>
