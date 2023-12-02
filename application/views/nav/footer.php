<!-- Container for demo purpose -->
<div id="kontak" class="w-full p-3 bg-dark">
    <h1 class="bg-blue-600 py-2 text-center text-white sm:text-[50px] mb-5 w-full">LOKASI PERUMAHAN KAMI</h1>
    <div class="sm:flex">
        <div class="w-full p-1">
            <iframe class="w-full h-[500px] rounded-md"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.788897606452!2d110.46802017412585!3d-7.034080468914364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d91fb9fc899%3A0xa9195f29992003!2sCluster%20Pratama%20Hill%20Tulus%20Harapan!5e0!3m2!1sid!2sid!4v1693798975026!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=" text-white w-full p-1 rounded-md h-[500px]">
            <h1 class="text-center mb-4">
                KONTAK KAMI
            </h1>
            <div class="px-5">
                <h1>NAMA LENGKAP</h1>
                <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="text"
                    placeholder="MASUKAN NAMA ANDA">
            </div>
            <div class="px-5 mt-3">
                <h1>EMAIL</h1>
                <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="Email"
                    placeholder="MASUKAN EMAIL ANDA">
            </div>
            <div class="px-5 mt-3">
                <h1>KRITIK DAN SARAN</h1>
                <textarea class="border mt-2 text-black px-5 rounded-md w-full " type="text" name="pesan"
                    placeholder="MASUKAN PESAN DAN KRITIK ANDA" id="kritik" cols="30" rows="5"></textarea>
            </div>
            <a href="<?php echo site_url('');?>">
                <button class="mt-2 w-full py-2 hover:bg-blue-700 bg-blue-500">SUBMIT</button>
            </a>
            <div class="text-center mt-5  text-xs sm:text-lg flex justify-evenly ">
                <span class="px-1 ">
                    <i class="fa-solid fa-phone sm:fa-2xl fa-lg"></i>
                    <p>Pratama hill</p>
                    <p class="text-[10px] sm:text-lg">+62 857-4587-9623</p>
                </span>
                <span class="px-1">
                    <i class="fa-brands fa-instagram sm:fa-2xl fa-lg"></i>
                    <p class="mt-3">official_pratama_hill</p>
                </span>
                <span class="px-1">
                    <i class="fa-brands fa-facebook sm:fa-2xl fa-lg"></i>
                    <p class="mt-3">herry house property</p>
                </span>

            </div>
        </div>
    </div>
</div>

</div>
<footer>
    <div class="bg-dark mt-10 text-center text-white py-5 px-5">Copyright © 2023 Pratama Hill Team</div>
</footer>

<script src="<?= base_url()?>assets/js/script.js"></script>
</body>

</html>