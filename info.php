<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Page - Diet Recommendation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculate Your BMI</h2>
        <form action="info_handler.php" method="post" id="bmiForm" onSubmit="calculateBMI();">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required>
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required>
            <input type="submit" value="Calculate BMI" name="submit">
        </form>
        <div class="result" id="result" name="result"></div>
    </div>

    <script>
        function calculateBMI() {
            var name = document.getElementById('name').value;
            var age = parseInt(document.getElementById('age').value);
            var gender = document.getElementById('gender').value;
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);

            var bmi = weight / ((height / 100) * (height / 100));
            var resultMessage;

            if (isNaN(bmi)) {
                resultMessage = "Please enter valid height and weight.";
            } else {
                if (bmi < 18.5) {
                    resultMessage = name + ", your BMI is " + bmi.toFixed(2) + ". You are underweight.";
                    window.location.href = "underweight.php"; // Redirect to underweight page
                } else if (bmi >= 18.5 && bmi < 24.9) {
                    resultMessage = name + ", your BMI is " + bmi.toFixed(2) + ". You are fit.";
                    window.location.href = "fit.php"; // Redirect to normal page
                } else {
                    resultMessage = name + ", your BMI is " + bmi.toFixed(2) + ". You are overweight.";
                    window.location.href = "overweight.php"; // Redirect to overweight page
                }
            }

            document.getElementById('result').innerHTML = resultMessage;
            return false; 
        }
    </script>
</body>
</html>
