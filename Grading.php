<?php

$math = @$_POST['txtmath'];
$physics = @$_POST['txtphysics'];
$biology = @$_POST['txtbiology'];
$chemistry = @$_POST['txtchemistry'];
$english = @$_POST['txtenglish'];

// clear information

if(isset($_POST["btnClear"])){
    $math = $chemistry = $biology = $english = $physics = null;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grade Marks</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h2>MU Bootcamp Php | Grade Calculation in php </h2>

        <form method="post">
            <h1>Marks Calculation</h1>
            <label> Math : </label>
            <input type="text" name="txtmath" placeholder="marks" required min=0 max=100 value="<?php echo $math ?>" >
            <br>
            <label> Physics: </label>
            <input type="text" name="txtphysics" placeholder="marks" required min=0 max=100 value="<?php echo $physics ?>" >
            <br>
            <label> Biology: </label>
            <input type="text" name="txtbiology" placeholder="marks" required min=0 max=100 value="<?php echo $biology ?>" > 
            <br>
            <label> Chemitry: </label>
            <input type="text" name="txtchemistry"
            placeholder="marks" required min=0 max=100  value="<?php echo $chemistry ?>" > 
            <br>
            <label> English: </label>
            <input type="text" name="txtenglish" placeholder="marks" required min=0 max=100 value="<?php echo $english ?>" > 
            <br>
            <button type="submit" name="btnShow">
                Show Result
            </button>
            <button type="submit" name="btnClear">
                Clear
            </button>
        </form>
    </body>
</html>

    <?php
        if(isset($_POST["btnShow"])){
                // total number of grades
                    $total = $math + $physics + $chemistry + $biology + $english;
                    echo " <hr> Total: <strong>$total</strong>"."<br>";

                    // average number of grades 
                    $average = $total / 5;
                    echo " Average is : <strong>$average%</strong>"."<br>";

                    // grade number

                    if($average >= 90 && $average <= 100){
                        echo "Grade is : <strong>A</strong";
                    }else if($average >= 80 && $average <= 90){
                        echo "Grade is : <strong>B</strong>";
                    }else if($average >= 70 && $average <= 80){
                        echo "Grade is : <strong>C</strong>";
                    }else if($average >= 60 && $average <= 70){
                        echo "Grade is : <strong>D</strong>";
                    }else if($average >= 50 && $average <= 60){
                        echo "Grade is : <strong>E</strong>";
                    }else{
                        echo "Grade is : <strong>F</strong";
                    }
            }

?>