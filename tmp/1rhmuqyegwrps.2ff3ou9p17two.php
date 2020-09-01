<!DOCTYPE html>
<html>
<head>
	<title>Demo Home</title>
</head>
<body>
    <?php echo $this->render('header.htm',NULL,get_defined_vars(),0); ?>

    <!-- <p><?= ($msg['message']) ?></p> -->
    <?php foreach (($msg?:[]) as $message): ?>
        <p><?= ($message['message']) ?></p>
    <?php endforeach; ?>
    <form method="POST" action="/readfile" enctype="multipart/form-data">
        <label for="inputEmail" class="sr-only">Add File</label>
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

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