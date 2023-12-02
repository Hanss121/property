<div class="mt-4 ml-4 mr-4 w-auto">

    <h1 class="bg-blue-600 py-2 text-center text-white mb-5 w-full sm:text-[40px]">GAMBAR RUMAH DALAM</h1>
    <a class="bg-lime-500 mb-3 text-white  rounded-md border shadow-md py-1 px-5 hover:bg-lime-700"
        href="<?php echo site_url('Property/add_new_rumah_dalam'); ?>">Tambah
        Gambar</a>
    <?php foreach ($content as $Rumah_dalam) { ?>
    <div class="mt-5">
        <img class=" mt-2    rounded-md mb-2" src="<?= base_url() ?>/assets/gambar/<?php echo $Rumah_dalam->Gambar; ?>"
            alt="gambar rumah">
        <div class="mb-5">
            <a class="bg-blue-400 text-white rounded-md shadow-md hover:bg-blue-600 py-1 px-3"
                href="<?php echo site_url('Property/get_edit_content/'.$Rumah_dalam->no); ?>"><i
                    class="fa-solid fa-pen-to-square text-white"></i> Edit</a>
            <a class="bg-red-400 text-white ml-3 rounded-md shadow-md hover:bg-red-600 py-1 px-3" href=""><i
                    class="fa-solid fa-trash"></i> Hapus</a>
        </div>
    </div>
    <?php } ?>
</div>
<footer>
    <div class="bg-dark mt-10 text-center text-white py-5 px-5">Copyright © 2023 Pratama Hill Team</div>
</footer>

<script src="<?= base_url()?>assets/js/script.js"></script>
</body>

</html>