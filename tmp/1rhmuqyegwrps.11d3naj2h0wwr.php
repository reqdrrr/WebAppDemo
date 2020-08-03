<!DOCTYPE html>
<html>
<head>
    <title>Demo Home</title>
    <link rel="stylesheet" href="./app/views/file.css">
</head>
<body>
    <form method="POST" action="/savefile" ">
        <button type="submit">Save</button>
    </form>
    <div style="overflow-x:auto;">
    <table>
        <?php $ctr=0; foreach (($arr?:[]) as $row): $ctr++; ?>
            <tr>
            <?php $idx=0; foreach (($row?:[]) as $cell): $idx++; ?>
            <?php if ($idx==1): ?>
                <?php else: ?>
                    <?php if ($ctr==1): ?>
                        
                            <th class="head">
                                <?= ($cell)."
" ?>
                            </th>
                        
                        <?php else: ?>
                            <td>
                                <?= ($cell)."
" ?>
                            </td>
                        
                    <?php endif; ?>
                
            <?php endif; ?>
            <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>