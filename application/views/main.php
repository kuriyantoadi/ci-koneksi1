<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<a class="btn btn-primary btn-sm" href="<?php echo site_url('C_buku/i') ?>" >Tambah Buku</a>

			<table class="table table-striped custab">
				<thead>
			    <tr>
			        <th>No</th>
			        <th>Judul</th>
			        <th>Tebal</th>
			        <th>Penerbit</th>
							<th>Edit</th>
							<th>Hapus</th>
		    </tr>
				</thead>
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
							<td><a class='btn btn-info btn-sm' href="<?php echo site_url('c_buku/e/'.$row->id); ?>">
								<span class="glyphicon glyphicon-edit"></span> Edit</a>
							</td>
							<td><a  class="btn btn-danger btn-sm" href="<?php echo site_url('C_buku/hapus/'.$row->id);?>">
								<span class="glyphicon glyphicon-remove"></span> Del</a>
							</td>
			      </tr>
			        <?php } ?>

			</table>
		</div>
	</div>
</div>
</body>
</html>
