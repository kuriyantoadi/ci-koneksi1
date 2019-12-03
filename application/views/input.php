<!DOCTYPE html>
<html>
  <title>Belajar CI</title>
  <body>
    <h1>Tambah Data</h1>

    <?php echo form_open('C_buku/input');?>
    judul <input type="text" name="judul"><br><br>
    tebal <input type="number" name="tebal"><br><br>
    penerbit <input type="text" name="penerbit"><br><br>
    <button type="submit">tambah</button>

    <?php echo form_close();?>
  </body>
</html>
