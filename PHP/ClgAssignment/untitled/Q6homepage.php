<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Q6.php" method='POST'>
        First string<input type="text" name="fs">
        <br>
        second string<input type="text" name="ss">
        after which position<input type="text" name="position"> 
        <br>
        <label for="button">
            <input type="radio" name="button" value="sm">string match
            <input type="radio" name="button" value="sa">string append
            <input type="radio" name="button" value="fsr">first string reverse 
        </label>
        <br>
        <input type="submit" value= "submit">
    </form>    
</body>
</html>