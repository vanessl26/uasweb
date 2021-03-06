<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngeprint</title>

    <link rel="stylesheet" href="submenustyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="images/logo_landscape.png" alt=""> </a>

        <nav class="navbar">
            <ul>
                <a href="home.html#up">Home</a>
                <a href="home.html#products">Product</a>
                <a href="home.html#testimony">Testimony</a>
                <a href="paperproduct.html#simulate">Simulation</a>
                <a href="home.html#aboutus">About Us</a>
            </ul>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-shopping-cart" id="shop-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a id="forget-btn" style="text-decoration: underline;">click here</a></p>
            <p>don't have an account <a id="regist-btn" style="text-decoration: underline;">create now</a></p>

            <button class=" btn" style="width: 10rem; color:white; background-color: var(--primary);"
                type="button">Login
                In</button>
        </form>

        <form action="" class="regist-form">
            <h3>Register now</h3>
            <input type="name" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">

            <p>have an account? <a id="login-regist-btn">login now</a></p>

            <button class="btn" id="login-regist-btn"
                style="width: 10rem; color:white; background-color: var(--primary);" type="button">Create Account
            </button>
        </form>

        <form action="" class="forget-form">
            <h3>Change Password</h3>
            <input type="name" placeholder="your email" class="box">
            <input type="password" placeholder="your new password" class="box">
            <br>
            <br>
            <button class="btn" id="login-regist-btn"
                style="width: 10rem; color:white; background-color: var(--primary);" type="button">Change Password
            </button>
        </form>


        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-heart"></i>
                <i class="fas fa-trash"></i>
                <img src="images/pdk_kemasan.png" alt="">
                <div class="content">
                    <div class="content-1">
                        <h3>Product Name</h3>
                        <p>Box Packing</p>
                        <p>Duplex</p>
                        <p>Medium</p>
                        <div class="quantity">
                            <ul>
                                <li>-</li>
                                <li class="qty">1</li>
                                <li>+</li>
                            </ul>
                        </div>
                        <span class="price">Rp 20.000</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-heart"></i>
                <i class="fas fa-trash"></i>
                <img src="images/pdk_paper.png" alt="">
                <div class="content">
                    <div class="content-2">
                        <h3>Product Name</h3>
                        <p>Box Packing</p>
                        <p>Duplex</p>
                        <p>Medium</p>
                        <div class="quantity">
                            <ul>
                                <li>-</li>
                                <li class="qty">1</li>
                                <li>+</li>
                            </ul>
                        </div>
                        <span class="price">Rp 20.000</span>
                    </div>
                </div>
            </div>

            <a style="text-decoration: none;" href="checkout.html"><button class="btn"
                    style=" width: 15rem; margin: 3.5vh auto;color:white; background-color: var(--primary);"
                    type="button">Check Out</button></a>
        </div>
    </header>
    <!-- header done----------------------------------------------------------------------------------------------------------- -->

    <div class="pagination">
        <div class="checkout">
            <h1>Pesanan <span>Ngeprint</span> Anda</h1>


            <div class="formbox">
                <h4><b>Informasi Pembeli</b></h4>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Nama Pembeli">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama Pembeli</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Nama Pembeli">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">No. Telp</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="No. Telp">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Jenis Pembayaran</label>
                        <select id="dropdowncheckout" class="form-control">
                            <option selected>Bank Transfer</option>
                            <option>Shopee Pay</option>
                            <option>DANA</option>
                            <option>OVO</option>
                            <option>Gopay</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Pick Up</label>
                        <select id="dropdowncheckout" class="form-control">
                            <option selected>Gojek</option>
                            <option>Grab</option>
                            <option>Ambil Pribadi</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Tanggal Pick Up</label>
                        <input type="date" class="form-control" id="inputEmail4">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Jam Pick Up</label>
                        <input type="time" class="form-control" id="inputEmail4">
                    </div>



                    <button class="buttonCheckout" type="button" data-bs-toggle="modal" data-bs-target="#modalsucess">
                        Send
                    </button>


                </div>


            </div>
        </div>

    </div>


    <!-- Modal -->
    <div id="modalsucess" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>

                    </div>
                    <h4 class="modal-title w-100">Awesome!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
                </div>
                <div class="modal-footer">
                    <div class="chooseNow">
                        <button> <a href="invoice.html" style="color:inherit ; margin: 0 auto;"> See
                                Invoice</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-lg-start text-muted" id="footerkonten">
        <section class="">
            <div class="container text-center text-md-start ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-9 ">
                        <!-- Content -->
                        <h3 class=" fw-bold mb-4">
                            Tentang
                        </h3>
                        <hr>

                        <p>
                            Kami ngeprint blablabla Kami ngeprint blablablaKami ngeprint blablabla Kami ngeprint
                            blablabla Kami ngeprint blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami
                            ngeprint blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami ngeprint
                            blablablaKami ngeprint blablabla Kami ngeprint blablabla Kami ngeprint blablablaKami
                            ngeprint blablabla Kami ngeprint blablabla Kami ngeprint blablablaKami ngeprint
                            blablabla
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-3">
                        <!-- Links -->
                        <h3 class=" fw-bold mb-4">
                            Hubungi Kami
                        </h3>
                        <hr>

                        <p><i class="fas fa-home me-3"></i> Gedung ABC, Jalan Sunter Mas Tengah, Sunter Jaya, Tj.
                            Priok,
                            Kota Jkt Utara</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            help@ngeprint.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i>021-8888-777</p>

                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>