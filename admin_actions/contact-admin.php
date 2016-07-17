<?php
// Attogram Framework - Message Admin v0.2.4

namespace Attogram;

$this->pageHeader('Contact Form Admin');

echo '<div class="container">';

$sql = 'SELECT * FROM contact ORDER BY id DESC';

$messages = $this->database->query($sql);

echo '<strong>'.count($messages).'</strong> <a href="">Messages</a><hr />';

foreach ($messages as $message) {
    echo 'ID: '.$message['id']
    .' <a target="_db" href="../db-admin/?table=contact&action=row_editordelete&pk=['
    .$message['id'].']&type=edit">edit</a>'
    .' <a target="_db" href="../db-admin/?table=contact&action=row_editordelete&pk=['
    .$message['id'].']&type=delete">delete</a>'
    .'<br />IP: '.$message['ip']
    .'<br />Time: '.$message['time']
    .'<br />Agent: '.$this->webDisplay($message['agent'])
    .'<br />Email: '.$this->webDisplay($message['email'])
    .'<br />Message:<br />'.$this->webDisplay($message['msg'])
    .'<hr />';
}

echo '</div>';

$this->pageFooter();
