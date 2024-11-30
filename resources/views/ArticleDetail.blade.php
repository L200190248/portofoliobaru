<title> {{ $title }}</title>
<x-layout>
    <x-slot:title class="text-center">{{ $article->title }}</x-slot:title>

    <div class="container mt-5">
        <h2 class="text-center">{{ $article->title }}</h2>

        <div class="card mb-4 bg-light">
            <div class="card-body">
                <h5 class="card-title">Informasi Artikel</h5>
                <p class="card-text">
                    <strong>Kategori:</strong> <span
                        class="text-muted">{{ $article->category->name ?? 'Kategori Tidak Tersedia' }}</span>
                </p>
                <p class="card-text">
                    <strong>Penulis:</strong> <span class="text-muted">{{ $article->author }}</span>
                </p>
                <p class="card-text">
                    <strong>Jenis Artikel:</strong> <span
                        class="text-muted">{{ $article->articleType->name ?? 'Jenis Tidak Tersedia' }}</span>
                </p>
            </div>
        </div>


        <!-- Menampilkan gambar artikel -->
        @if ($article->image)
            <div class="mb-4 text-center">
                <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}"
                    class="img-fluid" width="300">
            </div>
        @endif

        <!-- Menampilkan konten artikel dengan kelas justify -->
        <div class="content">
            <p class="text-justify">{!! $article->content !!}</p>
        </div>

    </div>

    <!-- Back Button -->
    <div class="text-center">
        <a href="{{ route('IndexArticle') }}" class="btn btn-secondary">Kembali ke Daftar Artikel</a>
    </div>
    </div>
</x-layout>
