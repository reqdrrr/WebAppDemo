<!DOCTYPE html>
<html>
<head>
	<title>Demo Home</title>
</head>
<body>
    <!-- <p><?= ($msg['message']) ?></p> -->
    <?php foreach (($msg?:[]) as $message): ?>
        <p><?= ($message['message']) ?></p>
    <?php endforeach; ?>
</body>
</html>