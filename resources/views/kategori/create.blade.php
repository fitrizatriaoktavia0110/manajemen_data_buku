@include('layout.header')
        <h3>Buat Kategori</h3>
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" name="nama_kategori" id="" placeholder="Masukkan nama kategori" required>
            </div>
            <button type="submit" class="tombol">Simpan</button>
        </form>
@include('layout.footer')