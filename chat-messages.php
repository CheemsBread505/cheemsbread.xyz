<style>
    body{
        background-color: rgb(27, 27, 27);
        color: whitesmoke;
        font-family: 'Space Mono', monospace;
    }
</style>

<div id="chat-box" style="height: 600px; overflow-y: scroll;">
  <?php
    $messages = array_reverse(file('chat.log'));
    foreach ($messages as $message) {
      echo $message;
    }
  ?>
</div>

<?php
// Auto-update the chat log every few seconds
header("refresh: 2"); // refresh every 5 seconds