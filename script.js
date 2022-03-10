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
