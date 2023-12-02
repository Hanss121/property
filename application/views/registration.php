<main role="main">

    <body>
        <div class="container mx-auto mb-10">
            <div class="w-1/2 mx-auto border mt-5 border-primary rounded rounded-2 ">
                <form class="ml-5 mr-5 items-center mt-3 w-75" action="<?php echo site_url('Auth/save');?>"
                    method="post">
                    <div>
                        <h1 class="text-center mb-5">Register</h1>
                    </div>
                    <div class="">
                        <div class="m-auto ">
                            <label>Full Name</label>
                            <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="text" id="Nama"
                                name="Nama" placeholder="Enter your name ">
                        </div>
                        <div class=" m-auto">
                            <label>Email</label>
                            <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="email" id="Email"
                                name="Email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class=" ">
                        <div class="m-auto ">
                            <label>Password</label>
                            <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="password"
                                id="Password" name="Password" placeholder="Enter Your Password">
                        </div>
                        <div class="m-auto ">
                            <label>Repeat Password</label>
                            <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="password"
                                id="password1" name="password1" placeholder="Enter Repeat Password">
                        </div>
                    </div>
                    <input type="hidden" name="IsActive" value="2">
                    <button class="w-full m-auto bg-blue-500 py-2 text-white rounded-md mt-5"
                        type="submit">Submit</button>
                    <div class="mb-5 mt-2 text-center">
                        <a href="#">Forget Password..?</a>
                        <br>
                        <a href="<?php echo site_url('Auth')?>">Sudah Punya akun/login</a>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>