    <!-- <p><?= ($msg['message']) ?></p> -->
    <?php foreach (($msg?:[]) as $message): ?>
        <p><?= ($message['message']) ?></p>
    <?php endforeach; ?>
    <form method="POST" action="/displayfile" enctype="multipart/form-data">
        <label for="inputEmail" class="sr-only">Add File</label>
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>