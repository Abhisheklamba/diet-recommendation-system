<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bmi_category = $_POST['bmi_category'];

    // Your code to calculate BMI and determine the category
    $bmi = $weight / (($height / 100) * ($height / 100));
    if ($bmi < 18.5) {
        $bmi_category = 'underweight';
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $bmi_category = 'fit';
    } else {
        $bmi_category = 'overweight';
    }

    
    $sql = "INSERT INTO user_info (name, age, gender, height, weight, bmi_category) VALUES ('$name', '$age', '$gender', '$height', '$weight', '$bmi_category')";
    if ($conn->query($sql) === TRUE) {
        // Successfully saved user's information
        // Redirect the user to the appropriate page based on BMI category
        switch ($bmi_category) {
            case 'underweight':
                header("Location: underweight.php");
                break;
            case 'overweight':
                header("Location: overweight.php");
                break;
            case 'fit':
            default:
                header("Location: fit.php");
                break;
        }
        exit();
    } else {
        // Error handling if the information couldn't be saved
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
