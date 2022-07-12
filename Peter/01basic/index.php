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
        <!-- <input type="submit" name="submit"> -->
    </form>
     <?php
        // if( isset($_POST['submit'])){
        //     if($_POST['name'] && $_POST['surname']){
        //         echo "Hello {$_POST['name']} {$_POST['surname']}";
        //     }
        //     elseif(!$_POST['name'] && $_POST['surname']){
        //         echo "Please insert first name";
        //     }elseif(($_POST['name'] && !$_POST['surname'])){
        //         echo "Please insert last name";
        //     }
        // }
    ?>

    <p>Exercise 2</p>
    <?php 
        
        function divideEx2($a,$b){
            $c = $a / $b;
            echo $c;
        }
        divideEx2(6,2);
    ?>

    <p>Exercise 3</p>
    
    <form action="index.php" method = "POST">
        Math: <input type="text" name="math">
        Physics: <input type="text" name="physics">
        English: <input type="text" name="english">
        <input type="submit" name="submit">
    </form>
    <?php
            
        // $intMath = (int) $_POST['math'];
        // $intPhysics = (int) $_POST['physics'];
        // $intEnglish = (int) $_POST['english'];

        // function calcGradesEx3($intMath, $intPhysics, $intEnglish){
        //     $sum = $intMath + $intPhysics + $intEnglish;
        //     echo "Sum : $sum <br>";
        //     $avg = $sum/3;
        //     echo "Average: $avg";

        // }
        // calcGradesEx3($intMath, $intPhysics, $intEnglish);

        // $marks =[
        // ($intMath = (int) $_POST['math']),
        // ($intPhysics = (int) $_POST['physics']),
        // ($intEnglish = (int) $_POST['english'])
        // ];

    ?>

<p>Exercise 4</p>
    
    <form action="index.php" method = "POST">
        width: <input type="text" name="width">
        height: <input type="text" name="height">
        depth: <input type="text" name="depth">
        <input type="submit" name="submit">
    </form>
    <?php
            
        $intwidth = (int) $_POST['width'];
        $intheight = (int) $_POST['height'];
        $intdepth = (int) $_POST['depth'];

        function calcBoxEx4($intwidth, $intheight, $intdepth){
            $area = $intwidth * $intheight;
            echo "Area of the box is : $area <br>";
            $vol = $area * $intdepth;
            echo "Volume of the box is: $vol";

        }
        calcBoxEx4($intwidth, $intheight, $intdepth);

      
    ?>

</body>
</html>