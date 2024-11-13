<!-- resources/views/landing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Bimbingan Konseling Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 123, 255, 0.8), rgba(0, 123, 255, 0.8)), url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
            color: #fff;
            padding: 100px 20px;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.3rem;
            margin-bottom: 30px;
        }
        .features {
            padding: 60px 20px;
            background-color: #f1f1f1;
        }
        .feature-item {
            text-align: center;
            padding: 20px;
        }
        .feature-item h3 {
            font-size: 1.5rem;
            margin-top: 10px;
        }
        .testimonials {
            padding: 60px 20px;
            background-color: #007bff;
            color: #fff;
        }
        .testimonial-item {
            text-align: center;
            margin: 20px;
        }
        .testimonial-item p {
            font-size: 1.1rem;
            font-style: italic;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Bimbingan Konseling</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="{{ route('register') }}">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Selamat Datang di Bimbingan Konseling Online</h1>
        <p>Solusi aman dan nyaman untuk semua kebutuhan konseling Anda</p>
        <a href="{{ route('login') }}" class="btn btn-light btn-lg me-3">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Daftar Sekarang</a>
    </section>

    <!-- Features Section -->
    <section id="features" class="features container">
        <div class="row text-center">
            <h2 class="mb-5">Fitur Unggulan</h2>
            <div class="col-md-4 feature-item">
                <img src="https://via.placeholder.com/100" alt="Feature 1" class="img-fluid mb-3">
                <h3>Konselor Profesional</h3>
                <p>Dapatkan bimbingan dari konselor yang terlatih dan berpengalaman.</p>
            </div>
            <div class="col-md-4 feature-item">
                <img src="https://via.placeholder.com/100" alt="Feature 2" class="img-fluid mb-3">
                <h3>Privasi Terjamin</h3>
                <p>Semua percakapan dijamin kerahasiaannya untuk kenyamanan Anda.</p>
            </div>
            <div class="col-md-4 feature-item">
                <img src="https://via.placeholder.com/100" alt="Feature 3" class="img-fluid mb-3">
                <h3>Akses Mudah</h3>
                <p>Konsultasi kapan saja dan di mana saja, cukup dari perangkat Anda.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Mereka?</h2>
            <div class="row">
                <div class="col-md-4 testimonial-item">
                    <p>"Sangat membantu dalam menemukan solusi dari masalah saya."</p>
                    <h5>- deoo</h5>
                </div>
                <div class="col-md-4 testimonial-item">
                    <p>"Konselor yang sangat profesional dan penuh empati."</p>
                    <h5>- fraim</h5>
                </div>
                <div class="col-md-4 testimonial-item">
                    <p>"Pelayanan cepat dan privasi sangat dijaga, terima kasih!"</p>
                    <h5>- yolgi</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Bimbingan Konseling Online.</p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
