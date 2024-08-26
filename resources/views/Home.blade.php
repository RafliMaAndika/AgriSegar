<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Segar</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="img/agrisegar.png" alt="Logo" class="logo">
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button id="loginBtn" class="btn-login">Masuk</button>
                <li><button id="signupBtn" class="btn-signup">Daftar</button>
            </ul>
        </div>
        <button class="close-btn" id="close-btn">&times;</li> <!-- Close button -->
    </nav>

    <!-- Sign In Pop-up Container -->
    <div id="loginPopup" class="popup-container">
        <div class="popup-content">
            <span class="close-btn" id="closeLoginPopup">&times;</span>
            <h2>Welcome Back!</h2>
            <p>Sign in to your account</p>
            <form id="loginForm">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="btn-submit">Sign In</button>
            </form>
            <p>Belum punya akun? <a href="#" id="openSignup">Sign Up</a></p>
        </div>
    </div>

    <!-- Sign Up Pop-up Container -->
    <div id="signupPopup" class="popup-container">
        <div class="popup-content">
            <span class="close-btn" id="closeSignupPopup">&times;</span>
            <h2>Join Us!</h2>
            <p>Create a new account</p>
            <form id="signupForm">
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="btn-submit">Sign Up</button>
            </form>
            <p>Sudah punya akun? <a href="#" id="openLogin">Sign In</a></p>
        </div>
    </div>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Garda Terdepan Pertanian Indonesia</h1>
        <p>Memelihara Pertumbuhan Pertanian Indonesia dengan Para Ahli Pertanian</p>
        <button id="heroBtn" class="btn-primary">Bergabung dengan Kami</button>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="about-content">
            <h2>About Us</h2>
            <h3>Dipercayai oleh Mitra Dicintai oleh Konsumen</h3>
            <p>Agri Segar Indonesia, sebuah perusahaan agritech yang didirikan pada tahun 2018, memiliki visi besar untuk mendigitalisasi seluruh rantai pasokan produk segar Indonesia dari hulu ke hilir. Impian yang dulu untuk memberdayakan dan mendigitalisasikan proses tradisional "farm-to-table", telah bertumbuh menjadi solusi bagi industri pertanian Indonesia yang terfragmentasi, serta memperkuat ketahanan pangan nasional.</p>
            
            <!-- Add statistics or key achievements -->
            <div class="achievements">
                <div class="achievement">
                    <i class="fa fa-users"></i>
                    <h4>100+ Partners</h4>
                    <p>We collaborate with over 100 trusted partners.</p>
                </div>
                <div class="achievement">
                    <i class="fa fa-leaf"></i>
                    <h4>500+ Products</h4>
                    <p>Offering a wide range of fresh products.</p>
                </div>
                <div class="achievement">
                    <i class="fa fa-globe"></i>
                    <h4>Nationwide</h4>
                    <p>Serving customers across the country.</p>
                </div>
            </div>

            <a href="#contact" class="btn-primary">Hubungi Kami</a>
        </div>
    </div>
</section>


    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-items">
                <div class="service-item">
                    <h3>Agri Mart</h3>
                    <p>Solusi yang kami miliki untuk memastikan hasil tani tetap segar saat dikonsumsi oleh konsumen</p>
                </div>
                <div class="service-item">
                    <h3>Agri Hub</h3>
                    <p>Kami menyediakan hub yang siap menampung seluruh hasil tani dari petani kemudian mendistribusikannya kepada mitra-mitra kami</p>
                </div>
            </div>
        </div>
    </section>

<!-- Team Section -->
<section id="team" class="team">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="img/team1.jpg" alt="Team Member 1">
                <h3>Ando Nainggolan</h3>
                <p>Chief Executive Officer</p>
            </div>
            <div class="team-member">
                <img src="img/team2.jpg" alt="Team Member 2">
                <h3>Manto Lumban Gaol</h3>
                <p>Chief Business Development Officer</p>
            </div>
            <div class="team-member">
                <img src="img/team3.jpg" alt="Team Member 3">
                <h3>Ferlin Firdaus Turnip</h3>
                <p>Chief Technology Officer</p>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Interested in our services? Get in touch with us.</p>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-info">
                <h3>PT. Agri Fresh Farm</h3>
                <p>Agrisegar adalah Startup di Bidang Pertanian yang berfokus untuk mensejahterakan petani lokal melalui konsep pemberdayaan, pendampingan mulai dari masa menanam hingga masa memanen.</p>
            </div>
            <div class="footer-links">
                <div class="footer-links-column">
                    <h4>Peta Situs</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#team">Our Team</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-links-column">
                    <h4>Area Praktek</h4>
                    <ul>
                        <li><a href="#">AgriMart</a></li>
                        <li><a href="#">AgriHub</a></li>
                    </ul>
                </div>
                <div class="footer-links-column">
                    <h4>Info Kontak</h4>
                    <ul>
                        <li>Jl. Bangka No. 123, Jakarta Selatan</li>
                        <li><a href="mailto:info@agrisegar.com">info@agrisegar.com</a></li>
                        <li><a href="tel:+6281322892789">+62813 2289 2789</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 PT. Agri Fresh Farm, All rights reserved.</p>
                <p>Designed and Developed by <a href="#">CV. Romajuna Teknologi Firdaus</a></p>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
