<?php
$query = "SELECT *
          FROM messages
          WHERE is_visible = 1
          ORDER BY date DESC";
$com = $pdo->query($query);
while($messages = $com->fetch())
{
  $messages['name'] = htmlspecialchars($messages['name']);
  $messages['email'] = htmlspecialchars($messages['email']);
  $messages['text'] = nl2br(htmlspecialchars($messages['text']));
}
?>
