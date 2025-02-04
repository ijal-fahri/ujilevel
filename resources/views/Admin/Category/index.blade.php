
<div class="container">
    <h1 class="mt-4">Daftar Kategori</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->title }}</td>
                    <td>
                        <a href="{{ route('category.show', $cat->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('category.destroy', $cat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
