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
    <table>
        <?php foreach (($arr?:[]) as $row): ?>
            <tr>
            <?php foreach (($row?:[]) as $cell): ?>
                <td>
                    <?= ($cell)."
" ?>
                </td>
            <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>