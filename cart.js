document.addEventListener("DOMContentLoaded", function() {
    displayCartItems();

    updateCartIconQuantity();

    document.getElementById("orderButton").addEventListener("click", function() {
        placeOrder();
    });
});

function calculateTotalPrice(cart) {
    return cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
}

function displayCartItems() {
    const cartItemsDiv = document.getElementById('cartList');
    const numOfItemsSpan = document.getElementById('numOfItemsInCart');
    const orderButton = document.getElementById('orderButton');
    const totalPriceSpan = document.getElementById('totalPrice');
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');

    cartItemsDiv.innerHTML = '';

    if (cart.length === 0) {
        const emptyMessage = document.createElement('li');
        emptyMessage.className = 'list-group-item text-center';
        emptyMessage.textContent = "Vaša košarica je prazna.";
        cartItemsDiv.appendChild(emptyMessage);

        orderButton.style.display = 'none';
        totalPriceSpan.textContent = '0';
    } else {
        cart.forEach((item, index) => {
            const cartItem = document.createElement('li');
            cartItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            cartItem.innerHTML = `
                <div>
                    ${item.name}
                    <span class="badge badge-warning badge-pill">${item.quantity}</span>
                    x
                    <span class="badge badge-success badge-pill">${item.price} KM</span>
                </div>
                <button class="btn btn-danger btn-sm" onclick="deleteItemFromCart(${index})"><i class="fas fa-trash"></i></button>
            `;
            
            cartItemsDiv.appendChild(cartItem);
        });

        orderButton.style.display = 'block'; // Prikaz gumba za naručivanje ako postoje proizvodi u košarici
        
        // Prikaz ukupnog broja proizvoda u košarici
        numOfItemsSpan.textContent = cart.length;

        // ažuriranje ukupne cijene
        totalPriceSpan.textContent = calculateTotalPrice(cart).toFixed(2);
    }
}

function deleteItemFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    
    if (index > -1 && index < cart.length) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        
        displayCartItems();
        let totalQuantity = cart.reduce((acc, item) => acc + item.quantity, 0);
        document.querySelector('.cart-quantity').textContent = totalQuantity;
    }
}

function updateCartIconQuantity() {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    let totalQuantity = cart.reduce((acc, item) => acc + item.quantity, 0);
    document.querySelector('.cart-quantity').textContent = totalQuantity;

    let totalItems = cart.reduce((acc, item) => acc + item.quantity, 0);
    document.getElementById('numOfItemsInCart').textContent = totalItems;
}

function placeOrder() {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    let orderDetails = cart.map(item => {
        return {
            productId: item.id,
            quantity: item.quantity
        };
    });

    fetch('obradiNarudzbu.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'orderDetails=' + encodeURIComponent(JSON.stringify(orderDetails))
    })
    .then(response => response.text())
    .then(data => {
        if (data === "not_logged_in") {
            // Otvori modal za prijavu
            $('#modalLRForm').modal('show');
            return;
        }

        // Ukloni sve proizvode iz košarice
        localStorage.removeItem('cart');
        displayCartItems();
        updateCartIconQuantity();

        // Informiraj korisnika o uspjehu narudžbe
        alert('Vaša narudžba je uspješno poslana!');
    })
    .catch(error => {
        console.error('Došlo je do pogreške prilikom slanja narudžbe:', error);
        alert('Došlo je do pogreške prilikom slanja narudžbe.');
    });
}
