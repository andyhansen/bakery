<?php
include "../connectioninfo.php";
session_start();
/* This php file should:
 * - Check that the form has been properly submitted
 * - Check that all of the fields are not blank
 * - If both of these are true then it should store it
 *   in the updates table in the database
 */
if (!isset($_SESSION["admin"]) || !$_SESSION["admin"]) {
  header("Location: updates.php");
  exit;
}

$_SESSION["updateForm"] = $_POST;

if (!isset($_POST["submit"])) {
  header("Location: updates.php");
  exit;
}

if ($_POST["title"] == "" || $_POST["update"] == "") {
  header("Location: updates.php");
  exit;
}

# open a database connection
#
# submit the update to the database
#
# reload to the updates page with a message of somekind

?>
