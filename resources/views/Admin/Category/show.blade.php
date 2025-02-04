
<div class="container">
    <h1 class="mt-4">Detail Kategori</h1>

    <div class="card">
        <div class="card-header">
            Kategori: {{ $category->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">ID: {{ $category->id }}</h5>
            <p class="card-text">Judul: {{ $category->title }}</p>
            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
            </form>
            <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
