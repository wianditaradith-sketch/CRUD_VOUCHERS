<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Voucher</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="box">
        <h2>Data Voucher <a href="{{ route('vouchers.create') }}" class="btn float-r">+ Tambah</a></h2>
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
                @forelse ($vouchers as $v)
                <tr>
                    <td>{{ $v->kode }}</td>
                    <td>{{ $v->jenis }}</td>
                    <td>
                        {{ $v->jenis == 'Persen (%)' ? $v->nilai . '%' : 'Rp ' . number_format($v->nilai, 0, ',', '.') }}
                    </td>
                    <td>Rp {{ number_format($v->syarat, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('vouchers.edit', $v) }}" class="btn">Edit</a>
                        <form action="{{ route('vouchers.destroy', $v) }}" method="POST" class="inline"
                              onsubmit="return confirm('Yakin ingin menghapus voucher ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-red">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5">Belum ada voucher</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>