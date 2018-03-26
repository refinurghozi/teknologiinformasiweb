<html>
    <head></head>
    <body>
        <form method="post" action="<?php echo base_url().'index.php/Home/delete_barang'?>">
        <table width="25%" border="5">
        <thead>
            <tr>
            <td></td>
            <td><b>Name</b></td>
            <td><b>Subject</b></td>
            <td><b>Komentar</b></td>
            </tr>
        </thead>
        
        
        <tbody>
        <?php foreach ($data as $x) { ?>
        <tr>
        <td><input type="checkbox" name="users[]" value="<?php echo $x['name']?>"></td>
        <td><?= $x['name'] ?></td>
        <td><?= $x['subject'] ?></td>
        <td><?= $x['komentar'] ?></td>
        </tr>
        <?php } ?>
        </tbody>
        </table><br>
        <input type="submit" value="Delete">
        </form>
    <a href="<?= base_url() ?>index.php"><button>Back</button></a>
    </body>
</html>

