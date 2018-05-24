<html>
<head>
<title>Demo Model</title>
</head>
<body>
<h2>Model Lingkaran</h2>
<!-- memanggil metode get_radius() dari object $model -->
Nilai jari-jari: <?php echo $model->get_radius(); ?><br />

<!-- memanggil metode hitung_luas() dari object $model -->
Luas Lingkaran: <?php echo $model->hitung_luas(); ?><br />

<!-- memanggil metode hitung_keliling() dari object $model -->
Keliling Lingkaran: <?php echo $model->hitung_keliling(); ?><br />

</body>
</html>
