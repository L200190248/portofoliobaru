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
                        </div>


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
        <div class="container py-5 articlecontent4">
            <div class="row">
                <!-- Artikel 1 -->
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center article-item">
                        <div class="article-text">
                            <h4>University-Community Partnerships: Maintaining or Challenging the Status Quo?</h4>
                            <p class="article-author">Katherine Cheng</p>
                            <p class="article-excerpt">
                                We tell stories to make sense of our lives. The stories we tell shape the ways we
                                see ourselves and interact with […]
                            </p>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                        <div class="article-image ms-4">
                            <img src="{{ asset('img/teknologiPendidikan.jpg') }}"
                                alt="University-Community Partnerships" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Artikel 2 -->
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center article-item">
                        <div class="article-text">
                            <h4>GCSE and Higher results show worsening gap between richer and poorer pupils</h4>
                            <p class="article-author">Jan McArthur, Lancaster University</p>
                            <p class="article-excerpt">
                                Pandemic assessment shows we should reconsider exams.
                            </p>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                        <div class="article-image ms-4">
                            <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="GCSE Results" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center article-item">
                        <div class="article-text">
                            <h4>Campus tensions and the Mideast crisis</h4>
                            <p class="article-author">Dax D'Orazio, Queen's University, Ontario</p>
                            <p class="article-excerpt">
                                Will Ontario and Alberta’s ‘Chicago Principles’ on university free expression stand?
                                […]
                            </p>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                        <div class="article-image ms-4">
                            <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Campus Tensions"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Artikel 4 -->
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center article-item">
                        <div class="article-text">
                            <h4>What happens if a university goes bust?</h4>
                            <p class="article-author">Robert MacIntosh, Northumbria University, Newcastle</p>
                            <p class="article-excerpt">
                                Funding, Governance, Universities, and the academic mission.
                            </p>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                        <div class="article-image ms-4">
                            <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="University Bust"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Artikel 5 -->
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center article-item">
                        <div class="article-text">
                            <h4>Trolling and doxxing: Graduate students sharing their research online speak out
                                about hate</h4>
                            <p class="article-author">Alex Borkowski, Marion Tempest Grant, Natalie Coulter</p>
                            <p class="article-excerpt">
                                An increasingly volatile online environment is affecting our society, including
                                members of the academic community […]
                            </p>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                        <div class="article-image ms-4">
                            <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Trolling and Doxxing"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 artikelcontent3">
            <h3 class="section-title mb-4 text-center">Rekomendasi Artikel</h3>
            <div class="row">
                <!-- Artikel 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="article-item d-block text-center text-decoration-none">
                        <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 1"
                            class="img-fluid mb-2">
                        <h5 class="text-dark">Energi Bersih: Masa Depan Berkelanjutan</h5>
                        <p class="text-muted">Mengapa energi terbarukan adalah langkah penting untuk dunia yang
                            lebih
                            hijau.</p>
                    </a>
                </div>
                <!-- Artikel 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="article-item d-block text-center text-decoration-none">
                        <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 2"
                            class="img-fluid mb-2">
                        <h5 class="text-dark">Keamanan Siber: Tantangan di Era Digital</h5>
                        <p class="text-muted">Tips melindungi data Anda dari ancaman di dunia maya.</p>
                    </a>
                </div>
                <!-- Artikel 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="article-item d-block text-center text-decoration-none">
                        <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 3"
                            class="img-fluid mb-2">
                        <h5 class="text-dark">Kesehatan Mental di Era Modern</h5>
                        <p class="text-muted">Pentingnya menjaga keseimbangan emosional di tengah kesibukan.</p>
                    </a>
                </div>
                <!-- Artikel 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="article-item d-block text-center text-decoration-none">
                        <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 4"
                            class="img-fluid mb-2">
                        <h5 class="text-dark">Panduan Memulai Startup</h5>
                        <p class="text-muted">Langkah-langkah untuk membawa ide Anda menjadi kenyataan.</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="popularArticlesCarousel" class="carousel slide popular-articles-section bg-lightblue py-5"
            data-bs-ride="carousel">
            <div class="container">
                <h3 class="section-title mb-4 text-center">Artikel Populer</h3>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Artikel 1 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 1"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 1</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 1.</p>
                                </a>
                            </div>
                            <!-- Artikel 2 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 2"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 2</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 2.</p>
                                </a>
                            </div>
                            <!-- Artikel 3 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 3"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 3</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 3.</p>
                                </a>
                            </div>
                            <!-- Artikel 4 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 4"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 4</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 4.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Artikel 5 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 5"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 5</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 5.</p>
                                </a>
                            </div>
                            <!-- Artikel 6 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 6"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 6</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 6.</p>
                                </a>
                            </div>
                            <!-- Artikel 7 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 7"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 7</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 7.</p>
                                </a>
                            </div>
                            <!-- Artikel 8 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <a href="#"
                                    class="popular-article-item d-block text-center text-decoration-none">
                                    <img src="{{ asset('img/teknologiPendidikan.jpg') }}" alt="Judul Artikel 8"
                                        class="img-fluid mb-2">
                                    <h5 class="text-dark">Judul Artikel 8</h5>
                                    <p class="text-muted">Deskripsi singkat artikel 8.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontrol Navigasi dengan Ikon -->
                <button class="carousel-control-prev" type="button" data-bs-target="#popularArticlesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#popularArticlesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Selanjutnya</span>
                </button>
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
