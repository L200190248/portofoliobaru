<title> {{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title ?? 'Default Title' }}</x-slot:title>

    <style>
        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .project-card img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .project-card:hover img {
            transform: scale(1.1);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .project-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container my-5">
        <h1 class="text-center mb-5">Daftar Project</h1>

        <!-- Card 1 -->
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/E-commerce.jpeg') }}" class="img-fluid rounded-start" alt="Proyek 1">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 1: Sistem E-Commerce</h5>
                        <p class="card-text">Deskripsi singkat mengenai proyek ini, yang berkaitan dengan pengembangan
                            sistem e-commerce menggunakan teknologi terbaru untuk meningkatkan pengalaman pengguna dan
                            penjualan online.</p>
                        <p class="card-text"><small class="text-muted">Tanggal Dibuat: 01-01-2024</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/aplikasi-mobile.jpg') }}" class="img-fluid rounded-start" alt="Proyek 2">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 2: Aplikasi Mobile</h5>
                        <p class="card-text">Proyek ini fokus pada pengembangan aplikasi mobile untuk memudahkan akses
                            layanan kepada pengguna dengan antarmuka yang intuitif dan cepat.</p>
                        <p class="card-text"><small class="text-muted">Tanggal Dibuat: 15-02-2024</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/AplikasiWebPerusahaan.jpeg') }}" class="img-fluid rounded-start"
                        alt="Proyek 3">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 3: Website Perusahaan</h5>
                        <p class="card-text">Deskripsi proyek pengembangan website untuk perusahaan yang menyediakan
                            informasi produk, layanan, dan kontak perusahaan secara efektif kepada pengunjung.</p>
                        <p class="card-text"><small class="text-muted">Tanggal Dibuat: 20-03-2024</small></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</x-layout>
