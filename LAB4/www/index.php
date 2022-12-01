<?php
echo "hello php !!";


//phpinfo();

$no = 10;
$name = 'fam';
?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>fam</td>
        </tr>
        <?php
        for($i = 2; $i < 5; $i++) {
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?=$name?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
