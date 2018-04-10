<html>
    <body>
        <thead>
            <tr>
            <td><b>Name</b></td>
            <td><b>Subject</b></td>
            <td><b>Komentar</b></td>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($data as $x) { ?>
            <tr>
            <td><?= $x['name'] ?></td>
            <td><?= $x['subject'] ?></td>
            <td><?= $x['komentar'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </body>
</html>