<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cheems Bread's Chat</title>
    <link rel="icon" type="image/x-icon" href="/images/CheemsOG.png">
    <script src="scripts.js"></script> 
</head>
<body>
<?php
session_start();

// Check if user has submitted a message
if (isset($_POST['message'])) {
  $message = htmlspecialchars($_POST['message']);
  $username = $_SESSION['username'] ?? 'Anonymous';

  // Append new message to chat log
  $chatLog = file_get_contents('chat.log');
  $newMessage = "<b>{$username}:</b> {$message}\n <br>";
  $chatLog .= $newMessage;
  file_put_contents('chat.log', $chatLog);

  // Redirect to prevent form resubmission on refresh
  header('Location: chat.php');
  exit;
}

// Check if user has set a username
if (isset($_POST['username'])) {
  $_SESSION['username'] = htmlspecialchars($_POST['username']);
  header('Location: chat.php');
  exit;
}

// Show chat form or username form
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
?>
  <h1>Simple Chat Room</h1>
  <p style="color: red; font-size: small;">do not share personal information about yourself or other people in this chatroom</p>
  <iframe src="chat-messages.php" style="height: 500px; width: 400px; overflow-y: scroll; resize: both;"></iframe>
  <form method="post">
    <input type="text" name="message" placeholder="Type your message here">
    <button type="submit">Send</button>
  </form>
<?php
} else {
?>
  <h1>Enter Your Name</h1>
  <form method="post">
    <input type="text" name="username" placeholder="Your name">
    <button type="submit">Start Chatting</button>
  </form>
<?php
}
?>
</body>
</html>