<!-- resources/views/article/create.blade.php -->
<title>{{ $title ?? 'Buat Artikel' }}</title>
<x-layout>
    <x-slot:title>{{ $title ?? 'Buat Artikel Baru' }}</x-slot:title>

    <div class="container mt-5">


        <!-- Form untuk membuat artikel baru -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Tambah Artikel</h5>
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="title">Judul Artikel</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="author">Penulis</label>
                        <input type="text" name="author" id="author" class="form-control"
                            value="{{ old('author') }}" required>
                        @error('author')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="article_type_id">Jenis Artikel</label>
                        <select name="article_type_id" id="article_type_id" class="form-control" required>
                            @foreach ($articleTypes as $type)
                                <option value="{{ $type->id }}"
                                    {{ old('article_type_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('article_type_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Konten</label>
                        <textarea name="content" id="content" class="form-control" rows="10">{{ old('content') }}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </form>
            </div>
        </div>


        <!-- Tombol Back ke halaman sebelumnya -->
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Kembali</a>

        {{-- <!-- Initialize CKEditor -->
        <script>
            ClassicEditor
                .create(document.querySelector('#content'), {
                    // Menambahkan konfigurasi untuk memastikan penggunaan tag HTML seperti <p> dan <br>
                    paragraph: {
                        format: ['p', 'h2', 'h3', 'blockquote', 'code']
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        </script> --}}


</x-layout>
