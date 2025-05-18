<?php
// Tangkap semua data dari form
$no_pesanan   = $_POST['no_pesanan'] ?? '';
$tanggal      = $_POST['tanggal'] ?? '';
$nama         = $_POST['nama'] ?? '';
$jenis_barang = $_POST['jenis_barang'] ?? '';
$pembelian    = $_POST['pembelian'] ?? '';
$nama_barang  = $_POST['nama_barang'] ?? '';
$jumlah       = $_POST['jumlah'] ?? 0;
$alamat       = $_POST['alamat'] ?? '';

// Tangkap data nama_barang dan pisahkan
$nama_barang_input = $_POST['nama_barang']; // Misal: "Kulkas|1500000"
list($nama_barang, $harga) = explode('|', $nama_barang_input);

// Ambil data lain
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;

// Format angka
$harga_format = number_format($harga, 0, ',', '.');
$total_format = number_format($total, 0, ',', '.');

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Pemesanan</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f0f0f0;
            padding: 30px;
        }
    
        h2 {
            text-align: center;
            font-weight: bold;
        }
        .line {
            border-top: 2px dashed #000;
            margin: 15px 0;
        }
        table {
            width: 100%;
        }
        td {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Struk Pemesanan - Toko Asyik Banget</h2>
        <div class="line"></div>
        <table>
            <tr><td>No. Pesanan</td><td>: <?= $no_pesanan ?></td></tr>
            <tr><td>Tanggal</td><td>: <?= $tanggal ?></td></tr>
            <tr><td colspan="2"><div class="line"></div></td></tr>
            <tr><td>Nama Konsumen</td><td>: <?= $nama ?></td></tr>
            <tr><td>Jenis Barang</td><td>: <?= $jenis_barang ?></td></tr>
            <tr><td>Jenis Pembelian</td><td>: <?= $pembelian ?></td></tr>
            <tr><td>Nama Barang</td><td>: <?= $nama_barang ?> == Rp <?= $harga_format ?></td></tr>
            <tr><td>Jumlah Beli</td><td>: <?= $jumlah ?></td></tr>
            <tr><td>Total Bayar</td><td>: Rp <?= $total_format ?></td></tr>
            <tr><td colspan="2"><div class="line"></div></td></tr>
            <tr><td>Alamat Pengiriman</td><td>: <?= $alamat ?></td></tr>
        </table>
    </div>
</body>
</html>