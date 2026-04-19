<!DOCTYPE html>
<html>
<head>
    <title>Edit Sabun</title>
</head>
<body>

<h2>Edit Data Sabun</h2>

<form action="{{ route('sabun.update', $sabun->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Sabun</label><br>
    <input type="text" name="nama_sabun" value="{{ $sabun->nama_sabun }}" required><br><br>

    <label>Merk</label><br>
    <input type="text" name="merk" value="{{ $sabun->merk }}" required><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="{{ $sabun->harga }}" required><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" value="{{ $sabun->stok }}" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>