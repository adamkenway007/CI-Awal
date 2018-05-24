<!DOCTYPE html>
<html>
<head>
	<title>Demo Model</title>
</head>
<body>

<h2>Entri Produk</h2>

<form action="http://localhost/Project1.91a-Entri-Produk/entri" method="post">

<?php echo $model->labels['id']; ?><br />
<input type="text" name="id" /><br /><br />

<?php echo $model->labels['nama']; ?><br />
<input type="text" name="nama" /><br /><br />

<?php echo $model->labels['harga']; ?><br />
<input type="text" name="harga" /><br /><br />

<input type="submit" name="btnSubmit" value="Simpan">

</form>
</body>
</html>