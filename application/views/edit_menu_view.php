<div class="bg-slate-300 mt-5 mb-10 ml-5 mr-5 rounded-md p-3">
    <div class="bg-white w-full mb-5 text-white h-[50px]">
        ghajfgj
    </div>
    <h1 class="mt-5 bg-blue-400 sm:py-3 sm:font-bold text-[50px]">
        <center>EDIT MENU</center>
    </h1>
    <?php echo form_open_multipart('Property/update_menu'); ?>
    <div class="sm:flex mt-5">
        <div class="hidden">
            <label>Nama</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Nama" value="<?php echo $Nama; ?>">
        </div>
        <div hidden>
            <label>Judul</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Judul" value="<?php echo $Judul; ?>">
        </div>
    </div>

    <div class="mt-5">
        <div hidden>
            <label>Deskripsi</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Deskripsi"
                value="<?php echo $Deskripsi; ?>">
        </div>
        <div hidden>
            <label>Link</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Link" value="<?php echo $Link; ?>">
        </div>

        <div>
            <label>Gambar</label>
            <div class="d-flex">
                <?php if (!empty($Gambar)) : ?>
                <img src="<?php echo base_url('assets/gambar/' . $Gambar); ?>" class="w-1/2 m-auto" />
                <?php endif; ?>
                <input class="ml-3 mt-3" type="file" name="Gambar">
                <?php if (!empty($Gambar)) : ?>
                <input type="hidden" name="oldGambar" value="<?php echo $Gambar; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <input type="hidden" name="no" value="<?php echo $no; ?>">
    <button
        class="bg-blue-500 mt-5 sm:text-[40px] font-semibold text-white hover:bg-blue-700 py-1 rounded-sm w-full shadow-md border"
        type="submit">Submit</button>
    <?php echo form_close(); ?>
</div>
<script src="<?= base_url() ?>assets/js/script.js"></script>