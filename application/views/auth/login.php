<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">

                <!-- navbar -->
                <nav class="navbar navbar-expand-md container">
                    <a class="navbar-brand" href="#"><img src="assets\img\logo.png" alt="" width="70px"></a>

                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-30">
                                <a class="nav-link" href="#"><button type="button" class="btn btn-primary contact" style="background-color: #0F1F45 ;">Masuk</button></a>
                            </li>
                        </ul>
                </nav>

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block"><img src="assets\img\kantor.jpg"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    Hasilkan uang sebagai Mitra Padipos
                                </h1>
                                <h6 class="h4 text-black-1000 mb-4">
                                    Daftarkan diri anda sekarang
                                </h6>
                            </div>
                            <?= $this->session->flashdata('message');  ?>
                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <div class="text-center">Belum punya akun?
                                <a class="small" href="<?= base_url('auth/registration'); ?> ">daftar disini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>