<div class="bg-slate-300 mt-5 ml-5 mr-5 rounded-md p-3">
    <h1 class="mt-5">
        <center>TAMBAH GAMBAR</center>
    </h1>
    <?php echo form_open_multipart('Property/save_menu'); ?>
    <div class="sm:flex mt-5 ">
        <div class="">
            <label>Nama</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Nama" placeholder="Masukan Nama">
        </div>
        <div class="">
            <label>Judul</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Judul" placeholder="Masukan Judul">
        </div>
    </div>

    <div class="sm:flex mt-5 ">
        <div class="">
            <label>Link</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Link" placeholder="Masukan Link">
        </div>
    </div>
    <div class="mt-5">
        <div class="">
            <label>Deskripsi</label>
            <input class="py-1 mt-1 w-full px-3 rounded-md" type="text" name="Deskripsi"
                placeholder="Masukan Deskripsi">
        </div>
        <label>Gambar</label>
        <div class="">
            <input class="w-full mt-1 rounded-md " type="file" name="Gambar">
        </div>
    </div>
    <button class="bg-blue-500 mt-5 font-semibold text-white hover:bg-blue-700 py-1 rounded-sm w-full shadow-md border"
        type="submit">Submit</button>
    <?php echo form_close(); ?>
</div>
<script src="<?= base_url()?>assets/js/script.js"></script>

</body>

</html>