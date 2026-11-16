 <?php
    // 1. Koneksi ke MySQL
    $koneksi = mysqli_connect("localhost", "root", "", "M9");

    $nama = $_POST['nama'];
    $tgl_input = $_POST['tanggal_lahir'];

    if (isset($_POST['hobi'])) {
        $hobi = implode(', ', $_POST['hobi']);
    } else {
        $hobi = 'Tidak ada hobi yang dipilih';
    }

    $query = "INSERT INTO data (nama, tanggal_lahir, hobi) VALUES ('$nama', '$tgl_input', '$hobi')";
    mysqli_query($koneksi, $query);

    $daftar_bulan = [
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    $pecah = explode('-', $tgl_input);
    $hari = (int)$pecah[2];
    $bulan = (int)$pecah[1];
    $tahun = $pecah[0];
    $tanggal_lahir = $hari . ' ' . $daftar_bulan[$bulan] . ' ' . $tahun;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Anda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2>Tampilan Data Anda</h2>
        <hr class="divider">

        <table class="data-table">
            <tr>
                <td class="label">Nama Lengkap:</td>
                <td class="value"><?= $nama ?></td>
            </tr>
            <tr>
                <td class="label">Tanggal Lahir:</td>
                <td class="value"><?= $tanggal_lahir ?></td>
            </tr>
            <tr>
                <td class="label">Hobi:</td>
                <td class="value"><?= $hobi ?></td>
            </tr>
        </table>

        <a href="form_data_diri.html" class="back-link">&laquo; Kembali ke Form</a>
    </div>

</body>
</html>
