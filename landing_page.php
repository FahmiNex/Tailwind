<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        /* Optional: Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigasi -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between py-0">
            <a href="" class="w-32">
                <img src="e-commerce.png" alt="Logo" class="transform hover:scale-105 transition-all duration-300">
            </a>
            <div class="space-x-8 font-semibold text-lg">
                <a class="hover:text-indigo-200 transition duration-300" href="">Introduction</a>
                <a class="hover:text-indigo-200 transition duration-300" href="">Product</a>
            </div>
            <button>
                <a href="" class="bg-indigo-600 text-white px-6 py-3 rounded-full shadow-xl hover:bg-indigo-800 transition-all duration-300">
                    Create Account
                </a>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="px-6 container mx-auto flex justify-between items-center my-16 space-x-8">
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h4 class="text-2xl font-semibold text-indigo-600 uppercase tracking-wider mb-4">E-Commerce</h4>
            <h3 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight mb-6 transform transition duration-500 hover:scale-105">
                Selamat Datang Di Toko Kami
            </h3>
            <p class="text-gray-600 text-lg mb-8 md:mb-12">
                Di sini adalah tempat dimana anda bisa mendapatkan barang-barang yang menakjubkan. Apakah anda siap untuk mendapatkan barang-barang itu?
            </p>
        </div>
        <div class="w-full md:w-1/2">
            <img class="w-full h-auto rounded-2xl shadow-xl transform hover:scale-105 transition-all duration-500" src="uhuy.jpg" alt="E-Commerce Image"/>
        </div>
    </section>

    <!-- Footer (Optional) -->
    <footer class="bg-white py-8 mt-12">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2025 E-Commerce. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
