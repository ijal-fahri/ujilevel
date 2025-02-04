
<div class="container">
    <h1 class="mt-4">Tambah Kategori</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul Kategori</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>