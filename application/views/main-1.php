<html>
<title>HTML Tutorial</title>
<body>

<h1>This is a heading</h1>
<?php echo anchor('C_buku/i','Tambah data') ?>
<table border="1">
    <tr>
        <td><b>No</b></td>
        <td><b>Judul</b></td>
        <td><b>Tebal</b></td>
        <td><b>Penerbit</b></td>
        <td colspan="2" align="center"><b>Aksi</b></td>
    </tr>
    <?php
    $i=1;
    foreach ($buku as $row) {
        $no=$i++;
    ?>
        <tr>
        <td><?php echo $no?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->tebal;?></td>
        <td><?php echo $row->penerbit;?></td>
        <td><?php echo anchor('C_buku/e/'.$row->id,'Edit');?></td>
        <td><?php echo anchor('C_buku/hapus/'.$row->id,'Hapus');?></td>
        </tr>
        <?php } ?>

</table>
</body>
</html>
