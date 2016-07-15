<?php
// Attogram Framework - Message Admin v0.2.0

namespace Attogram;

$this->pageHeader('Contact Form Admin');
?>
<div class="container">
<?php

$sql = 'SELECT * FROM contact ORDER BY id DESC';
$m = $this->database->query($sql);

echo '<strong>'.count($m).'</strong> <a href="">Messages</a><hr />';

foreach ($m as $message) {
    echo 'ID: '.$message['id']
  .' <a target="_db" href="../db-admin/?table=contact&action=row_editordelete&pk=['.$message['id'].']&type=edit">edit</a>'
  .' <a target="_db" href="../db-admin/?table=contact&action=row_editordelete&pk=['.$message['id'].']&type=delete">delete</a>'
  .'<br />IP: '.$message['ip']
  .'<br />Time: '.$message['time']
  .'<br />Agent: '.htmlentities($message['agent'])
  .'<br />Email: '.htmlentities($message['email'])
  .'<br />Message:<br />'.htmlentities($message['msg'])
  .'<hr />';
}
?>
</div>
<?php
$this->pageFooter();