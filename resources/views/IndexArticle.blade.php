<title> {{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title ?? 'Default Title' }}</x-slot:title>

    <div class="container mt-5">
        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('article.create') }}" class="btn btn-gradient mb-4">
            <strong> Tambah Artikel </strong>
        </a>

        <div class="categoryArticle-wrapper d-flex flex-wrap justify-content-center p-4 mb-5">
            @foreach ($categories as $category)
                <a href="{{ route('articles.byCategory', $category->slug) }}"
                    class="categoryArticle-item d-flex align-items-center justify-content-center p-3 m-2 border rounded shadow-sm">
                    <i class="bi bi-laptop" style="font-size: 2em; color: #007bff; margin-right: 10px;"></i>
                    <span class="categoryArticle-name text-dark" style="font-weight: 500; font-size: 1em;">
                        {{ $category->name }}
                    </span>
                </a>
            @endforeach
        </div>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card article-card shadow-sm border-0">
                        <div class="position-relative">
                            <!-- Gambar artikel -->
                            @if ($article->image)
                                <a href="{{ route('ArticleDetail', $article->id) }}" class="image-link">
                                    <img src="{{ asset('storage/images/' . $article->image) }}"
                                        alt="{{ $article->title }}" class="img-fluid article-image w-100">

                                    <div class="article-title-wrapper">
                                        <!-- Judul artikel dengan alignment kiri -->
                                        <h5 class="article-title" title="{{ $article->title }}"
                                            style="text-align: left;">
                                            {{ $article->title }}
                                        </h5>
                                    </div>
                                </a>
                            @endif

                            <!-- Overlay dengan judul dan tombol -->
                            <div class="card-overlay">
                                <div class="button-group">
                                    <a href="{{ route('ArticleDetail', $article->id) }}"
                                        class="btn btn-primary btn-sm detail-btn">Lihat Detail</a>
                                    <a href="{{ route('ArticleEdit', $article->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>


{{-- <!-- Artikel-artikel yang ditampilkan -->
        @foreach ($articles as $article)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $article->title }}</h6>
                </div>
                <div class="card-body">
                    <p><strong>Penulis :</strong> {{ $article->author }}</p>
                    <p><strong>Jenis Artikel :</strong> {{ $article->articleType->name ?? 'Jenis Tidak Tersedia' }}</p>
                    <p><strong>Tema : </strong> {{ $article->category->name ?? 'Kategori Tidak Tersedia' }}</p>

                    <!-- Menampilkan sebagian isi artikel -->
                    <div class="article-content mb-3">
                        <p>{!! Str::limit($article->content, 300) !!}...</p>
                    </div>

                    <!-- Jika artikel memiliki gambar -->
                    @if ($article->image)
                        <div class="mb-4 text-center" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}"
                                class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    @endif

                    <!-- Tombol untuk Edit dan Delete artikel -->
                    <div class="mt-2">
                        <a href="{{ route('ArticleDetail', $article->id) }}" class="btn btn-info btn-sm">Lihat
                            Detail</a>
                        <a href="{{ route('ArticleEdit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
