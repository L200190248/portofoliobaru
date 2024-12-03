<?php
include base_path('connection.php');
$article = $Conn->query('SELECT * FROM articles');
$article_types = $Conn->query('SELECT * FROM article_types');
$categories = $Conn->query('SELECT * FROM categories');
$users = $Conn->query('SELECT * FROM users');
?>

<html class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" href="img/a.png">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body class="min-h-full">
    <!-- Konten utama -->
    <div class="min-h-full">
        <!-- Navbar -->
        <x-navbar></x-navbar>
        <!-- Header dengan judul -->
        <x-header>{{ $title }}</x-header>
        <!-- Konten -->
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Konten Anda -->
                {{ $slot }}
            </div>
        </main>
    </div>
    <footer class="footer-section bg-dark text-light py-1">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0" style="font-size: 0.875rem;">&copy; 2024 ArtikelWeb. Semua hak cipta dilindungi.
            </p>
            <ul class="list-unstyled d-flex mb-0" style="gap: 1rem;">
                <li><a href="#" class="text-light" style="font-size: 0.875rem;">Tentang Kami</a></li>
                <li><a href="#" class="text-light" style="font-size: 0.875rem;">Kontak</a></li>
                <li><a href="#" class="text-light" style="font-size: 0.875rem;">Privasi</a></li>
            </ul>
        </div>
    </footer>
    <!-- Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Skrip particles.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Skrip untuk inisialisasi particles.js -->
    {{-- <script>
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#ffffff"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 400,
                        line_linked: {
                            opacity: 1
                        }
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    },
                    remove: {
                        particles_nb: 2
                    }
                }
            },
            retina_detect: true
        });
    </script> --}}
</body>
