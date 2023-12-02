<body>
    <div class="bg-white w-full text-white">
    </div>
    <div class="w-50 mx-auto border mt-5 sm:mb-10 sm:w-1/2 sm:h-[500px] m-auto border-primary rounded rounded-2 ">
        <form class="ml-5 mr-5 mx-auto mt-[10%] w-75" action="<?php echo site_url('Auth');?>" method="post">
            <div>
                <h1 class="text-center text-white bg-blue-500 rounded-md py-3 sm:text-lg mb-5"><i
                        class="fas fa-lock"></i> Login
                </h1>
                <?php echo $this->session->flashdata('message');?>
                <?php if ($this->session->flashdata('LOGIN')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('LOGIN'); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="m-auto w-[70%]">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="Email" name="Email"
                    placeholder="Enter your Email" value="<?php echo set_value('Email');?>">
                <?php echo form_error('Email','<small class="text-danger px-3">','</small>'); ?>
            </div>
            <div class="m-auto w-[70%]">
                <label><i class="fas fa-key"></i> Password</label>
                <input class="border mt-2 text-black px-5 rounded-md w-full py-1" type="Password" name="Password"
                    placeholder="Enter Your Password">
                <?php echo form_error('Password','<small class="text-danger px-3">','</small>'); ?>
            </div>
            <div class="m-auto w-1/2">
                <button class="w-full m-auto bg-blue-500 py-2 text-white rounded-md mt-5" type="submit"><i
                        class="fas fa-sign-in-alt"></i>
                    Submit</button>
            </div>
            <div class="mb-5 mt-2 text-center">
                <a href="#">Forgot Password..?</a>
                <br>
                <a href="<?php echo site_url('Auth/registration')?>">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</body>

</html>