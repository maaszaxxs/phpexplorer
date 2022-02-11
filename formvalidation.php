<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Registry</title>
    <style>
        #error {color: #FF0000;}
        body {
            font-family: Open Sans,Helvetica,Arial,sans-serif;
            font-size: 16px;
            color: #373c44;
            background-color: #f5f5f5;
            /*margin-top: 0px;*/
            /*margin-right: 0px;*/
            /*margin-bottom: 0px;*/
            /*margin-left: 0px;*/
            display: block;
            position: relative;
            min-height: 100%;

        }
        }
        .main{
            display: flex;
            flex-direction: column;
            padding-top: 49px
        }
        .loginbackground {
            /*background-image: url(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);*/
            background-image: url("https://p2.piqsels.com/preview/262/95/673/toy-car-pastel-colorful-blue.jpg");
            background-position: 0;
            background-size: auto;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }
        .container{
            background-color: transparent;
            border-radius: 0;
            padding: 12px 0;
            /*margin-bottom: 0;*/
            /*margin-left: auto;*/
            /*margin-right: auto;*/
            position: relative;
            flex-direction: column;
            display: flex;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }
        .body{
            margin-top: 0px;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
            font-size: 14px;
            max-width: 34rem;
            display: block;
        }
        .header{
            margin-bottom: 24px;
            text-align: center;
        }
        h2{
            font-size: 2rem;
            font-weight: 300;
            line-height: 1.6;
            margin-bottom: 24px;
            margin-top: 0;
            text-transform: capitalize;
        }
        .title{
            text-align: center;
            color: darkgrey;
            justify-content: center;
            background-color: azure;
            border-bottom: 1px solid #ddd;
            height: 49px;
            position: relative;
            width: 100%;
            z-index: 1400;
            display: box;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            padding: 26px;
            font: xx-large;
            /*background-image: url(https://image.made-in-china.com/44f3j00AOuarnhPCIkp/China-Factory-Perforated-Pattern-Car-Seat-Cover-Car-Cushion-PVC-Synthetic-Leather.jpg);*/
            /*background-position: 0;*/
            /*background-size: auto;*/
            /*padding-right: 26px;*/
        }
        .box{
            background-color: #fff;
            border-radius: 10px;
            margin-bottom: 24px;
            padding: 12px 30px 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
            font-size: 14px;
        }
        input{
            width: 100%;
            font-size: 14px;
            height: 40px;
            line-height: 1.6;
            min-height: 40px;
            border-radius: 2px
        }
        .button{
            background-color: #ec5167;
            border: 1px solid #ec5167;
            color: #fff;
            display: block;
            width: 100%;
            padding-left: 26px;
            padding-right: 26px;
        }
        }

        @media (max-width: 768px)
            .container {
                max-width: 95%;
    </style>
</head>
<body>
<div class="main">
    <div class="loginbackground">
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
        $modelErr = "This field is required.";
    }elseif (is_numeric($_POST["model"]))  {
        $modelErr = "This field is required in text format";
    } else {
        $model = clean_input($_POST["model"]);
    }


    if (!empty($_POST["yom"])) {
        $yom = clean_input($_POST["yom"]);
    } else {
        $yomErr = "This field is required.";
        }


    if (empty($_POST["fuel"])) {
        $fuelErr = "This field is required.";
    }
    elseif (is_numeric($_POST["fuel"])) {
        $fuelErr = "This field is required in text format";
    }
    else {
        $fuel = clean_input($_POST["fuel"]);
        }


    if (!empty($_POST["cc"])) {
        $cc = clean_input($_POST["cc"]);
    } else {
        $ccErr = "This field is required.";
    }

//    if (empty($_POST["gender"])) {
//        $genderErr = "Gender is required";
//    } else {
//        $gender = test_input($_POST["gender"]);
//    }
}


?>
<div class="title">
<h1>CAR REGISTRY</h1>
</div>
<div class="container">
    <div class="body">
        <div class="box">

            <h2>Register your Car</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
    <label for="carmodel">Car Model</label><span id="error">*</span><br>
    <input type="text" name="model" value="<?php echo $model;?>">
    </div>
    <p id="error"><?php echo $modelErr;?></p>
    <label for="year">Year of Manufacture</label><span id="error">*</span><br>
    <input type="date" name="yom" value="<?php echo $yom;?>">
    <p id="error"><?php echo $yomErr;?></p>
    <label for="fuel">Fuel Type</label><span id="error">*</span><br>
    <input type="text" name="fuel" value="<?php echo $fuel;?>">
    <p id="error"><?php echo $fuelErr;?></p>
    <label for="cc">Number of CCs</label><span id="error">*</span><br>
    <input type="number" name="cc" value="<?php echo $cc;?>">
    <p id="error"><?php echo $ccErr;?></p>
    <input class="button" type="submit" value="Register">
<!--    <button type="reset">Clear</button>-->
    <br><br>
</form>
        </div>
    </div>
</div>
</div>
<!--<h2>Output</h2>-->
<?php
//echo "Your car is a $model model <br>";
//echo "The car's date of manufacture is $yom <br>";
//echo "It consumes $fuel fuel <br>";
//echo "It's engine capacity is ".$cc."cc <br>";
?>
</div>
</body>
</html>
