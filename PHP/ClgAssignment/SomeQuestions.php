<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <style>
            input{
                area:100px;
            }
        </style> 
    </head>
    <body>        
        <h2>second heading</h2>
        <p>paragraph goes here</p>
        <form action="ClgAssignment.php" method="post">
            <textarea name='first'>string</textarea>
            <textarea name='second'>string your string second string</textarea>
            <textarea name="replace" cols="30" rows="10">replace</textarea>
            <input type="submit">
        </form>
        <?php
        echo "linked php";
        ?>
    </body>
</html>