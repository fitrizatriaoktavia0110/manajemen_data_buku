@include('layout.header')
        <h3>Buat Buku</h3>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Judul Buku:</label>
                <input type="text" name="judul" id="" placeholder="Masukkan judul buku" required>
            </div>
            <div class="form-group">
                <label for="">Pengarang:</label>
                <input type="text" name="pengarang" id="" placeholder="Masukkan nama pengarang" required>
            </div>
            <div class="form-group">
                <label for="">Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" id="" placeholder="Masukkan tahun terbit" required>
            </div>
            <div class="form-group">
                <label for="">Penerbit:</label>
                <select name="penerbit_id" id="" required>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
                    @endforeach
                </select>
            <div class="form-group">
                <label for="">Kategori:</label>
                <select name="kategori_id" id="" required>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="tombol">Simpan</button>
        </form>
@include('layout.footer')