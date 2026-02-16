<?php
session_start();

$answers = $_POST['answer'] ?? [];

$score = 0;
$total = count($answers);
?>

<h2>結果発表🎉</h2>

<table border="1" style="margin:auto;text-align:center;">

<tr>
<th>問題</th>
<th>結果</th>
</tr>

<?php foreach($answers as $i => $v): ?>

<?php
if($v == 1){
  $result = '<div class="true">⭕</div>';
  $score++;
}else{
  $result = '<div class="false">❌</div>';
}
?>

<tr>
<td><?= $i+1 ?></td>
<td><?= $result ?></td>
</tr>

<?php endforeach; ?>

</table>

<h3><?= $score ?> / <?= $total ?> 点</h3>


