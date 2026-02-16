<?php
require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);

$options = [];

foreach ($random_indexes as $i) {
  $options[] = $status_codes[$i];
}

$question = $options[array_rand($options)];
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
    <div class="quiz__content">
      <div class="question">
        <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
        <p class="question__text">
          <?php echo $question['description'] ?>
        </p>
      </div>
      <form action="result.php" method="post">

  <!-- 正解データを丸ごと送る -->
  <input type="hidden" name="answer_code" value="<?= $question['code'] ?>">
  <input type="hidden" name="answer_desc" value="<?= $question['description'] ?>">

  <?php foreach ($options as $o): ?>
    <label>
      <input type="radio" name="option" value="<?= $o['code'] ?>">
      <?= $o['code'] ?>
    </label><br>
  <?php endforeach; ?>

  <button>回答</button>
</form>

    </div>
  </main>
</body>

</html>



