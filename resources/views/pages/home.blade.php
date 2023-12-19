@include('homepage.top')

<section class="bg-cover bg-center h-screen relative flex items-center text-white"
    style="background-image: url('https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8M;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Cafe XYZ</h1>
        <p class="text-lg mb-8">Delightful coffee and cozy atmosphere</p>
        <a href="#"
            class="bg-yellow-500 text-gray-900 hover:bg-yellow-400 px-6 py-3 rounded-full text-lg font-semibold transition duration-300">View
            Menu</a>
    </div>
</section>

<div class="px-10">
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Photo Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery.jpg" alt="Gallery Image 1" class="w-full h-48 object-cover mb-4 rounded">
                </div>
                <!-- Tambahkan lebih banyak gambar galeri di sini -->
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery2.jpg" alt="Galery Image 2" class="w-full h-48 object-cover mb-4 rounded">
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery3.jpg" alt="Galery Image 2" class="w-full h-48 object-cover mb-4 rounded">
                </div>
            </div>
    </section>

    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide"> <!-- Menu Item 7 -->
                    <img src="/gambar/latte.jpg">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 7</h3>
                    <p class="text-gray-700 mb-4">Description.</p>
                    <span class="text-yellow-500 font-bold text-lg">$14.99</span>
                </li>
                <li class="glide__slide"> <!-- Menu Item 8 -->
                    <img src="/gambar/caramel latte.jpg">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 8</h3>
                    <p class="text-gray-700 mb-4">Description.</p>
                    <span class="text-yellow-500 font-bold text-lg">$16.99</span>
                </li>
                <!-- Tambahkan lebih banyak item menu di sini sesuai kebutuhan -->
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Menu</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/paitan.jpeg" alt="Menu Item 1" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 1</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 1.</p>
                    <span class="text-yellow-500 font-bold text-lg">$10.99</span>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/capuchino.jpeg" alt="Menu Item 2" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 2</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 2.</p>
                    <span class="text-yellow-500 font-bold text-lg">$12.99</span>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/expreso.jpeg" alt="Menu Item 3" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 3</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 3.</p>
                    <span class="text-yellow-500 font-bold text-lg">$9.99</span>
                </div>

                <!-- Menu Item 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/kopi.jpeg" alt="Menu Item 4" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 4</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 4.</p>
                    <span class="text-yellow-500 font-bold text-lg">$11.99</span>
                </div>

                <!-- Menu Item 5 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/kopiSusu.jpeg" alt="Menu Item 5" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 5</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 5.</p>
                    <span class="text-yellow-500 font-bold text-lg">$13.99</span>
                </div>

                <!-- Menu Item 6 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="/gambar/toraMoka.jpeg" alt="Menu Item 6" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 6</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 6.</p>
                    <span class="text-yellow-500 font-bold text-lg">$8.99</span>
                </div>
            </div>
        </div>
    </section>
</div>

@include('homepage.footer')
