<html>

<head>
    <title>Tampil Data Transaksi</title>
</head>

<body>
    <center>
        <table class="table-1">
            <tr>
                <th colspan="5">
                    Tampil Data Transaksi Toko
                </th>
            </tr>

            <tr>
                <td colspan="5">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>

            <tr>
                <th>Nomor Handphone</th>
                <th>:</th>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>

            <tr>
                <th>Merk Sepatu</th>
                <th>:</th>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>

            <tr>
                <th>Ukuran Sepatu</th>
                <th>:</th>
                <td>
                    <?= $size; ?>
                </td>
            </tr>

            <tr>
                <th>Total Harga</th>
                <th>:</th>
                <td>
                    <input type="text" value="<?= $harga; ?>">
                </td>
            </tr>

            <tr>
                <td colspan="5" align="center" class="tombol">
                    <a href="<?= base_url('toko'); ?>">Kembali</a>
                </td>
            </tr>

        </table>
    </center>
</body>
</html>