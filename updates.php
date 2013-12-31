<? include "header.inc.php"; ?>
<div id="main">
<?php
$_SESSION["admin"] = true;
if (isset($_SESSION["admin"]) && $_SESSION["admin"]) {
?>
<form action="updateAction.php" method="POST">
  <fieldset>
    <legend>New Update Form</legend>
      <label>Updates title:<br />
      <input type="text" name="title" /></label>

      <label>Update body:<br />
      <textarea name="update"></textarea></label>

      <input type="submit" name="submit" value="Submit" />
  </fieldset>
</form>
<?php } ?>
</div>
<? include "footer.inc.php"; ?>
