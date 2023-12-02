<div class="mt-4 ml-4 mr-4 w-auto">

    <h1 class="bg-blue-600 py-2 text-center text-white mb-5 w-full sm:text-[40px]">GAMBAR PERUMAHAN</h1>

    <?php foreach ($content as $Rumah) { ?>
    <div class="mt-5">
        <img class=" mt-2    rounded-md mb-2" src="<?= base_url() ?>/assets/gambar/<?php echo $Rumah->Gambar; ?>"
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