<?php
$koneksi = new mysqli('localhost', 'root', '', 'catering');
$query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);
?>