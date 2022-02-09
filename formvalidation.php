<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <style>
        #error {color: #FF0000;}
    </style>
</head>
<body>
<?php
// define variables and set to empty values
$modelErr = $yomErr = $fuelErr = $ccErr = "";
$model = $yom = $fuel = $cc = "";

function clean_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["model"])) {
        $modelErr = "Car model in text format is required";
    }elseif (is_numeric($_POST["model"]))  {
        $modelErr = "Please enter Car model in text format";
    } else {
        $model = clean_input($_POST["model"]);
    }


    if (!empty($_POST["yom"])) {
        $yom = clean_input($_POST["yom"]);
    } else {
        $yomErr = "Please enter you car's date of purchase";
        }


    if (empty($_POST["fuel"])) {
        $fuelErr = "Enter the fuel your car uses in text format";
    }
    elseif (is_numeric($_POST["fuel"])) {
        $fuelErr = "Please enter the fuel your car uses in text format";
    }
    else {
        $fuel = clean_input($_POST["fuel"]);
        }


    if (!empty($_POST["cc"])) {
        $cc = clean_input($_POST["cc"]);
    } else {
        $ccErr = "Input your car's engine capacity in ccs";
    }

//    if (empty($_POST["gender"])) {
//        $genderErr = "Gender is required";
//    } else {
//        $gender = test_input($_POST["gender"]);
//    }
}


?>

<h2>Car Registry</h2>
<p><span id="error">* required field</span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="carmodel">Car Model</label><br>
    <input type="text" name="model" value="<?php echo $model;?>">
    <span id="error">* <?php echo $modelErr;?></span><br><br>
    <label for="year">Year of Manufacture</label><br>
    <input type="date" name="yom" value="<?php echo $yom;?>">
    <span id="error">* <?php echo $yomErr;?></span><br><br>
    <label for="fuel">Fuel Type</label><br>
    <input type="text" name="fuel" value="<?php echo $fuel;?>">
    <span id="error">* <?php echo $fuelErr;?></span><br><br>
    <label for="cc">Number of CCs</label><br>
    <input type="number" name="cc" value="<?php echo $cc;?>">
    <span id="error">* <?php echo $ccErr;?></span><br><br>
    <input type="submit" value="Register"><br>
</form>

<h2>Output</h2>
<?php
echo "Your car is a $model model <br>";
echo "The car's date of manufacture is $yom <br>";
echo "It consumes $fuel fuel <br>";
echo "It's engine capacity is ".$cc."cc <br>";
?>
</body>
</html>
