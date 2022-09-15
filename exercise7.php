<html>

<head>
    <title>PHP_Exercise 7 of Omne Jean</title>
    <link rel="stylesheet" href="style.php">
</head>

<body>

    <div class="form_body">
        <h1>MIDTERM GRADE</h1>
        <form class="form" action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type=text name="quiz" placeholder="Quiz" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=text name="proj" placeholder="Project"required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=text name="midEx" placeholder="Midterm Exam"required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=text name="exer" placeholder="Exercises"required>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button class="comp_btn" type=submit name="compute">COMPUTE</button>
            
            <?php
            if (isset($_POST['compute'])) {
                $q = floatval ($_POST['quiz']) * .20;
                $p = floatval ($_POST['proj']) * .30;
                $m = floatval ($_POST['midEx']) * .20;
                $e = floatval ($_POST['exer']) * .30;

                $midGrade = $q + $p + $m + $e;
                $grade = $midGrade;

                if ($grade >= 1.0 && $grade <= 1.5) {
                    $displayMe = "Perfect";
                } elseif ($grade >= 1.6 && $grade <= 2.0) {
                    $displayMe = "Great";
                } elseif ($grade >= 2.1 && $grade <= 2.5) {
                    $displayMe= "Good";
                } elseif ($grade >= 2.6 && $grade <= 3.0) {
                    $displayMe = "Try Harder!";
                } else {
                    $displayMe = "Better luck next time!";}

                print "<br>";
                print "<p>" . sprintf("%.1f", $midGrade). " " . $displayMe . "<p>";
            }
            ?>
        </form>
    </div>

</body>

</html> 