<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Output</title>
</head>

<style>
    fieldset {
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }

    select {
        width: 100%;
    }
</style>

<body>
    <fieldset>
        <legend>Output Transaksi</legend>

            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                    <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                    <?= $nohp; ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                    <?= $merk; ?>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                    <?= $ukuran; ?>
                    </td>
                </tr>

                <tr>
                    <th>Total Harga</th>
                    <td>:</td>
                    <td>
                    <?= $harga; ?>
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <a href="<?= base_url('review'); ?>">Kembali</a>
                    </td>
                </tr>

            </table>
</fieldset>
</body>
</html>