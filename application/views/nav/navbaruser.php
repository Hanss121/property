<!DOCTYPE html>
<html>

<head>
    <title>Property Pratama Hill</title>
    <script src="<?= base_url()?>assets/jquery/jquery.js"></script>
    <link href="<?= base_url() ?>/assets/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>assets/fontawesome/css/all.min.css">

</head>

<body>
    <nav class=" sm:mt-5 px-5  w-full sm:w-full z-10 sm:px-5 sm:-ml-0">
        <div class="sm:flex justify-around border rounded-md shadow-md  bg-white text-dark">
            <div class="flex justify-between">
                <img class="w-[140px] ml-5 h-[50px] mt-2 mb-2" src="<?= base_url() ?>/assets/gambar/logo.png"
                    alt="logo">
                <div class="flex items-center relative px-4 sm:hidden">
                    <button class="" id="tombolMenu" name="tombolMenu" type="button">
                        <span class="tombol-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="tombol-line"></span>
                        <span class="tombol-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                </div>
            </div>
            <div class="sm:flex  text-xl">
                <ul class="sm:flex  sm:rounded-none sm:shadow-none rounded-md shadow-md hidden  ml-2 mr-2 mb-2;"
                    id="hilang" nama="hilang">
                    <li class="text-center sm:p-4 p-1 hover:bg-primary"><a class="hover:text-white"
                            href="<?php echo site_url('User');?>">BERANDA</a>
                    </li>
                    <li class="text-center sm:p-4 p-1 hover:bg-primary"><a class="hover:text-white"
                            href="<?php echo site_url('User/profile');?>">PROFILE</a>
                    </li>

                    <li class="text-center sm:p-4 p-1 hover:bg-primary"><a class="hover:text-white"
                            href="#kontak">KONTAK</a>
                    </li>
                    <div class="text-center sm:p-4 p-1 rounded-md sm:hover:bg-yellow-500 hover:bg-primary">
                        <div class="dropdown">
                            <?php if ($this->session->userdata('Email')): ?>
                            <button class="dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i> <?php echo $this->session->userdata('Email'); ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('Auth/logout');?>">
                                    <i class="fas fa-sign-out-alt"></i> LOGOUT
                                </a>
                            </div>
                            <?php else: ?>
                            <a class=" dropdown-toggle" href="<?php echo site_url('Auth');?>">
                                LOGIN
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>