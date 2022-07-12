<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PHP Day2 Exercises Advanced</title>
</head>
<body>
    <div class="wrapper mx-3">
        <div class="content">
            <h2>PHP Day2 Exercises</h2>
            <div>
                <h4>Advanced</h4>
                <div>
                    <h5> Exercise 1</h5>
                    <div>
                        <?php
                            echo (ftoc1(95));
                            function ftoc1($fahr) {
                                $convert = ($fahr - 32) * ( 5 / 9 );
                                return "$fahr Fahrenheit are $convert Celsius";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <h5> Exercise 2</h5>
                    <div>
                        <?php
                            echo (ftoc(57));
                            function ftoc($fahr) {
                                $convert = round(($fahr - 32) * ( 5 / 9 ), $precision = 0, $mode = PHP_ROUND_HALF_UP);
                                switch ($convert) {
                                    case $convert <= 5:
                                        echo ("<p class='text-secondary'>$fahr Fahrenheit are $convert Celsius, the weather is <b>very cold</b></p>");
                                        break;
                                    case $convert >= 6 && $convert <= 10:
                                        echo ("<p class='text-primary'>$fahr Fahrenheit are $convert Celsius, the weather is <b>cold</b></p>");
                                        break;
                                    case $convert >= 11 && $convert <= 15:
                                        echo ("<p class='text-info'>$fahr Fahrenheit are $convert Celsius, the weather is <b>pleasent</b></p>");
                                        break;
                                    case $convert >= 16 && $convert <= 20:
                                        echo ("<p class='text-warning'>$fahr Fahrenheit are $convert Celsius, the weather is <b>warm</b></p>");
                                        break;
                                    case $convert >= 21:
                                        echo ("<p class='text-danger'>$fahr Fahrenheit are $convert Celsius, the weather is <b>hot</b></p>");
                                        break;
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