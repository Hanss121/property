<div class="bg-slate-300 mt-5 ml-5 mr-5 rounded-md p-3">
    <div class="bg-white w-full mb-5 text-white h-[50px]">
        ghajfgj
    </div>
    <h1 class="mt-5 bg-blue-400 sm:py-3 sm:font-bold text-white text-[50px]">
        <center>EDIT CONTENT</center>
    </h1>
    <?php echo form_open_multipart('Property/update_content'); ?>
    <div class="sm:flex mt-5">
        <div class="sm:w-full sm:mb-10">
            <label>Nama</label>
            <input class="py-1 mt-1 w-full px-3  rounded-md" type="text" name="Nama" value="<?php echo $Nama; ?>">
        </div>
        <div class="hidden">
            <label>Kategori</label>
            <select class="form-control" name="Kategori">
                <option value="RM1-RUMAH" <?php if ($Kategori == 'RM1-RUMAH') echo 'selected'; ?>>Gambar rumah depan
                </option>
                <option value="RM2-LAYOUT" <?php if ($Kategori == 'RM2-LAYOUT') echo 'selected'; ?>>Gambar layout
                </option>
                <option value="RM3-DALAM" <?php if ($Kategori == 'RM3-DALAM') echo 'selected'; ?>>Gambar Rumah Dalam
                </option>
                <option value="RM4-SITEPLANE" <?php if ($Kategori == 'RM4-SITEPLANE') echo 'selected'; ?>> Gambar
                    Siteplane
                </option>
            </select>
        </div>
    </div>
    <div>
        <label>Gambar</label>
        <div class="d-flex">
            <?php if (!empty($Gambar)) : ?>
            <img src="<?php echo base_url('assets/gambar/' . $Gambar); ?>" class="h-25 w-25" />
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
    class="bg-blue-500 mt-5 sm:text-[40px] mb-10 font-semibold text-white hover:bg-blue-700 py-1 rounded-sm w-full shadow-md border"
    type="submit">Submit</button>
<?php echo form_close(); ?>
</div>
<script src="<?= base_url() ?>assets/js/script.js"></script>