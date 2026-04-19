<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sabun</title>
</head>
<body>

<h2>Tambah Data Sabun</h2>

<form action="{{ route('sabun.store') }}" method="POST">
    @csrf

    <label>Nama Sabun</label><br>
    <input type="text" name="nama_sabun" required><br><br>

    <label>Merk</label><br>
    <input type="text" name="merk" required><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" required><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" required><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>