<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Toko Asyik Banget</title>
    <link rel="stylesheet" href="toko_style.css">
</head>
<body>  
 <h2>Selamat Datang di Toko Asyik Banget</h2>
    <pre>===================================================================================================================================================================</pre>
        <form method="POST" action="proses.php">
            <table>
                <tr>
                    <td>No. Pesanan</td>
                    <td>: <input type="text" name="no_pesanan" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <input type="text" name="tanggal" value="" ></td>
                </tr>
                <tr><td colspan="2"><hr class="dashed"></td></tr>
                <tr>
                    <td>Nama Konsumen</td>
                    <td>: <input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Pilih Jenis Barang</td>
                    <td>: 
                        <select name="jenis_barang">
                            <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                            <option value="Peralatan Kantor">Peralatan Kantor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Jenis Pembelian</td>
                    <td><div class="radio-group">:
                            <label><input type="radio" name="pembelian" value="Grosir"> Grosir</label>
                            <label><input type="radio" name="pembelian" value="Ecer"> Ecer</label>
                        </div>          
                    </td>
                </tr>
                <tr>
                    <td>Masukan Nama Barang</td>
                    <td>: 
                        <select name="nama_barang">
                            <option value="Kulkas|1500000">Kulkas == Rp 1.500.000</option>
                            <option value="Kompor|500000">Kompor == Rp 500.000</option>
                            <option value="Lemari Besi|2500000">Lemari Besi == Rp 2.500.000</option>
                            <option value="Kursi Kantor|1500000">Kursi Kantor == Rp 1.500.000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Masukan Jumlah Beli</td>
                    <td>: <input type="number" name="jumlah" value=""></td>
                </tr>
                <tr><td colspan="2"><hr class="dashed"></td></tr>
                <tr class="alamat">
                    <td>Alamat Pengiriman</td>
                    <td>: <input type="text" name="alamat" value=""></td>
                </tr>
            </table>
            <div class="buttons">
                <input type="submit" value="Proses">
                <input type="reset" value="Batal">
            </div>
        </form>
    </div>
</body>
</html>
     