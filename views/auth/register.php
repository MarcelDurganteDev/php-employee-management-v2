<?php
    require __DIR__."/../layout/includes/page_top.php";
?>
    <div id="main">
        <h1 class="center">Bienvenido al sitio</h1>

    </div>

    <div class="container mb-4">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 p-5">
                        <div class="card bg-dark text-white mb-5" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <img src="./assets/img/29744343_415615545548920_7222466440612695631_o.png" alt="">
                                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                    <form action="<?= Url::asset('/auth/store');?>" method="post">
                                        <div class="form-outline form-white mb-4">
                                            <input name="name" placeholder="Name" type="text" id="typeName" class="form-control form-control-lg required">
                                            <label class="form-label" for="typeName">Name</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input name="email" placeholder="E-mail" type="email" id="typeEmailX" class="form-control form-control-lg required">
                                            <label class="form-label" for="typeEmailX">E-mail</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input name="password" placeholder="Password" type="password" id="typePasswordX" class="form-control form-control-lg required">
                                            <label class="form-label" for="typePasswordX">Password</label>
                                            <br>
                                            <label class="form-label" for="typePasswordX"><?= isset($_GET["InvalidCredential"]) ? "Invalid Email or Password" : "" ?></label>
                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                                    </form>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-0">Do you have an account? <a href="<?= Url::asset('/auth/login');?>" class="text-white-50 fw-bold">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
    require __DIR__."/../layout/includes/page_bottom.php";
