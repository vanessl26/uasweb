window.onload = function () {
    // your code 
    let loginForm = document.querySelector('.login-form');

    document.querySelector('#login-btn').onclick = () => {
        loginForm.classList.toggle('active');
        shoppingCart.classList.remove('active');

    }


    let shoppingCart = document.querySelector('.shopping-cart');

    document.querySelector('#shop-btn').onclick = () => {
        shoppingCart.classList.toggle('active');

        loginForm.classList.remove('active');

    }
};