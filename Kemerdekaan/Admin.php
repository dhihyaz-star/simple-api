<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Galeri 17 Agustus</title>
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
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
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
                    <h1 class="text-lg font-semibold text-gray-900">17 Agustus</h1>
                </div>
                <button class="flex items-center space-x-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                    <span class="text-sm text-gray-600">Dashboard Pengunjung</span>
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Sidebar -->
            <div class="w-full lg:w-80">
                <!-- Independence Day Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Panel Admin</h2>
                    <div class="space-y-4">
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-lg">
                            <p class="text-sm text-gray-700 mb-2">Kelola galeri kemerdekaan, upload foto, dan moderasi konten</p>
                            <div class="grid grid-cols-3 gap-2 mt-3">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-blue-600">128</div>
                                    <div class="text-xs text-gray-500">Total Foto</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-green-600">14</div>
                                    <div class="text-xs text-gray-500">Disetujui</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-orange-600">6</div>
                                    <div class="text-xs text-gray-500">Pending</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Menu -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">MENU ADMIN</h3>
                    <nav class="space-y-2">
                        <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Kelola Galeri</span>
                        </a>
                        <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-gray-700 hover:text-white rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span>Upload Foto</span>
                        </a>
                        <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-gray-700 hover:text-white rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Moderasi</span>
                        </a>
                        <a href="#" class="sidebar-item flex items-center space-x-3 px-3 py-2 text-sm font-medium text-gray-700 hover:text-white rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Pengguna</span>
                        </a>
                    </nav>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 italic">Mode Administrator — Kelola konten galeri kemerdekaan dengan mudah.</p>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Hero Section -->
                <div class="hero-section rounded-xl p-8 mb-6 text-white">
                    <div class="animate-fade-up">
                        <h1 class="text-3xl font-bold mb-3">Kelola Galeri 17 Agustus</h1>
                        <p class="text-red-100 mb-6">Kelola konten galeri kemerdekaan, upload foto baru, dan moderasi konten dari pengguna.</p>
                        
                        <div class="flex flex-wrap gap-3">
                            <button class="flex items-center space-x-2 bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-lg transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <span class="text-sm font-medium">Upload Foto</span>
                            </button>
                            <button class="flex items-center space-x-2 bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-lg transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium">Setujui Semua</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Section -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-semibold text-gray-900">Dashboard Pengunjung</h2>
                        
                        <!-- Tab Navigation -->
                        <div class="flex space-x-1 bg-gray-100 rounded-lg p-1">
                            <button id="tab-terbaru" class="px-4 py-2 text-sm font-medium rounded-md transition-all tab-active">Terbaru</button>
                            <button id="tab-populer" class="px-4 py-2 text-sm font-medium rounded-md transition-all tab-inactive">Populer</button>
                            <button id="tab-dekat" class="px-4 py-2 text-sm font-medium rounded-md transition-all tab-inactive">Dekat Saya</button>
                        </div>
                    </div>

                    <!-- Gallery Grid -->
                    <div id="gallery-content" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Gallery Card 1 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9a44808f-944d-488b-9ff9-e5f3deca8075.png" alt="Indonesian flag raising ceremony with uniformed officials and community members gathered in a formal outdoor setting during Independence Day celebration" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold text-gray-900">Pengibaran Bendera</h3>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Disetujui</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Upacara di halaman kota dengan peserta yang mengikuti formasi.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>17 Agu 2023</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Card 2 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/52bc08c1-3619-4322-8117-bdeb2e770e18.png" alt="Traditional Indonesian children playing congklak game on wooden board outdoors with bright natural lighting and village atmosphere" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold text-gray-900">Balap Karung</h3>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Pending</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Anak-anak sangat geli pertombahan tradisional.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>16 Agu 2023</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-green-600 hover:text-green-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Card 3 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d87c1bce-4d08-40ea-bf1c-8af0e53e663e.png" alt="Colorful Indonesian Independence Day parade with people in traditional costumes, red and white decorations, and festive carnival atmosphere in urban street setting" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold text-gray-900">Karnaval RT</h3>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Disetujui</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Anak-anak kostum bertema pertombahan.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>15 Agu 2023</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Card 4 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7a9bede4-4a4a-4be8-ac3a-3c01e01f1861.png" alt="Indonesian flag pole raising ceremony in village square with traditional houses and community members wearing white shirts and dark pants in formal Independence Day event" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">Kampung Merah Putih</h3>
                                <p class="text-sm text-gray-600 mb-3">Gang dihias merah-putih dan lentera.</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>5 jam yang lalu</span>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Card 5 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/98f3ad28-1b72-43af-8956-3b94fc997ee5.png" alt="Traditional Indonesian crackers and rice cake eating competition with participants seated at long table outdoors under trees with community watching and cheering" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">Makan Kerupuk</h3>
                                <p class="text-sm text-gray-600 mb-3">Perlombaan keras tarpit dengan hadiah.</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>6 jam yang lalu</span>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Card 6 -->
                        <div class="gallery-card bg-white border border-gray-200 shadow-sm">
                            <div class="aspect-w-16 aspect-h-12">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2643c795-0fbe-479d-85d6-d08a4c5211fc.png" alt="Indonesian women in hijabs working together in outdoor community cleaning activity during Independence Day preparation with brooms and cleaning tools in residential area" class="w-full h-48 object-cover" />
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">Kerja Bakti</h3>
                                <p class="text-sm text-gray-600 mb-3">Membersih bersama-sama warga bersih-bersih.</p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>7 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-8">
                        <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            Muat Lebih Banyak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Floating Action Button -->
    <div class="fixed bottom-6 right-6">
        <button class="bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-full shadow-lg transition-all hover:shadow-xl">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
            </svg>
        </button>
    </div>

    <script>
        // Tab functionality
        const tabs = {
            'tab-terbaru': 'Terbaru',
            'tab-populer': 'Populer', 
            'tab-dekat': 'Dekat Saya'
        };

        Object.keys(tabs).forEach(tabId => {
            document.getElementById(tabId).addEventListener('click', function() {
                // Remove active class from all tabs
                Object.keys(tabs).forEach(id => {
                    const tab = document.getElementById(id);
                    tab.classList.remove('tab-active');
                    tab.classList.add('tab-inactive');
                });
                
                // Add active class to clicked tab
                this.classList.remove('tab-inactive');
                this.classList.add('tab-active');
                
                // Update content based on tab
                updateGalleryContent(tabs[tabId]);
            });
        });

        function updateGalleryContent(activeTab) {
            const galleryContent = document.getElementById('gallery-content');
            
            // Add loading animation
            galleryContent.style.opacity = '0.5';
            
            setTimeout(() => {
                // Simulate content change
                const cards = galleryContent.querySelectorAll('.gallery-card');
                cards.forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.1}s`;
                    card.classList.add('animate-fade-up');
                });
                
                galleryContent.style.opacity = '1';
                
                // Remove animation classes after animation completes
                setTimeout(() => {
                    cards.forEach(card => {
                        card.classList.remove('animate-fade-up');
                    });
                }, 600);
            }, 200);
        }

        // Sidebar navigation functionality
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active state from all items
                document.querySelectorAll('.sidebar-item').forEach(link => {
                    link.classList.remove('bg-red-600', 'text-white');
                    link.classList.add('text-gray-700');
                });
                
                // Add active state to clicked item
                this.classList.add('bg-red-600', 'text-white');
                this.classList.remove('text-gray-700');
                
                // Update gallery based on category
                updateGalleryContent(this.textContent.trim());
            });
        });

        // Gallery card hover effects
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Floating action button functionality
        document.querySelector('.fixed button').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize animations on page load
        window.addEventListener('load', function() {
            const cards = document.querySelectorAll('.gallery-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('animate-fade-up');
                }, index * 100);
            });
        });
    </script>
</body>
</html>

