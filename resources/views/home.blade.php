<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beranda - Aplikasi Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-purple-700">Aplikasi Siswa</h1>
      <nav class="space-x-6 text-gray-600 font-medium">
        <a href="#" class="hover:text-purple-700">Beranda</a>
        <a href="#tentang" class="hover:text-purple-700">Tentang</a>
        <a href="#kontak" class="hover:text-purple-700">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 bg-gradient-to-r from-purple-500 to-blue-500 text-white">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Selamat Datang di Aplikasi Siswa</h2>
    <p class="text-lg md:text-xl mb-6">Kelola data siswa dengan mudah, cepat, dan aman.</p>
    <a href="#kontak" class="bg-white text-purple-700 font-semibold px-6 py-3 rounded-xl shadow hover:bg-gray-100 transition">
      Hubungi Kami
    </a>
  </section>

  <!-- Tentang -->
  <section id="tentang" class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Memilih Kami?</h3>
      <p class="text-gray-600 text-lg mb-8">Aplikasi kami dirancang untuk memudahkan pengelolaan informasi siswa secara profesional dan efisien.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
        <div class="bg-blue-50 p-6 rounded-xl shadow">
          <h4 class="text-xl font-semibold text-blue-700 mb-2">Mudah Digunakan</h4>
          <p class="text-gray-600">Antarmuka sederhana dan intuitif memudahkan siapa saja untuk mengakses.</p>
        </div>
        <div class="bg-purple-50 p-6 rounded-xl shadow">
          <h4 class="text-xl font-semibold text-purple-700 mb-2">Fitur Lengkap</h4>
          <p class="text-gray-600">Kelola data siswa, peran pengguna, dan banyak lagi dalam satu platform.</p>
        </div>
        <div class="bg-blue-100 p-6 rounded-xl shadow">
          <h4 class="text-xl font-semibold text-blue-800 mb-2">Aman & Terpercaya</h4>
          <p class="text-gray-600">Data tersimpan dengan aman dan hanya bisa diakses oleh yang berwenang.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 bg-gradient-to-r from-blue-500 to-purple-500 text-white text-center">
    <h3 class="text-3xl font-bold mb-4">Siap untuk mulai?</h3>
    <p class="mb-6 text-lg">Hubungi kami hari ini dan dapatkan solusi terbaik untuk sekolah Anda.</p>
    <a href="#kontak" class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl shadow hover:bg-gray-100 transition">
      Kontak Sekarang
    </a>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h3>
      <p class="text-gray-600 mb-6">Email: kontak@aplikasisiswa.com | Telp: +62 812-3456-7890</p>
      <a href="mailto:kontak@aplikasisiswa.com" class="text-blue-600 underline hover:text-blue-800">Kirim Email</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t mt-12 py-6">
    <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500">
      &copy; 2025 Aplikasi Siswa. Semua hak dilindungi.
    </div>
  </footer>

</body>
</html>