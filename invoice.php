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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="images/logo_landscape.png" alt=""> </a>

        <nav class="navbar">
            <ul>
                <a href="home.php#up">Home</a>
                <a href="home.php#products">Product</a>
                <a href="home.php#testimony">Testimony</a>
                <a href="paperproduct.php#simulate">Simulation</a>
                <a href="home.php#aboutus">About Us</a>
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

            <button class=" btn" style="width: 10rem; color:white; background-color: var(--primary);" type="button">Login
                In</button>
        </form>

        <form action="" class="regist-form">
            <h3>Register now</h3>
            <input type="name" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">

            <p>have an account? <a id="login-regist-btn">login now</a></p>

            <button class="btn" id="login-regist-btn" style="width: 10rem; color:white; background-color: var(--primary);" type="button">Create Account
            </button>
        </form>

        <form action="" class="forget-form">
            <h3>Change Password</h3>
            <input type="name" placeholder="your email" class="box">
            <input type="password" placeholder="your new password" class="box">
            <br>
            <br>
            <button class="btn" id="login-regist-btn" style="width: 10rem; color:white; background-color: var(--primary);" type="button">Change Password
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

            <a style="text-decoration: none;" href="checkout.html"><button class="btn" style=" width: 15rem; margin: 3.5vh auto;color:white; background-color: var(--primary);" type="button">Check Out</button></a>
        </div>
    </header>
    <!-- header done----------------------------------------------------------------------------------------------------------- -->

    <div class="pagination">
        <div class="checkout">
            <h1>Pesanan <span>Ngeprint</span> Anda</h1>


            <div class="formq">


                <div class="headerq">
                    <a href="#" class="logo"><img id="logoq" src="images/logo_landscape.png" alt=""> </a>
                    <h2 class="quotationjudul"> Invoice</h2>
                </div>


                <div class="isiq">
                    <h2 class="noorder">NO ORDER : LQNSU346JK</h2>
                    <h2 class="noorder">Order at Ngeprint : Maret 1, 2022</h2>

                    <hr class="new3">
                    <h2 class="judulisi">Informasi Pembeli</h2>
                    <div class="infopem">
                        <h5 class="kirijudul">Email :</h5>
                        <h5 class="kananinfo">Asep@gmail.com</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Nama Pembeli :</h5>
                        <h5 class="kananinfo">Asep</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">No Telp :</h5>
                        <h5 class="kananinfo">08394839</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tipe Pembayaran :</h5>
                        <h5 class="kananinfo">BCA Tranfer</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tipe Pick-Up :</h5>
                        <h5 class="kananinfo">Ambil Sendiri</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Tanggal Pick-Up :</h5>
                        <h5 class="kananinfo">18 Maret 2022</h5>
                    </div>
                    <div class="infopem">
                        <h5 class="kirijudul">Jam Pick-Up :</h5>
                        <h5 class="kananinfo">09:00</h5>
                    </div>



                    <h2 class="judulisi">Informasi Pemesan</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Box Packing</td>
                                <td>Duplex,Medium</td>
                                <td>1</td>
                                <td>20.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Box Packing</td>
                                <td>Duplex,Medium</td>
                                <td>1</td>
                                <td>20.000</td>
                            </tr>

                        </tbody>
                    </table>



                    <h2 class="tulisan">Total harga :</h2>
                    <h2 class="totalharga">40.000</h2>
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