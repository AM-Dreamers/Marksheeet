<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .h22 {
            font-family: monospace;
        }
    </style>
</head>

<body class="bg-dark">
    <center class="container py-3 mt-5 bg-info w-75 rounded-4 border border-black border-3 text-black">
        <?PHP
        session_start();
        $name = $_SESSION['name'];
        echo "<h2 class='my-3 fw-bold'>Welcome $name to Our Website</h2>";

        /* 
        echo "<h2 class='h22 text-black fw-bold'>Welcome $name</h2>"; */
        ?>

        <form class="container1 mt-4 " method="post">
            <!--  <h1 class="hh1 mt-2 py-2 rounded text-center  text-black fw-bold ">Welcome to Marksheet
                    Calculator</h1> -->

            <label class="fw-semibold" for="">Maths Marks :</label>
            <input class="rounded border" type="number" max="100" placeholder="Eg : 80" name="math" id=""
                required><br><br>

            <label class="rounded fw-semibold" class="fw-bold" for="">Science Marks :</label>
            <input class="rounded border" type="number" max="100" name="sci" placeholder="Eg : 70" required><br><br>

            <label class="rounded fw-semibold" class="fw-bold" for="">Biology Marks :</label>
            <input class="rounded border" type="number" max="100" name="bio" placeholder="Eg : 75" required><br><br>

            <label class="rounded fw-semibold" class="fw-bold" for="">Chemistry Marks :</label>
            <input class="rounded border" type="number" max="100" name="chem" placeholder="Eg : 95" required><br><br>

            <label class="rounded fw-semibold" class="fw-bold" for="">Physics Marks :</label>
            <input class="rounded border" type="number" max="100" name="phy" placeholder="Eg : 77" required><br><br>

            <label class="rounded fw-semibold" class="fw-bold" for="">Attendence :</label>
            <input class="rounded border" type="text" max="100" name="att" placeholder="Eg : 80%" required><br><br>

            <button class="border mt-3 rounded px-3 py-1 border-black border-3 fs-5 fw-bold"
                name="btn">Submit</button><br><br>
        </form>
</body>

</html>

<?PHP

if (isset($_POST['btn'])) {
    $math = $_POST['math'];
    $sci = $_POST['sci'];
    $bio = $_POST['bio'];
    $chem = $_POST['chem'];
    $phy = $_POST['phy'];
    $att = $_POST['att'];

    $_SESSION ['math'] = $math;
    $_SESSION ['sci'] = $sci;
    $_SESSION ['bio'] = $bio;
    $_SESSION ['chem'] = $chem;
    $_SESSION ['phy'] = $phy;
    $_SESSION ['att'] = $att;

    header('location:Res.php');

}

   /*  $obt = $math + $sci + $bio + $chem + $phy;

    echo "<h2>Total marks $obt</h2>";
    echo "<h2>Students's attendence is  $att %</h2>";

    $total = 500;

    $per = $obt / $total * 100;

    if ($att < 75) {
        echo "<h2>Attendence is low that's why you are fail</h2>";
    }elseif($per <= 100 && $per >= 90) {
        $res = round($per);

        echo "<h2>The percentage is $res %<br> The result is A1 Grade</h2>";

    } elseif ($per >= 80 && $per <= 90) {

        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is A Grade</h2>";
    } elseif ($per >= 70 && $per <= 80) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is B Grade</h2>";
    } elseif ($per >= 60 && $per <= 70) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is C Grade</h2>";
    } elseif ($per >= 50 && $per <= 60) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is D Grade</h2>";
    } elseif ($per < 50) {
        $res = round($per);
        echo "<h2>The percentage is $res %<br> The result is Fail</h2>";
    } else if ($phy >= 90) {
        $fper = $per + 2;
        echo "<h2>You acheived +2 bonus Total percentage is : $fper </h2>";
    }
    } */

/* ($per <= 100 && $per >= 90) {
        $res = round($per);

        echo "<h2>The percentage is $res %<br> The result is A1 Grade</h2>";

    } elseif ($per >= 80 && $per <= 90) {

        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is A Grade</h2>";
    } elseif ($per >= 70 && $per <= 80) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is B Grade</h2>";
    } elseif ($per >= 60 && $per <= 70) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is C Grade</h2>";
    } elseif ($per >= 50 && $per <= 60) {
        $res = round($per);


        echo "<h2>The percentage is $res %<br> The result is D Grade</h2>";
    } elseif ($per < 50) {
        $res = round($per);
        echo "<h2>The percentage is $res %<br> The result is Fail</h2>";
    } else if ($phy >= 90) {
        $fper = $per + 2;
        echo "<h2>You acheived +2 bonus Total percentage is : $fper </h2>";
    } */

    /*  $res = round($per);
     echo "<h2 >The percentage is $res %<br> The result is not matched</h2>";
*/
    /* echo "<h2>The result is not matched</h2>"; */










?>