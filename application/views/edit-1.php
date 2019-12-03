<!DOCTYPE html>
<html>
<title>Belajar CI</title>
<body>
<h1>Edit Data</h1>
<?php
foreach($data_buku as $row){
echo form_open('C_buku/edit');?>
judul <input type="text" name="judul" value="<?php echo $row->judul;?>"><br><br>
tebal <input type="number" name="tebal" value="<?php echo $row->tebal;?>"><br><br>
penerbit <input type="text" name="penerbit" value="<?php echo $row->penerbit;?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row->id;?>">
<button type="submit">Edit</button>

<?php
echo form_close();
}?>

</body>
</html>
