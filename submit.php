<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>
</head>
<body>
<!--Hello there my name is : --><?php //echo $_POST["name"];?><!--<br>-->
<!--You can reach me on : --><?php //echo $_POST["email"];?><!--<br>-->
<!--And --><?php //echo $_POST["name"];?><!-- is --><?php //echo $_POST["gender"];?><!--<br>-->
<br>
Your car is a <?php echo $_GET["model"];?> model <br>
The car's date of manufacture is <?php echo $_GET["yom"];?><br>
It consumes <?php echo $_GET["fuel"];?> fuel<br>
It's engine capacity is <?php echo $_GET["cc"];?>cc <br>
</body>
</html>