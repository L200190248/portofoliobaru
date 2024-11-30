<title> {{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-5">

        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="category_id">Tema</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="title">Judul Artikel</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $article->title) }}" required>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="content">Konten</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $article->content) }}</textarea>
                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="author">Penulis</label>
                <input type="text" name="author" id="author" class="form-control"
                    value="{{ old('author', $article->author) }}" required>
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="article_type_id">Jenis Artikel</label>
                <select name="article_type_id" id="article_type_id" class="form-control" required>
                    <option value="">Pilih Jenis Artikel</option>
                    @if ($articleTypes && $articleTypes->count())
                        @foreach ($articleTypes as $type)
                            <option value="{{ $type->id }}"
                                {{ $type->id == $article->article_type_id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    @else
                        <option value="">Tidak ada jenis artikel tersedia</option>
                    @endif
                </select>
                @error('article_type_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="image">Gambar</label>
                @if ($article->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}"
                            width="150">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('IndexArticle') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</x-layout>
