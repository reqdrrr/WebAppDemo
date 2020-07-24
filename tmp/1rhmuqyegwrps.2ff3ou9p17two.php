<!DOCTYPE html>
<html>
<head>
	<title>Tutorial page</title>
</head>
<body>
    <!-- <p><?= ($msg['message']) ?></p> -->
    <?php foreach (($msg?:[]) as $message): ?>
        <p><?= ($message['message']) ?></p>
    <?php endforeach; ?>
</body>
</html>