<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Advanced</title>
</head>
<body>
<p class="text-center h1">Excercise 1</p>
    <div class="container text-center">
        <p>Convert °F to °C </p>
        <h5>(32 °F − 32) × 5/9 = 0 °C</h5>
        <hr>
    </div>
    <form action="index.php" method="GET" class="text-center">
     
    Temperatur in Fahrenheit: <input type="text" name="temp">
    <input type="submit" name="submit">
    </form>
    <hr>
    <div class="text-center">
    <?php
        function convert($f){
            $tempF = (int) $_GET['temp'];
            $tempC =  round(($tempF - 32) * (5/9), $precision = 0, $mode = PHP_ROUND_HALF_UP );
            return "{$_GET['temp']} Fahrenheit are $tempC Celsius";
        }
        echo convert($_GET['temp'])
    ?>
    </div>
    <hr>
<p class="text-center h1">Excercise 2</p>
    <div class="text-center">
    <?php
                function convert2($f){
                    $tempF = (int) $_GET['temp'];
                    $tempC =  round(($tempF - 32) * (5/9), $precision = 0, $mode = PHP_ROUND_HALF_UP );
                    echo "{$_GET['temp']} Fahrenheit are $tempC Celsius <br>";
                    switch($tempC){
                        case $tempC <= 5:
                            echo "<span class='text-secondary h6'>It is very cold</span>";
                            break;
                        case $tempC > 5 && $tempC <= 10:
                            echo "<span class='text-info h6'> It is cold</span>";
                            break;
                        case $tempC > 10 && $tempC <=15:
                            echo "<span class='text-success h5'>It is pleasant</span>";
                            break;
                        case $tempC > 15 && $tempC <= 20:
                            echo "<span class='text-warning h4>It is warm</span>";
                            break;
                        case $tempC > 20:
                            echo "<span class='text-danger h2'>It is hot</span>";
                            break;
                    }
                }
                convert2($_GET['temp'])

    ?>
    </div>

    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>