\<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Voucher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h2>Data Voucher <a href="tambah.php" class="btn float-r">+ Tambah</a></h2>
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Jenis</th>
                    <th>Nilai</th>
                    <th>Syarat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM vouchers ORDER BY id DESC";
                $result = mysqli_query($conn, $query);
                
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['kode']) ?></td>
                    <td><?= htmlspecialchars($row['jenis']) ?></td>
                    <td><?= htmlspecialchars($row['nilai']) ?></td>
                    <td>Rp <?= htmlspecialchars($row['syarat']) ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn-red" onclick="return confirm('Yakin ingin menghapus voucher ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>