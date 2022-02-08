<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form</title>
</head>
<body>
<!--<form action="submit.php" method="post">-->
<!--    <label for "majina">Fullname</label><br>-->
<!--    <input type="text" name="name" id="majina"><br>-->
<!--    <label for="barua">EmailAdress</label><br>-->
<!--    <input type="email" name="email" id="barua"><br>-->
<!--    <label for="jinsia">Gender</label><br>-->
<!--    <input type="text" name="gender" id="jinsia"><br>-->
<!--    <input type="submit" value="Register">-->
<!--</form>-->
<form action="submit.php" method="get">
    <label for="carmodel">Car Model</label><br>
    <input type="text" name="model" id="Model"><br>
    <label for="year">Year of Manufacture</label><br>
    <input type="date" name="yom" id="YOM"><br>
    <label for="fuel">Fuel Type</label><br>
    <input type="text" name="fuel" id="Fuel"><br>
    <label for="cc">Number of CCs</label><br>
    <input type="number" name="cc" id="CC"><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
