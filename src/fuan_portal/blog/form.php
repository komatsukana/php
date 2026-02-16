<?php require "data.php"; ?>

<form action="result.php" method="post">

<h3>① 今の気分</h3>

<?php foreach($emos as $key=>$emo): ?>
  <label>
    <input type="radio" name="emo" value="<?= $key ?>" required>
    <?= $emo[0] ?>
  </label>
<?php endforeach; ?>


<h3>② 今日の気持ち</h3>

<?php foreach($moods as $key=>$mood): ?>
  <label>
    <input type="radio" name="mood" value="<?= $key ?>" required>
    <?= $mood[0] ?>
  </label>
<?php endforeach; ?>

<br><br>
<button>送信</button>

</form>


