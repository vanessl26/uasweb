<main id="main">

    <!-- ======= Login ======= -->
    <center>
        <section id="login" style="margin-top: 175px; margin-bottom: 150px" class="contact">

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">
                    <h4>Login into your account</h4>


                    <?php if (!empty($_GET['error'])) { ?>

                        <a style="color:red; margin-top:20px;">Wrong combination of email and password</a>

                    <?php unset($_GET['error']);
                    } ?>

                    <div class="col-lg-12 mt-5 mt-lg-0" style="align-items: center;">
                        <form action="proses_login.php" method="post" role="form" style="width: 30%">
                            <div class="form-group mt-3">
                                <input type="text" class="input textEmail" name="email" id="name" placeholder="Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="input textPass" name="password" id="password" rows="5" placeholder="Password" required></input>
                            </div>
                            <br>
                            <div class="text-center"><button class="button login" type="submit">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </center>
    <!-- End Login -->

</main><!-- End main -->