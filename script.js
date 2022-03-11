window.onload = function () {
    // your code
    let loginForm = document.querySelector('.login-form');

    document.querySelector('#login-btn').onclick = () => {
        loginForm.classList.toggle('active');
        shoppingCart.classList.remove('active');
          navbar.classList.remove('active');
    }


    let shoppingCart = document.querySelector('.shopping-cart');

    document.querySelector('#shop-btn').onclick = () => {
        shoppingCart.classList.toggle('active');
        navbar.classList.remove('active');
        loginForm.classList.remove('active');

    }

    let navbar = document.querySelector('.navbar');

    document.querySelector('#menu-btn').onclick = () =>{
        navbar.classList.toggle('active');
        shoppingCart.classList.remove('active');
        loginForm.classList.remove('active');
    }
};

function equalsIgnoringCase(text, other) {
    return text.localeCompare(other, undefined, { sensitivity: 'base' }) === 0;
}

function simulate(){
  var waktu1;
  var waktu2;
  var waktu3;

  var jenisProduk = document.getElementById("jenisproduk").value;
  var ukuran = document.getElementById("ukuran").value;
  var jenisKertas = document.getElementById("jeniskertas").value;
  var jumlahCetakan = document.getElementById("jumlahcetakan").value;

  switch (jenisproduk) {
    case paper:

      break;
    case paper:

      break;
    case paper:

      break;
    case paper:

      break;
    default:

  }

}
