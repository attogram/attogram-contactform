<?php
// Attogram Framework - Contact Page v0.2.1

namespace Attogram;

$this->pageHeader('Contact');

if (isset($_POST['msg']) && isset($_POST['email'])) {

    $sql = 'INSERT INTO contact (time,email,msg,ip,agent) '
        .'VALUES (DATETIME("now"),:email,:msg,:ip,:agent)';

    $bind = array(
        'email' => $_POST['email'],
        'msg' => $_POST['msg'],
        'ip' => @$_SERVER['REMOTE_ADDR'],
        'agent' => @$_SERVER['HTTP_USER_AGENT'],
    );

    if ($this->database->queryb($sql, $bind)) {
        echo '<div class="container">Thank You.  Message received.</div>';
        $this->pageFooter();
        return;
    }

    echo '<p>ERROR</p>';

}

?>
<div class="container">
  <h3>Contact us</h3>
  <form action="." method="POST">
    <div class="form-group">
      <label for="email">Your Email:</label>
      <input class="form-control" type="text" name="email" size="55" value="" />
    </div>
    <div class="form-group">
      <label for="msg">Your Message:</label>
      <textarea class="form-control" name="msg" rows="10" cols="70"></textarea>
    </div>
    <button type="submit" class="btn btn-primary"> Send your message now </button>
  </form>
</div>
<?php
$this->pageFooter();
