<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Quiz</title>
</head>
<body>
    <h1>Easy Quiz</h1>
    <form action="result.php" method="POST">
        <input type="hidden" name="level" value="easy">
        
        <p>1. The sky is blue. (True/False)</p>
        <input type="radio" name="q1" value="true"> True
        <input type="radio" name="q1" value="false"> False
        
        <p>2. 2 + 2 equals 4. (True/False)</p>
        <input type="radio" name="q2" value="true"> True
        <input type="radio" name="q2" value="false"> False

        <p>3. The capital of France is ____. (Fill in the blank)</p>
        <input type="text" name="q3">
        
        <p>4. Which of the following is a fruit?</p>
        <input type="radio" name="q4" value="apple"> Apple
        <input type="radio" name="q4" value="carrot"> Carrot
        <input type="radio" name="q4" value="broccoli"> Broccoli

        <p>5. Earth is the third planet from the sun. (True/False)</p>
        <input type="radio" name="q5" value="true"> True
        <input type="radio" name="q5" value="false"> False

        <p>6. The sum of angles in a triangle is 180 degrees. (True/False)</p>
        <input type="radio" name="q6" value="true"> True
        <input type="radio" name="q6" value="false"> False

        <p>7. The chemical symbol for water is H2O. (True/False)</p>
        <input type="radio" name="q7" value="true"> True
        <input type="radio" name="q7" value="false"> False

        <p>8. Which of the following is a mammal?</p>
        <input type="radio" name="q8" value="whale"> Whale
        <input type="radio" name="q8" value="shark"> Shark
        <input type="radio" name="q8" value="squid"> Squid

        <p>9. The sun rises in the east. (True/False)</p>
        <input type="radio" name="q9" value="true"> True
        <input type="radio" name="q9" value="false"> False

        <p>10. 5 x 5 = 25. (True/False)</p>
        <input type="radio" name="q10" value="true"> True
        <input type="radio" name="q10" value="false"> False

        <button type="submit">Submit</button>
    </form>
</body>
</html>
