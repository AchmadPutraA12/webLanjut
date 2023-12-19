<section class="bg-gray-100 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">About Us</h2>
        <p class="text-lg mb-8">Follow us on social media:</p>

        <div class="flex justify-center mb-6">
            <!-- Instagram -->
            <a href="https://www.instagram.com/your_instagram" class="mr-6">
                <img src="/gambar/instagram.png" alt="Instagram" class="w-8 h-8">
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/your_whatsapp_number" class="mr-6">
                <img src="/gambar/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/your_twitter" class="mr-6">
                <img src="/gambar/Twitter.png" alt="Twitter" class="w-8 h-8">
            </a>
        </div>

        <p class="text-lg">Kami percaya bahwa kopi bukan sekadar minuman, tapi sebuah pengalaman. Dengan
            biji-biji terbaik dan proses roasting yang hati-hati, kami memberikan Anda sebuah cangkir kopi
            yang mengajak Anda menjelajahi dunia rasa yang luar biasa.</p>
    </div>
</section>

<footer class="bg-gray-800 py-8 text-white text-center">
    <div class="container mx-auto">
        &copy; 2023 Cafe XYZ. All rights reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="../../node_modules/preline/dist/preline.js"></script>
<script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/compiled/js/app.js') }}"></script>
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/datatables.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
<script>
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        focusAt: 'center',
        breakpoints: {
            768: {
                perView: 1
            }
        }
    }).mount();
</script>
</body>

</html>
