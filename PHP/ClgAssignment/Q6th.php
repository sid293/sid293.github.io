<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ClgAssignment.php" method='POST'>
        First string<input type="text" name="fs">
        <br>
        second string<input type="text" name="ss">
        after which position<input type="text" name="position"> 
        <br>
        <label for="what">
            <input type="radio" name="what" value="sm">string match
            <input type="radio" name="what" value="sa">string append
            <input type="radio" name="what" value="fsr">first string reverse 
        </label>
        <br>
        <input type="submit" value= "submit">
    </form>    
</body>
</html>