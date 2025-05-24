<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Rock Paper Scissors - Trung Nguyễn 3e322478</title>
</head>
<body>
    <h1>Rock Paper Scissors Game</h1>
    <?php
    $choices = ['rock', 'paper', 'scissors'];
    $userChoice = isset($_GET['choice']) ? $_GET['choice'] : null;
    $computerChoice = $choices[array_rand($choices)];
    $result = '';

    function decideWinner($user, $computer) {
        if ($user === $computer) {
            return "It's a tie!";
        }
        if (
            ($user === 'rock' && $computer === 'scissors') ||
            ($user === 'paper' && $computer === 'rock') ||
            ($user === 'scissors' && $computer === 'paper')
        ) {
            return "You win!";
        }
        return "Computer wins!";
    }

    if ($userChoice && in_array($userChoice, $choices)) {
        $result = decideWinner($userChoice, $computerChoice);
        echo "<p>Your choice: <strong>" . htmlspecialchars($userChoice) . "</strong></p>";
        echo "<p>Computer's choice: <strong>" . htmlspecialchars($computerChoice) . "</strong></p>";
        echo "<h2>$result</h2>";
    } else {
        echo "<p>Please select your choice below:</p>";
    }
    ?>

    <form method="get" action="">
        <input type="radio" id="rock" name="choice" value="rock" required>
        <label for="rock">Rock</label><br>

        <input type="radio" id="paper" name="choice" value="paper">
        <label for="paper">Paper</label><br>

        <input type="radio" id="scissors" name="choice" value="scissors">
        <label for="scissors">Scissors</label><br><br>

        <input type="submit" value="Play">
    </form>
</body>
</html>
