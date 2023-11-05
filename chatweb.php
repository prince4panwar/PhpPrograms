<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        #chat-box {
            width: 300px;
            height: 300px;
            border: 1px solid #000;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <?php
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    if (!empty($username)) {
        if (isset($_POST['sendMessage']) && !empty($_POST['message'])) {
            $message = $_POST['message'];
            $chatMessages[] = ["sender" => $username, "message" => $message];
        }
    }
    ?>

    <?php if (empty($username)) { ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />
            <input type="submit" value="Join Chat" />
        </form>
    <?php } else { ?>
        <div id="chat-box">
            <?php
            if (!empty($chatMessages)) {
                foreach ($chatMessages as $msg) {
                    echo "<p><strong>{$msg['sender']}:</strong> {$msg['message']}</p>";
                }
            }
            ?>
        </div>
        <form method="post" action="">
            <input type="text" name="message" placeholder="Type your message..." required />
            <input type="submit" name="sendMessage" value="Send" />
        </form>
    <?php } ?>
</body>
</html>
