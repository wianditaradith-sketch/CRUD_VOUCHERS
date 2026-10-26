<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($voucher) ? 'Edit' : 'Tambah' }} Voucher</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="box">
        <h2>Form {{ isset($voucher) ? 'Edit' : 'Tambah' }} Voucher</h2>

        @if ($errors->any())
            <p style="color:red">{{ $errors->first() }}</p>
        @endif

        <form action="{{ isset($voucher) ? route('vouchers.update', $voucher) : route('vouchers.store') }}" method="POST">
            @csrf
            @isset($voucher)
                @method('PUT')
            @endisset

            <input type="text" name="kode" required placeholder="Kode Voucher"
                   value="{{ old('kode', $voucher->kode ?? '') }}">

            <select name="jenis" required>
                @foreach (['Persen (%)' => 'Persentase (%)', 'Nominal (Rp)' => 'Nominal (Rp)'] as $val => $label)
                    <option value="{{ $val }}" {{ old('jenis', $voucher->jenis ?? '') == $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            <input type="number" name="nilai" required placeholder="Besar Diskon"
                   value="{{ old('nilai', $voucher->nilai ?? '') }}">
            <input type="number" name="syarat" required placeholder="Syarat Minimal Belanja (Rp)"
                   value="{{ old('syarat', $voucher->syarat ?? '') }}">

            <button type="submit" class="btn">Simpan Data</button>
            <a href="{{ route('vouchers.index') }}" class="btn btn-outline">Batal</a>
        </form>
    </div>
</body>
</html>