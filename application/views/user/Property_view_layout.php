<div class="mt-4 ml-4 mr-4 w-auto">

    <h1 class="bg-blue-600 py-2 text-center sm:text-[40px] text-white mb-5 w-full">GAMBAR LAYOUT</h1>

    <?php foreach ($content as $Layout) { ?>
    <div class="mt-5">
        <div>
            <h1 class="text-center py-2 px-3 bg-blue-600 text-white font-bold"><?php echo $Layout->Nama; ?></h1>
        </div>
        <img class=" mt-2    rounded-md mb-2" src="<?= base_url() ?>/assets/gambar/<?php echo $Layout->Gambar; ?>"
            alt="gambar rumah">


    </div>
    <?php } ?>
</div>
<footer>
    <div class="bg-dark mt-10 text-center text-white py-5 px-5">Copyright © 2023 Pratama Hill Team</div>
</footer>

<script src="<?= base_url()?>assets/js/script.js"></script>
</body>

</html>