<x-layout>
    <x-slot:title>Artikel di Kategori {{ $category->name }}</x-slot:title>

    <div class="container mt-5">
        <h2 class="mb-4">Kategori: {{ $category->name }}</h2>

        @forelse ($articles as $article)
            <div class="card shadow mb-4">

                <div class="card-body">
                    <p><strong>Penulis :</strong> {{ $article->author }}</p>
                    <p><strong>Jenis Artikel :</strong> {{ $article->articleType->name ?? 'Jenis Tidak Tersedia' }}</p>
                    <p><strong>Tema : </strong> {{ $category->name }}</p>
                    <!-- Menampilkan sebagian isi artikel -->
                    <div class="article-content mb-3">
                        <p>{!! Str::limit($article->content, 300) !!}...</p>
                    </div>

                    <!-- Jika artikel memiliki gambar -->
                    @if ($article->image)
                        <div class="mb-4 text-center">
                            <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}"
                                class="img-fluid" width="300">
                        </div>
                    @endif

                    <!-- Tombol untuk Edit dan Delete artikel -->
                    <div class="mt-2">
                        <a href="{{ route('ArticleDetail', $article->id) }}" class="btn btn-info">Lihat Detail</a>
                        <a href="{{ route('ArticleEdit', $article->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>Tidak ada artikel dalam kategori ini.</p>
        @endforelse
    </div>
</x-layout>
