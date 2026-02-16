<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "data/questions.php";

$rand_keys = array_rand($questions, 5);

$quiz = [];

foreach($rand_keys as $key){
  $quiz[] = $questions[$key];
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="css/style.css">
 <title>不安ちゃんクイズ</title>
</head>

<body>

<h1>🌱 不安ちゃんクイズ</h1>

<form action="result.php" method="post">

<?php foreach($quiz as $index => $q): ?>

  <p><?= ($index+1) ?>問目：<?= $q["question"] ?></p>

  <?php foreach($q["choices"] as $i => $choice): ?>

    <label>
      <input type="radio"
             name="answer[<?= $index ?>]"
             value="<?= $i ?>"
             required>

      <?= $choice ?>
    </label><br>

  <?php endforeach; ?>

  <input type="hidden" name="correct[<?= $index ?>]" value="<?= $q["answer"] ?>">
  <input type="hidden" name="hint[<?= $index ?>]" value="<?= $q["hint"] ?>">

  <hr>

<?php endforeach; ?>

<br>
<button>答える</button>

</form>

</body>
</html>

