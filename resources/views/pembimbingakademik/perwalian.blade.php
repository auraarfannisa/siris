<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-gray-800 to-blue-900 text-white font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/6 bg-gradient-to-b from-gray-900 to-gray-800 p-6">
            <div class="text-2xl font-bold mb-8">SIRIS UNDIP</div>
            <nav class="space-y-4">
                <a href="/dashboard" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/perwalian" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-user-friends"></i>
                    <span>Perwalian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-edit"></i>
                    <span>Input Nilai</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-book"></i>
                    <span>Bimbingan & Ujian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-1/3">
                    <input type="text" placeholder="Search..." class="w-full p-2 rounded-full bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none">
                    <i class="fas fa-search absolute top-2 right-4 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user"></i>
                        <span>SUTIKNO</span>
                    </div>
                    <i class="fas fa-cog"></i>
                    <i class="fas fa-bell"></i>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="text-gray-400 mb-6">HOME / <span class="text-green-400">IRS</span></div>
            <!-- Perwalian -->
            <div>
                <h1 class="text-2xl font-bold mb-4">Perwalian</h1>
                <div class="grid grid-cols-3 gap-4 mb-8">
                    <a href="/halamanreview" class="bg-green-500 p-6 rounded-lg relative">
                        <span class="absolute top-2 right-2 text-white"><i class="fas fa-heart"></i></span>
                        <div class="text-white text-lg">IRS</div>
                    </a>
                    <div class="bg-green-500 p-6 rounded-lg relative">
                        <span class="absolute top-2 right-2 text-white"><i class="fas fa-heart"></i></span>
                        <div class="text-white text-lg">KHS</div>
                    </div>
                    <div class="bg-green-500 p-6 rounded-lg relative">
                        <span class="absolute top-2 right-2 text-white"><i class="fas fa-heart"></i></span>
                        <div class="text-white text-lg">Pengajuan Cuti</div>
                    </div>
                    <div class="bg-green-500 p-6 rounded-lg relative">
                        <span class="absolute top-2 right-2 text-white"><i class="fas fa-heart"></i></span>
                        <div class="text-white text-lg">Perpanjangan Masa Studi</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 h-64 overflow-y-auto">
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <div class="flex justify-between items-center mb-4">
                            <button class="bg-gray-800 text-white px-4 py-2 rounded-full">All</button>
                            <button class="bg-gray-800 text-white px-4 py-2 rounded-full">Sort by dates <i class="fas fa-chevron-down"></i></button>
                        </div>
                        <div class="flex flex-col items-center justify-center h-32">
                            <i class="fas fa-tasks text-4xl text-gray-500 mb-2"></i>
                            <div class="text-gray-400">No activities require action</div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <div class="flex justify-between items-center mb-4">
                            <button class="bg-gray-800 text-white px-4 py-2 rounded-full">All</button>
                            <button class="bg-gray-800 text-white px-4 py-2 rounded-full">Sort by dates <i class="fas fa-chevron-down"></i></button>
                        </div>
                        <div class="flex flex-col items-center justify-center h-32">
                            <i class="fas fa-tasks text-4xl text-gray-500 mb-2"></i>
                            <div class="text-gray-400">No activities require action</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>