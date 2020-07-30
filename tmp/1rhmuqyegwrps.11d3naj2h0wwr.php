<!DOCTYPE html>
<html>
<head>
	<title>Demo Home</title>
</head>
<body>
    <form method="POST" action="/savefile" ">
        <button type="submit">Save</button>
    </form>
    <div style="overflow-x:auto;">
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
    </div>
</body>
</html>