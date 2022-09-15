<html>
    <head>
        <body>
            <form action="exer7.php" method="post">
                <p>Quiz</p> <input type="text" name="quiz"/>
                <p>Exercise</p> <input type="text" name="exer"/>
                <p>Project</p> <input type="text" name="proj"/>
                <p>Exam</p> <input type="text" name="exa"/>
                <input type="submit" name="submit"/>
            </form>
            
            <?php
                if(isset($_POST['submit'])) {
                    $quiz = floatval($_POST['quiz']) ;
                    $exercise = floatval($_POST['exer']) ;
                    $project = floatval($_POST['proj']);
                    $exam = floatval($_POST['exa']);
                    $grade = ($quiz * 0.2) + ($exercise * 0.3) + ($project * 0.2) + ($exam * 0.3);
                    
                    echo $grade;
                    switch($grade) {
                        case $grade >= 1.0 && $grade <= 1.5:
                           echo "Perfect";
                        break;
                        case $grade >= 1.6 && $grade <= 2.0:
                            echo "Great";
                        break;
                        case $grade >= 2.1 && $grade <= 2.5:
                            echo "Good";
                        break;
                        case $grade >= 2.6 && $grade <= 3.0:
                            echo "Try Harder";
                        break;
                        case $grade >3.1:
                            echo "Better Luck Next Time";
                        
                    }
                }
            ?>
        </body>
    </head>
</html>
