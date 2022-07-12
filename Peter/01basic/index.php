<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
            
        // $intwidth = (int) $_POST['width'];
        // $intheight = (int) $_POST['height'];
        // $intdepth = (int) $_POST['depth'];

        // function calcBoxEx4($intwidth, $intheight, $intdepth){
        //     $area = $intwidth * $intheight;
        //     echo "Area of the box is : $area <br>";
        //     $vol = $area * $intdepth;
        //     echo "Volume of the box is: $vol";

        // }
        // calcBoxEx4($intwidth, $intheight, $intdepth);

      
    ?>

<p>Exercise 5</p>

    <form action="index.php" method="post">
        Enter Minutes: <input type="text" name="minutes">
        <input type="submit" name="submit">
    </form>
    <?php
        // function calcMinutesEx5($a){
        //     $minutes = (int) $_POST['minutes'];
        //     $hours =  $minutes/60;
        //     $inthours = (int) $hours;
        //     $modminutes = $minutes % 60;
        //     echo "{$_POST['minutes']} minutes are $inthours hours and $modminutes minutes";

        // }
        // calcMinutesEx5($_POST['minutes']);
    ?>
<p>Exercise 6</p>
<form action="index.php" method="post">
    First Name <input type="text" name ="fName">
    Last Name <input type="text" name="lName" >
    Age <input type="text" name = "age">
    <input type="submit" name="submit">
</form>
<form action="index.php" method="get">
    Hobby: <input type="text" name="hobby">
    <input type="submit" name="submit1">
</form>
<?php
    if(isset($_POST['submit'])){
        if($_POST['fName']&& $_POST['lName']&&$_POST['age'] ){
            echo "<div>";
            echo strlen($_POST['fName']) > 5 ? "First name is  <span class='text-success'> {$_POST['fName']}</span><br>": "First name is: <span class='text-danger'> {$_POST['fName']}</span> <br>" ;
            echo "Last Name is: {$_POST['lName']}<br>";
            echo "Age is: {$_POST['age']}";
            echo "</div>";

        } else{
            echo "<div>";
            echo "Please fill all fields";
            echo "</div>";

        }
    }
    if(isset($_GET['submit1'])){
        if($_GET['hobby']){
            echo "<div>";
            echo "Hobby is {$_GET['hobby']}";
            echo "</div>";
        }else{
            
            echo "<div>";
            echo "Pleas fill all fields";
            echo "</div>";
        }
    }
?>

</body>
</html>