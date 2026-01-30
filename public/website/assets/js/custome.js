
const textWrapper = document.getElementById("textWrapper");
const readMoreBtn = document.getElementById("readMoreBtn");

readMoreBtn.addEventListener("click", function () {

    textWrapper.classList.toggle("expanded");

    if (textWrapper.classList.contains("expanded")) {
        readMoreBtn.innerText = "Read Less";
    } else {
        readMoreBtn.innerText = "Read More";
    }
});



let price = 1990;
function increaseQty() {
    let qty = parseInt(document.getElementById('quantity').value);
    qty++;
    document.getElementById('quantity').value = qty;
    document.getElementById('totalPrice').innerText = `৳${(price * qty).toLocaleString()}.00`;
}

function decreaseQty() {
    let qty = parseInt(document.getElementById('quantity').value);
    if (qty > 1) qty--;
    document.getElementById('quantity').value = qty;
    document.getElementById('totalPrice').innerText = `৳${(price * qty).toLocaleString()}.00`;
}

function changeImage(e) {
    document.getElementById('mainImage').src = e.src;
}

document.querySelectorAll('.remove-item').forEach(link => {
    link.addEventListener('click', function(e) {
        if (!confirm('Are you sure you want to remove this item from your cart?')) {
            e.preventDefault();
        }
    });
});

// Optional: animate update button feedback
document.querySelectorAll('form[action*="cart.update"]').forEach(form => {
    form.addEventListener('submit', function() {
        const btn = this.querySelector('input[type="submit"]');
        btn.value = "Updating...";
        btn.disabled = true;
        setTimeout(() => {
            btn.value = "Update";
            btn.disabled = false;
        }, 1500);
    });
});

// Optional: coupon button alert (demo)
document.querySelector('.coupon form').addEventListener('submit', e => {
    e.preventDefault();
    alert('Coupon feature coming soon!');
});

document.addEventListener('DOMContentLoaded', function() {
    const removeLinks = document.querySelectorAll('.remove-bottom-icon');

    removeLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // link direct কাজ না করে

            const url = this.getAttribute('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to remove this product from cart?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, remove it!',
                background: '#fff'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // ✅ user confirm করলে remove route এ যাবে
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const citySelect = document.getElementById("country");
    const shippingFeeElement = document.getElementById("shipping-fee");
    const totalElement = document.getElementById("total-amount");
    const subtotalElement = document.getElementById("subtotal");

    // Laravel থেকে subtotal safely নিলাম
    const subtotal = window.checkoutData?.subtotal || 0;

    function updateShippingFee() {
        const selectedCity = citySelect.value.trim();
        let shipping = 0;

        if (selectedCity === "Dhaka") {
            shipping = 60;
        } else if (selectedCity !== "--Select your City--") {
            shipping = 120;
        }

        // Update shipping fee
        shippingFeeElement.textContent = `৳${shipping.toFixed(2)}`;

        // Update total
        const total = subtotal + shipping;
        totalElement.textContent = `৳${total.toFixed(2)}`;
    }

    // Initial call (default)
    updateShippingFee();

    // Listen for city change
    citySelect.addEventListener("change", updateShippingFee);
});



// ajax for cart



