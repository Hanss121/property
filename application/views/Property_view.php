<header class="ml-4 sm:mt-3 mr-4 w-auto -z-10 ">
    <div style="background-image: url('https://source.unsplash.com/1000x600?home')"
        class="w-full h-[300px] flex items-center ">
        <a href="https://wa.me/6285745879623"
            class="mx-auto bg-yellow-500 px-10 py-5 text-white font-bold rounded-md hover:bg-yellow-700">Hubungi
            sekarang..!!!</a>
    </div>
</header>
<div class="mt-4 ml-4 mr-4 w-auto">
    <div class="">
        <img class="w-full mt-2 rounded-md mb-2" src="<?= base_url() ?>/assets/gambar/IMG_20230825_145520.jpg" alt="">
    </div>
</div>
<div class="mt-4 ml-4 mr-4 w-auto">
    <h1 class="bg-blue-600 py-2 sm:py-5 text-center text-white sm:text-[40px] mb-5 w-full">DAFTAR MENU</h1>
    <a hidden class="bg-lime-500 mb-3 text-white  rounded-md border shadow-md py-1 px-5 hover:bg-lime-700"
        href="<?php echo site_url('Property/add_new_menu'); ?>">Tambah
        Gambar</a>
    <div class="">
        <?php foreach ($menu as $menuklik) { ?>
        <a class="group" href="<?php echo $menuklik->Link; ?>">
            <h1 class="bg-yellow-300 absolute py-2 sm:text-[60px] sm:rounded-md px-5">
                <?php echo $menuklik->Judul; ?>
            </h1>
            <img class=" mt-2  sm:w-full rounded-md mb-2"
                src="<?= base_url() ?>/assets/gambar/<?php echo $menuklik->Gambar; ?>" alt="gambar rumah">
            <div class=" absolute ml-[80px] -mt-[200px] h-[220px]">
                <h1
                    class="mt-10 opacity-0 group-hover:opacity-100 px-5 sm:text-center sm:ml-[100px] sm:-mt-[50%] py-2 sm:text-[100px] group-hover:bg-white/70">
                    KLIK
                    Selengkapnya..
                </h1>
            </div>
            <div
                class="absolute w-[340px] opacity-100 sm:w-full sm:py-5 group-hover:opacity-100 h-[50px] sm:h-auto sm:mt[500px] rounded-md -mt-[70px]  bg-white text-center text-lg">
                <h1 class="mt-2 mb-10 font-semibold sm:text-[60px] "><?php echo $menuklik->Deskripsi; ?></h1>
            </div>
            <br>
            <div class="mb-5 sm:mt-10">
                <a class="bg-blue-400 text-white rounded-md sm:mt-10 shadow-md hover:bg-blue-600 py-1 px-3"
                    href="<?php echo site_url('Property/get_edit_menu/'.$menuklik->no); ?>"><i
                        class="fa-solid fa-pen-to-square text-white"></i> Edit</a>
                <a hidden class="bg-red-400 text-white ml-3 rounded-md shadow-md hover:bg-red-600 py-1 px-3" href=""><i
                        class="fa-solid fa-trash"></i> Hapus</a>
            </div>
        </a>
        <?php } ?>

    </div>