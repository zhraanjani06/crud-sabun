<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sabun</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 3px; display: inline-block; border: none; cursor: pointer; }
        .btn-primary { background-color: #007bff; }
        .btn-warning { background-color: #ffc107; color: black; }
        .btn-danger { background-color: #dc3545; }
        .alert { padding: 10px; background-color: #d4edda; color: #155724; margin-bottom: 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Data Sabun Mandi</h1>

    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="/sabun/create" class="btn btn-primary">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sabun</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sabuns as $index => $sabun)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $sabun->nama_sabun }}</td>
                <td>{{ $sabun->merk }}</td>
                <td>Rp {{ number_format($sabun->harga, 0, ',', '.') }}</td>
                <td>{{ $sabun->stok }}</td>
                <td>
                    <a href="/sabun/{{ $sabun->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/sabun/{{ $sabun->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if(count($sabuns) == 0)
            <tr>
                <td colspan="6" style="text-align: center;">Belum ada data sabun.</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>
</html>