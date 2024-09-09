<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Result</title>
</head>
<body>
    <h1>Quiz Result</h1>

    <?php
    $score = 0;
    $level = $_POST['level'];

    // Answers for easy quiz
    $easy_answers = array(
        "q1" => "true",
        "q2" => "true",
        "q3" => "Paris",
        "q4" => "apple",
        "q5" => "true",
        "q6" => "true",
        "q7" => "true",
        "q8" => "whale",
        "q9" => "true",
        "q10" => "true"
    );

    // Answers for hard quiz
    $hard_answers = array(
        "q1" => "true",
        "q2" => "true",
        "q3" => "Canberra",
        "q4" => "uranium",
        "q5" => "true",
        "q6" => "true",
        "q7" => "jupiter",
        "q8" => "true",
        "q9" => "html",
        "q10" => "false"
    );

    $answers = $level == 'easy' ? $easy_answers : $hard_answers;

    foreach ($answers as $question => $correct_answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
            $score++;
        }
    }

    echo "<p>Your total score is: $score/10</p>";
    ?>
</body>
</html>
