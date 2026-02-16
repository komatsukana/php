<?php
require "data.php";
session_start();

shuffle($questions);
$_SESSION['answer']=[];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
  <h1 class="header__ttl">加奈ちゃんクイズ</h1>
</header>
<main class="main">
<form action="result.php" method="post">

<?php foreach($questions as $i => $q): ?>

<?php
  // 選択肢を加工する
  $choices = [];

  foreach($q['choices'] as $k => $v){
    $choices[] = [
      'text' => $v,
      'is_answer' => ($k == $q['a'])
      
    ];
  }

  shuffle($choices);
?>

<fieldset>

<legend>問題<?= $i+1 ?></legend>
<p><?= $q['q'] ?></p>

<?php foreach($choices as $c): ?>

<label>
  <input
    type="radio"
    name="answer[<?= $i ?>]"
    value="<?= $c['is_answer'] ? 1 : 0 ?>"
    required
  >
  <?= $c['text'] ?>
</label><br>

<?php endforeach; ?>

</fieldset>

<?php endforeach; ?>

<button>送信</button>
</form>
