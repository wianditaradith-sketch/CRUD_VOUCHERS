<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Voucher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h2>Form Tambah Voucher</h2>
        <form action="proses_tambah.php" method="POST">
            <input type="text" name="kode" required placeholder="Kode Voucher">
            
            <select name="jenis" required>
                <option value="Persen (%)">Persentase (%)</option>
                <option value="Nominal (Rp)">Nominal (Rp)</option>
            </select>
            
            <input type="number" name="nilai" required placeholder="Besar Diskon">
            <input type="number" name="syarat" required placeholder="Syarat Minimal Belanja (Rp)">
            
            <button type="submit" class="btn">Simpan Data</button>
            <a href="index.php" class="btn btn-outline">Batal</a>
        </form>
    </div>
</body>
</html>