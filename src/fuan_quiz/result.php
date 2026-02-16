<?php

$answers  = $_POST["answer"];
$corrects = $_POST["correct"];
$hints    = $_POST["hint"];

$results = [];

foreach($answers as $i => $user){
  $correct = $corrects[$i];

  if($user == $correct){
    $results[$i] = "ok";
  }else{
    $results[$i] = "ng";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>結果</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>結果発表🎉</h1>
<?php var_dump($results); ?>

<table border="1">

<tr>
<?php foreach($results as $i => $r): ?>
  <th><?= ($i+1) ?>問目</th>
<?php endforeach; ?>
</tr>

<tr>
<?php foreach($results as $r): ?>

  <td class="<?= $r ?>">

    <?php if($r == "ok"): ?>
      ⭕ 正解🎊
    <?php else: ?>
      ✖ 残念…💦
    <?php endif; ?>

  </td>

<?php endforeach; ?>
</tr>

</table>

<a href="index.php">もう一回やる</a>

</div>

</body>
</html>

