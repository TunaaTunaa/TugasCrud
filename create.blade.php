<h3> {{$judul}} </h3>
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama" id="">
    <p></p>
    <label>HP</label><br>
    <input type="text" name="hp" id="">
    <p></p>
    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>