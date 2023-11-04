<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
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

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .results {
            margin-top: 20px;
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        .result {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>

    <form action="" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required><br>

        <button type="submit">Calculate</button>
    </form>

    <div class="results">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;

            if ($num2 != 0) {
                $quotient = $num1 / $num2;
            } else {
                $quotient = "Cannot divide by zero";
            }

            echo "<h2>Results:</h2>";
            echo '<div class="result">Sum: ' . $sum . '</div>';
            echo '<div class="result">Difference: ' . $difference . '</div>';
            echo '<div class="result">Product: ' . $product . '</div>';
            echo '<div class="result">Quotient: ' . $quotient . '</div>';
        }
        ?>
    </div>
</body>
</html>
