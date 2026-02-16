<?php

$answer = $_POST['answer_code'];
$desc   = $_POST['answer_desc'];
$select = $_POST['option'];

$result = ($answer === $select);
 if($result): ?>

  <h2>⭕ 正解！</h2>
<?php else: ?>
  <h2>❌ 不正解</h2>
<?php endif; ?>

<p>正解コード：<?= $answer ?></p>
<p>説明：<?= $desc ?></p>


