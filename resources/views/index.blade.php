<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Saya</title>
    <link href="@vite('resources/css/app.css')" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl">Selamat Datang di Landing Page Saya</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#home" class="hover:underline">Home</a></li>
                <li><a href="#about" class="hover:underline">About</a></li>
                <li><a href="#portofolio-gallery" class="hover:underline">Portofolio Gallery</a></li>
                <li><a href="#kontak" class="hover:underline">Kontak</a></li>
                <li><a href="login" class="hover:underline">login</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="p-4">
        <h2 class="text-xl">Home</h2>
        <p>Selamat datang di landing page saya. Di sini Anda dapat menemukan informasi tentang saya, portofolio, dan cara untuk menghubungi saya.</p>
    </section>
    
    <section id="about" class="p-4">
        <h2 class="text-xl">About</h2>
        <p>Nama: Annafi' Dzaki Zuliant</p>
        <p>Umur: 16</p>
        <p>Alamat: Kedungrandu, Patikraja</p>
        <!-- Tambahkan informasi lain sesuai kebutuhan -->
    </section>
    
    <section id="portofolio-gallery" class="p-4">
        <h2 class="text-xl">Portofolio Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-4 shadow-md">
                <img src="assets/image/Asset1.jpg" alt="Proyek 1" class="w-full">
                <h3 class="text-lg">Proyek 1</h3>
                <p>Portofolio diatas merupakan desain logo dan mock up saya pada saat kelas 10.</p>
            </div>
            <div class="bg-white p-4 shadow-md">
                <img src="assets/image/Asset2.png" alt="Proyek 2" class="w-full">
                <h3 class="text-lg">Proyek 2</h3>
                <p>Portofolio diatas merupakan website personal branding saya pada kelas 10.</p>
            </div>
            <!-- Tambahkan proyek lain sesuai kebutuhan -->
        </div>
    </section>
    
    <section id="kontak" class="p-4">
        <h2 class="text-xl">Kontak</h2>
        <p>Email: [Email Anda]</p>
        <p>Telepon: [Nomor Telepon Anda]</p>
        <!-- Tambahkan informasi kontak lain sesuai kebutuhan -->
    </section>
    
    <footer class="p-4 bg-blue-500 text-white">
        <p>&copy; 2024 Annafi Dzaki Zuliant. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>