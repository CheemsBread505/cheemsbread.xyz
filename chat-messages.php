<link rel="stylesheet" href="styles.css">

<div id="chat-box" style="height: 200px; overflow-y: scroll;">
  <?php echo file_get_contents('chat.log'); ?>
</div>

<?php
// Auto-update the chat log every few seconds
header("refresh: 2"); // refresh every 5 seconds