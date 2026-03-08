<?php include 'fungsi.php'; ?>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Negara</th>
            <th>Ibukota</th>
        </tr>
        <?php
        foreach ($x->tampil() as $data) {
            ?>
            <?php
        }
        ?>
    </table>
</body>

</html>