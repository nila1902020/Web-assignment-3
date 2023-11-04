<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input string from the HTML form
    $inputString = $_POST['inputString'];

    // Convert the input string to lowercase for case-insensitive comparison
    $inputString = strtolower($inputString);

    // Define the set of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize a counter for counting vowels
    $vowelCount = 0;

    // Iterate through each character in the input string
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        // Check if the character is a vowel
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
} else {
    // If the form is not submitted, set the initial value for $vowelCount to 0
    $vowelCount = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
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
        <h1>Vowel Counter</h1>
        <form method="POST">
            <label for="inputString">Enter a string: </label>
            <input type="text" name="inputString" id="inputString" required>
            <button type="submit">Count Vowels</button>
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Number of vowels in the input string: <?php echo $vowelCount; ?></p>
        <?php } ?>
    </div>
</body>
</html>
