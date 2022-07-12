<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day2 Prework</title>
</head>
<body>
    <p>GET METHOD</p>
    <form action="Prework.php" method="GET">
        Name: <input type="text" name="name">
        AGE: <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_GET["submit"])) {
            if ($_GET["name"]  || $_GET["age"]) {
                echo "Name is ". $_GET["name"] . "<br>";
                echo "Age is " . $_GET["age"] . "<br>";
                var_dump($_GET);
                echo "<br><br><br><br><br>";
            }
        }
    ?>
    <p>POST METHOD</p>
    <form action="Prework.php" method="POST">
        Name: <input type="text" name="name">
        AGE: <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_POST["submit"])) {
            if ($_POST["name"]  || $_POST["age"]) {
                echo "Name is ". $_POST["name"] . "<br>";
                echo "Age is " . $_POST["age"] . "<br>";
                var_dump($_POST);
                echo "<br><br><br><br><br>";
            }
        }
    ?>

    <p><?php printName(); ?></p>
    <p><?php printName1("Jenny Dover", 33); ?></p>
    <p><?php formatted_dump($GLOBALS); ?></p>
    <p><?php echo date("j \of F\, Y"); ?></p>
    <p>
        <?php 
            $num = 1;
            if ($num == 1) {
                echo "Number is 1 <br>";
            } else if ($num != 2) {
                echo "Number is not 2 <br>";
            } else if ($num == 3) {
                echo "Number is 3 <br>";
            } else {
                echo "Number is not 1 <br>";
            };
            echo ($num == 1 ? "number is 1 <br>" : "number is not 1<br>");
            $var1=4;$var2=0;
            echo ($var1 ?: "The condition is false <br>");
        ?>
    </p>
    <p>
        <?php 
            $today = date("D");
            echo $today . "<br>";
            switch ($today) {
                case "Mon":
                    echo "Its Monday, ($today)";
                    break;
                case "Tue":
                    echo "Its Tuesday, ($today)";
                    break;
                case "Weg":
                    echo "Its Wednesday, ($today)";
                    break;
                case "Thu":
                    echo "Its Thursday, ($today)";
                    break;
                case "Fri":
                    echo "Its Friday, ($today)";
                    break;
                case "Sat":
                    echo "Its Saturday, ($today)";
                    break;
                case "Sun":
                    echo "Its Sunday, ($today)";
                    break;
                default:
                    echo "Something went wrong!";
            }
        ?>
    </p>

    <?php
        function printName(){
            echo "I am John Doe";
        }
        function printName1($name, $age){
            echo "I am $name and i am $age years old";
        }
        function formatted_dump($content) {
            echo "<pre>";
            var_dump($content);
            echo "</pre>";
        }
    ?>
</body>
</html>