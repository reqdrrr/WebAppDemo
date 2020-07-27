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
        <?php $ctr=0; foreach (($arr?:[]) as $row): $ctr++; ?>
            <tr>
            <?php foreach (($row?:[]) as $cell): ?>
            <?php if ($ctr==1): ?>
                
                    <th>
                        <?= ($cell)."
" ?>
                    </th>
                
                <?php else: ?>
                    <td>
                        <?= ($cell)."
" ?>
                    </td>
                
            <?php endif; ?>
            <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>