<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri 17 Agustus - Hari Kemerdekaan Indonesia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .sidebar-item {
      transition: all 0.3s ease;
    }

    .sidebar-item:hover {
      background: linear-gradient(to right, #dc2626, #ef4444);
      transform: translateX(5px);
    }

    .gallery-card {
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
    }

    .gallery-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .hero-section {
      background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
    }

    .progress-bar {
      background: linear-gradient(to right, #dc2626, #ef4444);
      height: 4px;
      border-radius: 2px;
    }

    .tab-active {
      background: linear-gradient(to right, #dc2626, #ef4444);
      color: white;
    }

    .tab-inactive {
      background: transparent;
      color: #6b7280;
    }

    .tab-inactive:hover {
      background: #f3f4f6;
      color: #374151;
    }

    .floating-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.95);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-up {
      animation: fadeInUp 0.6s ease-out;
    }
  </style>
</head>

<body class="bg-gray-50 font-sans">
  <!-- Header -->
  <header class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center space-x-3">
          <div class="w-4 h-4 bg-red-600 rounded"></div>
          <h1 class="text-lg font-semibold text-gray-900">17 Agustus Desa Teluk Sarikat</h1>
        </div>
        <button onclick="window.location.href='index.php'"
          class="flex items-center space-x-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
          <span class="text-sm text-gray-600">Dashboard Pengunjung</span>
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex flex-col lg:flex-row gap-6">
      <!-- Sidebar -->
      <div class="w-full lg:w-80">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
          <h2 class="text-lg font-semibold text-gray-900 mb-4">Hari Kemerdekaan</h2>
          <div class="space-y-4">
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg">
              <p class="text-sm text-gray-700 mb-2">Selamat datang di galeri 17 Agustus, kumpulan foto upacara dan aktivitas kemerdekaan</p>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
          <nav class="space-y-2">
            <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg" data-filter="lomba">
              <span>#Lomba</span>
            </a>
            <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-gray-700 hover:text-white rounded-lg" data-filter="jalan">
              <span>#Jalan Santai</span>
            </a>
            <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-gray-700 hover:text-white rounded-lg" data-filter="panitia">
              <span>#Panitia</span>
            </a>
          </nav>
          <div class="mt-6 pt-6 border-t border-gray-200">
            <p class="text-sm text-gray-600 italic">Pengunjung kali ini — Terima kasih sudah berkunjung ke website galeri kami.</p>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="flex-1">
        <!-- Hero Section -->
        <div class="hero-section rounded-xl p-8 mb-6 text-white">
          <div class="animate-fade-up">
            <h1 class="text-3xl font-bold mb-3">Galeri 17 Agustus</h1>
            <p class="text-red-100 mb-6">Dokumentasi momen kemerdekaan dari upacara, bendera, dan berbagai kegiatan warga.</p>
          </div>
        </div>

        <!-- Dashboard Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
          <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-900">Dashboard Pengunjung</h2>
          </div>

          <!-- Gallery Card dengan Video -->
<div class="gallery-card bg-white border border-gray-200 shadow-sm" data-category="lomba">
  <div class="aspect-w-16 aspect-h-12">
    <video class="w-full h-48 object-cover" controls>
      <source src="video/balap-karung.mp4" type="video/mp4">
      Browser kamu tidak mendukung tag video.
    </video>
  </div>
  <div class="p-4">
    <h3 class="font-semibold text-gray-900 mb-2">Balap Karung</h3>
    <p class="text-sm text-gray-600 mb-3">Anak-anak ikut lomba karung dengan semangat.</p>
  </div>
</div>

            <div class="gallery-card bg-white border border-gray-200 shadow-sm" data-category="jalan">
              <div class="aspect-w-16 aspect-h-12">
                <img src="https://placehold.co/400x300" class="w-full h-48 object-cover" />
              </div>
              <div class="p-4">
                <h3 class="font-semibold text-gray-900 mb-2">Jalan Santai</h3>
                <p class="text-sm text-gray-600 mb-3">Warga desa mengikuti jalan santai bersama.</p>
              </div>
            </div>

            <div class="gallery-card bg-white border border-gray-200 shadow-sm" data-category="panitia">
              <div class="aspect-w-16 aspect-h-12">
                <img src="https://placehold.co/400x300" class="w-full h-48 object-cover" />
              </div>
              <div class="p-4">
                <h3 class="font-semibold text-gray-900 mb-2">Panitia 17 Agustus</h3>
                <p class="text-sm text-gray-600 mb-3">Kerja keras panitia demi kelancaran acara.</p>
              </div>
            </div>
          </div>

          <!-- Load More -->
          <div class="text-center mt-8">
            <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
              Muat Lebih Banyak
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Floating Action Button -->
  <div class="fixed bottom-6 right-6">
    <button class="bg-red-600 hover:bg-red-700 text-white p-4 rounded-full shadow-lg transition-all hover:shadow-xl">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
    </button>
  </div>

  <script>
    // Sidebar filter
    document.querySelectorAll('.sidebar-item').forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelectorAll('.sidebar-item').forEach(link => {
          link.classList.remove('bg-red-600', 'text-white');
          link.classList.add('text-gray-700');
        });

        this.classList.add('bg-red-600', 'text-white');
        this.classList.remove('text-gray-700');

        const filter = this.getAttribute('data-filter');
        const cards = document.querySelectorAll('.gallery-card');

        cards.forEach(card => {
          card.style.display = (card.getAttribute('data-category') === filter) ? 'block' : 'none';
        });
      });
    });

    // Floating button scroll
    document.querySelector('.fixed button').addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>
</body>

</html>
