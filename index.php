<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD Segitiga</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>CRUD Segitiga Siku-Siku</h1>

    <?php
    $edit = false;
    $edit_id = $alas = $sisi_miring = '';
    if (isset($_GET['edit'])) {
        $edit = true;
        $edit_id = $_GET['edit'];
        $result = $conn->query("SELECT * FROM segitiga WHERE id = $edit_id");
        $row = $result->fetch_assoc();
        $alas = $row['alas'];
        $sisi_miring = $row['sisi_miring'];
    }
    ?>

    <form action="crud.php" method="post">
        <input type="hidden" name="id" value="<?= $edit ? $edit_id : '' ?>">
        <label for="alas">Alas:</label>
        <input type="number" step="0.01" name="alas" id="alas" value="<?= $edit ? $alas : '' ?>" required>
        <label for="sisi_miring">Sisi Miring:</label>
        <input type="number" step="0.01" name="sisi_miring" id="sisi_miring" value="<?= $edit ? $sisi_miring : '' ?>" required>
        <?php if ($edit): ?>
            <button type="submit" name="update">Update</button>
        <?php else: ?>
            <button type="submit" name="tambah">Tambah</button>
        <?php endif; ?>
    </form>

    <h2>Data Segitiga</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Alas</th>
                <th>Sisi Miring</th>
                <th>Tinggi</th>
                <th>Luas</th>
                <th>Keliling</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM segitiga");
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['alas']}</td>
                    <td>{$row['sisi_miring']}</td>
                    <td>{$row['tinggi']}</td>
                    <td>{$row['luas']}</td>
                    <td>{$row['keliling']}</td>
                    <td>
                        <a href='?edit={$row['id']}'>Edit</a> | 
                        <a href='?hapus={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
