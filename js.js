// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// save to cart

function updateCartQuantity() {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    let totalQuantity = cart.reduce((acc, item) => acc + item.quantity, 0);
    document.querySelector('.cart-quantity').textContent = totalQuantity;
}
  
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.add-to-cart');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const quantity = parseInt(this.getAttribute('data-quantity'));
            const price = parseFloat(this.getAttribute('data-price'));

            let cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const index = cart.findIndex(item => item.id === id);

            if (index !== -1) {
                cart[index].quantity += quantity;
            } else {
                cart.push({id: id, name: name, quantity: quantity, price: price});
            }

            localStorage.setItem('cart', JSON.stringify(cart));

            // Update the cart quantity on the icon
            updateCartQuantity();
        });
    });

    // Initialize the cart quantity on page load
    updateCartQuantity();
});