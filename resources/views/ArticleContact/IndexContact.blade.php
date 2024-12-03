<title> {{ $title }}</title>
<x-layout>
    <x-slot:title>{{ $title ?? 'Kirim Pesan Kontak' }}</x-slot:title>

    <section class="contact-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row">
                <!-- Kolom Lokasi Kami -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h4>Lokasi Kami</h4>
                    <p>Kunjungi kami di lokasi berikut untuk berdiskusi lebih lanjut:</p>
                    <div class="map-container mb-4">
                        <!-- Embed Google Maps -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1262.7357065056137!2d110.7691331!3d-7.5545119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1508d3588e07%3A0x4ec446680f3b3036!2sAURORA%20LAUNDRY%20EXPRESS%201%20JAM%20JADI!5e0!3m2!1sid!2sid!4v1679825918703!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p>Alamat: Jl. Contoh No.12, Jakarta, Indonesia</p>
                    <p>Telepon: +62 123 456 789</p>
                    <p>Email: support@artikelweb.com</p>
                </div>

                <!-- Kolom Formulir Kontak -->
                <div class="col-md-6">
                    <h4>Formulir Kontak</h4>
                    <p>Silakan kirim pesan Anda dan kami akan segera menghubungi Anda kembali.</p>
                    <form action="/send-message" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Anda</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Anda</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Masukkan email Anda">
                        </div>
                        <div class="form-group">
                            <label for="category">Jenis Pertanyaan</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">Pilih jenis pertanyaan</option>
                                <option value="general">Pertanyaan Umum</option>
                                <option value="support">Dukungan Teknis</option>
                                <option value="feedback">Masukan dan Saran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>
