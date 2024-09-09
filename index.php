<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Application</title>
</head>
<body>
    <h1>Welcome to the Quiz</h1>
    <form action="" method="GET">
        <label for="level">Select Quiz Level:</label>
        <select name="level" id="level">
            <option value="easy">Easy</option>
            <option value="hard">Hard</option>
        </select>
        <button type="submit">Start Quiz</button>
    </form>

    <?php
    if (isset($_GET['level'])) {
        $level = $_GET['level'];
        if ($level == 'easy') {
            header('Location: easy.php');
        } elseif ($level == 'hard') {
            header('Location: hard.php');
        }
    }
    ?>
</body>
</html>
