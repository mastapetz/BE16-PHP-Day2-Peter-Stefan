<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PHP Day2 Exercises Basic</title>
</head>
<body>
    <div class="wrapper mx-3">
        <div class="content">
            <h2>PHP Day2 Exercises</h2>
            <div>
                <h4>Basic</h4>
                <div>
                    <h5> Exercise 1</h5>
                    <div>
                        <form action="Exercises.php" method="POST">
                            Name: <input type="text" name="name">
                            Surname: <input type="text" name="surname">
                            <input type="submit" name="submit">
                        </form>
                        <?php
                            if (isset($_POST["submit"])) {
                                if ($_POST["name"]  && $_POST["surname"]) {
                                    echo "Welcome ". $_POST["name"] . " ". $_POST["surname"] . "<br>";
                                } else if ($_POST["name"] == null) {
                                    echo "Please insert your name";
                                } else {
                                    echo "Please insert your surname";
                                };
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 2</h5>
                    <div>
                        <?php
                            echo devider(10,2);
                            function devider($num1, $num2) {
                                return $num1 / $num2;
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 3</h5>
                    <div>
                        <?php
                            echo grades(3,4,5);
                            function grades($math, $physics, $english) {
                                $sum = $math + $physics + $english;
                                $avg = $sum / 3;
                                return "Sum: $sum <br> Average: $avg";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 4</h5>
                    <div>
                        <?php
                            echo boxes(2,7,5);
                            function boxes($width, $height, $depth) {
                                $area = $width * $height;
                                $volume = $area * $depth;
                                return "The are of the box is: $area <br> The volume of the box is: $volume";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 5</h5>
                    <div>
                        <?php
                            echo minto(135);
                            function minto($minutes) {
                                $hours = round($minutes / 60, precision:0, mode: PHP_ROUND_HALF_DOWN) ;
                                $rest = ($minutes % 60);
                                return "$minutes = <br> Hours: $hours Minutes: $rest";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 6</h5>
                    <div>
                        <form action="Exercises.php" method="POST">
                            Firstname: <input type="text" name="firstname">
                            Lastname: <input type="text" name="lastname">
                            Age: <input type="text" name="age1">
                            <input type="submit" name="submit1">
                        </form>
                        <?php
                            if (isset($_POST["submit1"])) {
                                if ($_POST["firstname"]  && $_POST["lastname"] && $_POST["age1"]) {
                                    echo (strlen($_POST["firstname"]) > 5 ? "<div class='text-success'>Firstname is ". $_POST["firstname"] . "</div>" : "<div class='text-danger'>Firstname is ". $_POST["firstname"] . "</div>");
                                    // if (strlen($_POST["firstname"]) > 5) {
                                    //     echo "<div class='text-success'>Firstname is ". $_POST["firstname"] . "</div>";
                                    // } else {
                                    //     echo "<div class='text-danger'>Firstname is ". $_POST["firstname"] . "</div>";
                                    // }
                                    echo "<div>Lastname is ". $_POST["lastname"] . "</div>";
                                    echo "<div>Age is " . $_POST["age1"] . "</div>";
                                } else {
                                    echo "Please Enter all 3 Fields";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>