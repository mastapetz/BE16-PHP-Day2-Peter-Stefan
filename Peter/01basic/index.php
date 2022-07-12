<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
</head>
<body>

    <p>Excercise 1</p>
    <form action="index.php" method = "POST">
        Name: <input type="text" name="name">
        Surname: <input type="text" name="surname">
        <input type="submit" name="submit">
    </form>
    <?php
        if( isset($_POST['submit'])){
            if($_POST['name'] && $_POST['surname']){
                echo "Hello {$_POST['name']} {$_POST['surname']}";
            }
            elseif(!$_POST['name'] && $_POST['surname']){
                echo "Please insert first name";
            }elseif(($_POST['name'] && !$_POST['surname'])){
                echo "Please insert last name";
            }
        }
    ?>
</body>
</html>