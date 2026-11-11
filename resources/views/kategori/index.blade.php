@include('layout.header')
        <h3>Daftar Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allKategori as $key => $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $r->id) }}" method="POST" style="display:inline;">
                                <a href="{{ route('kategori.show', $r->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@include('layout.footer')