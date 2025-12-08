<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <h1 class="text-4xl font-bold text-gray-900">Blog</h1>
            <p class="mt-2 text-gray-600">Temukan artikel dan insight menarik dari kami</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Featured Post -->
        <div class="mb-12">
            <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-black opacity-20"></div>
                <div class="relative p-8 md:p-12 text-white">
                    <span
                        class="inline-block px-3 py-1 bg-yellow-400 text-gray-900 text-sm font-semibold rounded-full mb-4">Featured</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Membangun Aplikasi Modern dengan Framework Terkini
                    </h2>
                    <p class="text-lg mb-6 text-gray-100">Pelajari cara membangun aplikasi web modern yang responsive
                        dan performant menggunakan teknologi terbaru.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-purple-600 font-bold">JD</span>
                            </div>
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-gray-200">15 November 2024</p>
                            </div>
                        </div>
                        <button
                            class="bg-white text-purple-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Baca
                            Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-blue-100 text-blue-600 text-xs font-semibold rounded-full mb-3">Teknologi</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-blue-600 cursor-pointer">Tips Optimasi
                        Performa Website</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Temukan berbagai teknik untuk meningkatkan kecepatan
                        loading dan performa website Anda.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>10 Nov 2024</span>
                        <span>5 min read</span>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-green-100 text-green-600 text-xs font-semibold rounded-full mb-3">Tutorial</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-green-600 cursor-pointer">Panduan Lengkap
                        CSS Grid Layout</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Pelajari cara menggunakan CSS Grid untuk membuat layout
                        yang kompleks dengan mudah.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>8 Nov 2024</span>
                        <span>8 min read</span>
                    </div>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-purple-100 text-purple-600 text-xs font-semibold rounded-full mb-3">Design</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-purple-600 cursor-pointer">Prinsip UI/UX
                        Design yang Baik</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Memahami prinsip-prinsip dasar dalam menciptakan user
                        interface yang intuitif dan menarik.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>5 Nov 2024</span>
                        <span>6 min read</span>
                    </div>
                </div>
            </article>

            <!-- Blog Post 4 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-red-400 to-red-600"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-red-100 text-red-600 text-xs font-semibold rounded-full mb-3">JavaScript</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-red-600 cursor-pointer">Async/Await di
                        JavaScript</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Menguasai pemrograman asynchronous dengan async/await
                        untuk kode yang lebih clean.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>3 Nov 2024</span>
                        <span>7 min read</span>
                    </div>
                </div>
            </article>

            <!-- Blog Post 5 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full mb-3">Tips
                        & Tricks</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-orange-600 cursor-pointer">10 VS Code
                        Extensions Terbaik</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Extension-extension yang wajib dimiliki untuk
                        meningkatkan produktivitas coding Anda.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>1 Nov 2024</span>
                        <span>4 min read</span>
                    </div>
                </div>
            </article>

            <!-- Blog Post 6 -->
            <article
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-pink-600"></div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-pink-100 text-pink-600 text-xs font-semibold rounded-full mb-3">Backend</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-pink-600 cursor-pointer">RESTful API Best
                        Practices</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">Panduan membuat RESTful API yang scalable dan mudah
                        di-maintain untuk aplikasi Anda.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>28 Okt 2024</span>
                        <span>9 min read</span>
                    </div>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <button
                    class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">Previous</button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">1</button>
                <button
                    class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">2</button>
                <button
                    class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">3</button>
                <button
                    class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">Next</button>
            </nav>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center">
            <p>&copy; 2024 Blog. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
