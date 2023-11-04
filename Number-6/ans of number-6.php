<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .result {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 20px 0;
            width: 80%;
            max-width: 400px;
        }

        p {
            margin: 10px 0;
        }

        .array-line {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h1>Array Operations</h1>
    <div class="container">
        <?php
        // Define the array of integers
        $numbers = array(2, 4, 6, 8, 10);

        // Display the original array on a single line
        echo '<div class="result"><p>Original Array:</p><div class="array-line">[' . implode(', ', $numbers) . ']</div></div>';

        // i. Print the first element of the array
        echo '<div class="result"><p>i. The first element of the array is: ' . $numbers[0] . '</p></div>';

        // ii. Print the last element of the array
        $lastIndex = count($numbers) - 1;
        echo '<div class="result"><p>ii. The last element of the array is: ' . $numbers[$lastIndex] . '</p></div>';

        // iii. Add a new element with the value of 12 to the end of the array
        $numbers[] = 12;
        echo '<div class="result"><p>iii. Added 12 to the end of the array.</p></div>';

        // iv. Calculate the sum of all the elements in the array and print the result
        $sum = array_sum($numbers);
        echo '<div class="result"><p>iv. The sum of all elements in the array is: ' . $sum . '</p></div>';
        ?>
    </div>
</body>
</html>