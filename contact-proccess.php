<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nomorwa = $_POST['nomorwa'];
    $jasa = $_POST['jasa'];
    $budget = $_POST['budget'];
    $konsep = $_POST['konsep'];
    $query = mysqli_query($koneksi, "INSERT INTO contact VALUES('$nama','$nomorwa','$jasa','$budget','$konsep')");
    if ($query) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:thanks.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:homepage.php?message={$message}");
    }
}
