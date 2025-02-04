
<div class="container">
    <h1 class="mt-4">Edit Kategori</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul Kategori</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $category->title) }}" placeholder="Masukkan judul kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>