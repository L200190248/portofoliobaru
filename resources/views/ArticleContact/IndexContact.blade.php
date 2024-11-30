<x-layout>
    <x-slot:title>{{ $title ?? 'Kirim Pesan Kontak' }}</x-slot:title>

    <div class="container my-5">
        <h1 class="text-center mb-5">{{ $title ?? 'Formulir Kontak' }}</h1>
        <!-- Informasi Kontak -->
        <div class="mt-5 text-center">
            <h5>Atau Hubungi Kami Lewat:</h5>
            <ul class="list-unstyled">
                <li><strong>Telepon:</strong> +62 123 456 789</li>
                <li><strong>Email:</strong> contact@portofoliobaru.com</li>
                <li><strong>Alamat:</strong> Jl. Contoh Alamat No. 123, Kota, Negara</li>
            </ul>
        </div>
        <div class="container">
            <h1>Lokasi Kami</h1>

            <p>Kami terletak di alamat berikut:</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=Jl.+Raya+No.10,+Jakarta"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</x-layout>
