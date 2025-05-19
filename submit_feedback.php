<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = strip_tags(trim($_POST["email"]));
  $message = strip_tags(trim($_POST["message"]));

  if (empty($message)) {
    echo "Message cannot be empty.";
    exit;
  }

  $date = date("Y-m-d H:i:s");
  $entry = "-----\nDate: $date\n";
  $entry .= !empty($name) ? "Name: $name\n" : "";
  $entry .= !empty($email) ? "Email: $email\n" : "";
  $entry .= "Message: $message\n\n";

  file_put_contents("feedback.txt", $entry, FILE_APPEND | LOCK_EX);

  header("Location: index.html");
  exit;
}
?>