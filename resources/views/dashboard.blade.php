<title> {{ $title }}</title>

<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <div id="particles-js"></div> --}}
    <!-- Animated Image -->
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-5 lg:px-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content-video">
        <!-- Element video latar belakang -->
        <!-- Video Background -->
        <div class="video-container">
            <video autoplay loop id="video-background" controls>
                <source src="/video/BERUBAH - Film Pendek (Short Movie) Kemendikbud 2017.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Optional: Text Overlay (if you want to add text on top of the video) -->
            {{-- <div class="text-overlay">
                <h2>Kasih paham buat orang yang kurang paham!</h2>
                <p>Kasih hajar buat orang yang kurang ngajar.</p>
            </div> --}}
        </div>
    </div>


    <!-- JavaScript to Start Video -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('video-background');
            video.play();
        });
    </script>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Apa itu pendidikan karakter ?</h6>
        </div>

        {{-- bg-secondary-subtle --}}
        <div class="card-body ">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 40rem;" src="img\pendidikanKarakter.jpeg"
                    alt="">
            </div>
            <div class="content">
                <h3> Pendidikan karakter</h3>
                <p class="text-justify">
                    adalah proses pembelajaran yang bertujuan untuk membentuk dan mengembangkan
                    nilai-nilai moral, etika, dan kepribadian individu sehingga mereka mampu menjadi pribadi yang
                    bertanggung jawab, berintegritas, dan memiliki sikap yang positif dalam kehidupan sehari-hari.
                    Pendidikan ini berfokus pada pembentukan perilaku yang mencerminkan nilai-nilai baik, seperti
                    kejujuran, tanggung jawab, kerja sama, empati, dan rasa hormat terhadap orang laim.
                </p>
                <h5>Tujuan Utama Pendidikan Karakter:</h5>
                <ol>
                    <li>Membentuk moral individu: Membantu peserta didik memahami nilai-nilai etika.</li>
                    <li>Mengembangkan kepribadian positif: Membiasakan sikap disiplin dan kerja keras.</li>
                    <li>Meningkatkan kehidupan sosial: Berkontribusi positif dalam masyarakat.</li>
                </ol>
                <h5>Implementasi Pendidikan Karakter:</h5>
                <ul>
                    <li>Melalui kegiatan di sekolah.</li>
                    <li>Melalui keluarga sebagai lingkungan pertama.</li>
                    <li>Melalui masyarakat dengan memberikan contoh nyata.</li>
                </ul>
                <p> Di Indonesia, pendidikan karakter juga menjadi bagian dari kurikulum untuk membentuk generasi
                    yang
                    berakhlak mulia dan mampu menghadapi tantangan masa depan dengan dasar moral yang kuat.
                </p>
            </div>

            <a target="_blank" rel="nofollow"
                href="https://jogjagreenschool.com/artikel/pentingnya-pendidikan-karakter-untuk-anak-usia-dini">Keterangan
                lebih
                lanjut &rarr;</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jenis Golongan Daya Listrik dan kegunaan </h6>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui magni temporibus pariatur?
                Excepturi
                illo
                ipsa aut odit minus ad eum suscipit cupiditate voluptatum distinctio quas, at beatae magni
                nihil.
                Maiores!
            </p>
            <a target="_blank" rel="nofollow"
                href="https://www.bfi.co.id/id/blog/daya-listrik-definisi-tarif-dan-lainnya">Keterangan lebih
                lanjut &rarr;</a>
        </div>
    </div>

</x-layout>
