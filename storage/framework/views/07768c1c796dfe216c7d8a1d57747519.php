<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- plugin js -->
<script src="<?php echo e(asset('/')); ?>website/assets/js/plugin.js"></script>
<!-- theme js -->

<script src="<?php echo e(asset('/')); ?>website/assets/js/theme.js"></script>


<script src="<?php echo e(asset('/')); ?>website/assets/js/custome.js"></script>

<script>

    function addToCart(productId, quantity = 1) {
        $.ajax({
            url: "<?php echo e(route('cart.ajaxAdd')); ?>",
            type: "POST",
            data: {
                id: productId,
                quantity: quantity,
                _token: "<?php echo e(csrf_token()); ?>"
            },
            success: function(response) {
                if (response.success) {
                    // ✅ Livewire Dispatch: Notify all components (Header, Drawer, CartPage) to refresh
                    Livewire.dispatch('cartUpdated');

                    // ✅ Open the drawer (optional, if you want it to open auto)
                    // $('#cart-drawer').removeClass('invisible'); 
                    // (Leaving this commented as standard behvaior might be just to show badge update or toast)

                    // ✅ Blue message popup (success toast) - Keeping existing visual feedback
                    var $msg = $(`
                    <div id="cart-message" 
                         style="position: fixed; 
                                top: 20px; 
                                right: 20px; 
                                background: #007bff; 
                                color: white; 
                                padding: 10px 15px; 
                                border-radius: 6px; 
                                box-shadow: 0 2px 8px rgba(0,0,0,0.2); 
                                font-weight: 500; 
                                z-index: 9999;">
                        ${response.message}
                    </div>
                `);

                    $('body').append($msg);
                    $msg.fadeIn(300);

                    setTimeout(function(){
                        $msg.fadeOut(300, function(){ $(this).remove(); });
                    }, 3000);
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });

    }


    $('.add-to-cart').click(function() {
        const productId = $(this).data('id');
        addToCart(productId);
    });

    $(document).on('click', '.add-to-cart', function () {
        const productId = $('#quickview-modal').data('product-id');
        addToCart(productId);
    });

    // ✅ Intercept Main Product Page "Add to Cart" Form
    $('#form-add-to-cart').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var productId = form.find('input[name="id"]').val();
        var quantity = form.find('input[name="quantity"]').val();
        
        // Optional: Change button text
        var btn = form.find('button[type="submit"]');
        var originalText = btn.text();
        btn.text('Adding...');
        btn.prop('disabled', true);

        addToCart(productId, quantity);

        // Reset button after short delay (letting AJAX success handle the rest)
        setTimeout(function() {
            btn.text(originalText);
            btn.prop('disabled', false);
        }, 1000);
    });




</script>


<script>
    $('.search-input-handler').keyup(function(){
        var $inputField = $(this);
        var searchText = $inputField.val();

        // 💡 Determine the correct results container based on which input was typed into
        var $resultsContainer = $inputField.attr('id') === 'headerSearchDesktop'
            ? $('#desktopSearchResults')
            : $('#mobileSearchResults');

        // 💡 UX Change 1: Clear previous results immediately
        $resultsContainer.empty().hide();

        if (searchText.length < 3) {
            // 💡 UX Change 2: Minimum 3 characters for better performance/relevance
            $resultsContainer.html('<div class="search-for ptb-10 plr-15 beb">Please enter at least 3 characters.</div>').show();
            return;
        }

        // 💡 UX Change 3: Show a loading state (e.g., a simple text or spinner)
        $resultsContainer.html('<div class="search-for ptb-10 plr-15 beb">Searching...</div>').show();


        $.ajax({
            type: "GET",
            url: "<?php echo e(route('ajax-product-search')); ?>",
            data:{'search_text': searchText},
            dataType:"JSON",
            success:function(response){
                $resultsContainer.empty();

                if (response.length === 0) {
                    // 💡 UX Change 4: Handle No Results found
                    $resultsContainer.html('<div class="search-for ptb-10 plr-15 beb">No products found for "'+ searchText +'"</div>').show();
                    return;
                }

                var resultsHtml = '';

                // 💡 UX Change 5: Create a list-style structure for quick search
                $.each(response, function(key, value){
                    // This is a cleaner, list-item style result, NOT a full card
                    resultsHtml += `
                        <a href="/product-detail/${value.id}" class="d-flex align-items-center p-3 border-bottom hover-bg-light">
                            <img src="/${value.image}" alt="${value.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;" class="me-3">
                            <div class="flex-grow-1">
                                <p class="mb-0 primary-link heading-weight">${value.name}</p>
                                <span class="text-secondary font-12">TK. ${value.selling_price}</span>
                            </div>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    `;
                });

                // 💡 UX Change 6: Add a link to the main search page at the bottom
                resultsHtml += `
                    <div class="p-3 text-center">
                        <a href="<?php echo e(route('products.all')); ?>?search=${searchText}" class="btn-style secondary-btn">
                            View All Search Results (${response.length})
                        </a>
                    </div>
                `;

                $resultsContainer.append(resultsHtml).show();

                // 💡 Final step: If user wants full page results, they click the "View All" link.
                // We no longer manipulate #mainBody here.
            },
            error: function() {
                $resultsContainer.html('<div class="search-for ptb-10 plr-15 text-danger">An error occurred while searching.</div>').show();
            }
        });
    });
</script>
<script>
    // Clears search results when the modal is closed
    $('#searchmodal').on('hidden.bs.modal', function () {
        $('#mobileSearchResults').empty().hide();
        $('#headerSearchMobile').val(''); // Clears the input field
    });
</script>

<script>
    // shippingCost ড্রপডাউন পরিবর্তন হলে টোটাল গণনা
    $('#shippingCost').change(function(){
        var shippingCost    = $(this).val(); // নতুন শিপিং খরচ
        var totalValueCost  = $('#totalValue').text(); // সাবটোটাল
        var taxValueCost    = $('#taxValue').text(); // ট্যাক্স

        // নিশ্চিত করুন যে taxValueCost এবং totalValueCost শুধু সংখ্যা, কোনো অক্ষর নেই
        var cleanTax = parseFloat(taxValueCost.replace(/[^\d.]/g, '')) || 0;
        var cleanTotal = parseFloat(totalValueCost.replace(/[^\d.]/g, '')) || 0;


        var result = Number(shippingCost) + cleanTotal + cleanTax;

        // লোকাল স্টোরেজে সংরক্ষণ
        localStorage.setItem('shippingCostValue', shippingCost);
        localStorage.setItem('totalValueCostValue', cleanTotal);
        localStorage.setItem('taxValueCostValue', cleanTax);

        // ডিসপ্লে আপডেট
        $('#shippingCostResult').text(shippingCost);
        $('#totalRes').text(result);

        // হিডেন ইনপুট আপডেট (সাথে সাথে)
        $('#orderTotal').val(result);
        $('#taxTotal').val(cleanTax);
        $('#shippingTotal').val(shippingCost);

        // window.location = "http://127.0.0.1:8000/checkout/index?data=" + encodeURIComponent(shippingCost);
    });
</script>

<?php if(Request::route()->getName() == 'checkout.index'): ?>
    <script>
        // 1. DOM থেকে সাবটোটাল এবং ট্যাক্স (Blade কর্তৃক রেন্ডার করা) মানগুলো নেওয়া
        // Note: আমরা এখন local storage-এর totalValue/taxValue উপেক্ষা করছি, যাতে নতুন কার্ট টোটালই গণনা হয়।
        var initialSubTotalText = $('#totalValue').text();
        var initialTaxText = $('#taxValue').text();

        // টেক্সট থেকে শুধু সংখ্যা বের করা (অক্ষর এবং Tk. থাকলে বাদ যাবে)
        var subTotal = parseFloat(initialSubTotalText.replace(/[^\d.]/g, '')) || 0;
        var taxValue = parseFloat(initialTaxText.replace(/[^\d.]/g, '')) || 0;

        // 2. শিপিং খরচ নির্ধারণ
        // প্রথমে লোকাল স্টোরেজ থেকে শেষ নির্বাচিত শিপিং খরচ নাও। যদি না থাকে, ডিফল্ট ৬০ নাও।
        var storedShippingCost = localStorage.getItem('shippingCostValue');
        var defaultShipping = storedShippingCost ? Number(storedShippingCost) : 60;

        // 3. চূড়ান্ত মোট মূল্য গণনা
        var finalOrderTotal = subTotal + taxValue + defaultShipping;

        // 4. DOM এবং হিডেন ইনপুট আপডেট

        // শিপিং অপশন ড্রপডাউনকে সর্বশেষ নির্বাচিত মানের সাথে সেট করা
        $('#shippingCost').val(defaultShipping);

        // ডিসপ্লে আপডেট (যদি HTML Blade দিয়ে রেন্ডার না হয়)
        $('#shippingCostResult').text(defaultShipping);
        $('#totalRes').text(finalOrderTotal);

        // ✅ সার্ভারে পাঠানোর জন্য হিডেন ইনপুট আপডেট করা (এটিই সবচেয়ে জরুরি)
        $('#orderTotal').val(finalOrderTotal);
        $('#taxTotal').val(taxValue);
        $('#shippingTotal').val(defaultShipping);

        // নিশ্চিত করার জন্য, একবার 'change' ফাংশনটি ট্রিগার করে দেওয়া ভালো।
        // এটি নিশ্চিত করবে যে আপনার #shippingCost-এ নির্বাচিত মানটি যেন গণনা করে।
        $('#shippingCost').trigger('change');

    </script>
<?php endif; ?>

<?php if(Request::route()->getName() == 'website.buy-now'): ?>
    <script>
        // এখানে কোনো লোকাল স্টোরেজ ব্যবহার করা হচ্ছে না, সরাসরি DOM থেকে মান নেওয়া হচ্ছে
        var subTotalValue = $('#totalValue').text();
        var shippingCost    = $('#shippingCostResult').text();
        var taxValue    = $('#taxValue').text();

        var cleanSubTotal = parseFloat(subTotalValue.replace(/[^\d.]/g, '')) || 0;
        var cleanShipping = parseFloat(shippingCost.replace(/[^\d.]/g, '')) || 0;
        var cleanTax = parseFloat(taxValue.replace(/[^\d.]/g, '')) || 0;


        var result = cleanSubTotal + cleanTax + cleanShipping;

        $('#orderTotal').val(result);
        $('#taxTotal').val(cleanTax);
        $('#shippingTotal').val(cleanShipping);
    </script>

<?php endif; ?>
<script>
    $(document).ready(function() {
        const $termsCheckbox = $('#terms_agreement');
        const $placeOrderBtn = $('#placeOrderBtn');
        const $agreementError = $('#agreementError');
        const $checkoutForm = $('#checkoutForm');

        $agreementError.hide();

        $termsCheckbox.on('change', function() {
            if (this.checked) {
                $agreementError.hide();
            }
        });

        $checkoutForm.on('submit', function(event) {
            if (!$termsCheckbox.prop('checked')) {
                event.preventDefault();
                $agreementError.show();

                $('html, body').animate({
                    scrollTop: $agreementError.offset().top - 100
                }, 500);
            }
        });
    });

</script>






    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('shopForm');
            const sortSelect = document.getElementById('sortby');
            const minPriceInput = document.getElementById('min-price');
            const maxPriceInput = document.getElementById('max-price');
            const stockCheckbox = document.getElementById('shop-in-stock');
            const materialCheckboxes = form.querySelectorAll('.shop-sidebar.material input[type="checkbox"]');
            const hiddenSortInput = document.getElementById('sortInput');

            // ১. সর্টিং ড্রপডাউন (Select) পরিবর্তন হলে ফর্ম সাবমিট
            if (sortSelect) {
                sortSelect.addEventListener('change', function() {
                    // এটি মোবাইল ভিউয়ের জন্য
                    hiddenSortInput.value = this.value;
                    form.submit();
                });
            }

            // ২. কাস্টম সর্টিং ড্রপডাউন (UL/LI) পরিবর্তন হলে ফর্ম সাবমিট
            const sortOptions = document.querySelectorAll('#select-wrap a');
            sortOptions.forEach(option => {
                option.addEventListener('click', function(e) {
                    e.preventDefault();
                    const selectedValue = this.getAttribute('data-value');

                    // হিডেন ইনপুট এবং সিলেক্ট আপডেট
                    hiddenSortInput.value = selectedValue;

                    // মোবাইল select-ও আপডেট করে দেই
                    if (sortSelect) {
                        sortSelect.value = selectedValue;
                    }

                    // ডিসপ্লে নাম পরিবর্তন
                    document.querySelector('.sort-title').textContent = this.textContent;

                    // হাইলাইট পরিবর্তন
                    document.querySelectorAll('#select-wrap li').forEach(li => li.classList.remove('selected'));
                    document.querySelectorAll('#select-wrap a').forEach(a => {
                        a.classList.remove('secondary-color', 'extra-bg');
                        a.classList.add('body-primary-color');
                    });
                    this.closest('li').classList.add('selected');
                    this.classList.add('secondary-color', 'extra-bg');
                    this.classList.remove('body-primary-color');

                    // ফর্ম সাবমিট
                    form.submit();
                });
            });


            // ৩. স্টক ও প্রাইস ইনপুট পরিবর্তন হলে ফর্ম সাবমিট
            if (stockCheckbox) {
                stockCheckbox.addEventListener('change', function() {
                    form.submit();
                });
            }

            // ৪. দামের রেঞ্জ ইনপুট (From/To) পরিবর্তন হলে ফর্ম সাবমিট
            if (minPriceInput && maxPriceInput) {
                // ইনপুট থেকে ফোকাস চলে গেলে ফর্ম সাবমিট
                minPriceInput.addEventListener('blur', function() {
                    form.submit();
                });
                maxPriceInput.addEventListener('blur', function() {
                    form.submit();
                });
            }

            // ৫. মেটেরিয়াল ফিল্টার (চেকবক্স) পরিবর্তন হলে ফর্ম সাবমিট
            materialCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    form.submit();
                });
            });

            // রিসেট বাটন লজিক (ঐচ্ছিক: শুধু মেটেরিয়াল ফিল্টার রিসেট করার জন্য)
            // যদি সব ফিল্টার রিসেট করতে চান, তবে একটি পূর্ণাঙ্গ রিসেট ফাংশন লিখুন।
            // বর্তমানে "Reset" বাটনটি <button type="submit"> তাই এটি ফর্ম সাবমিট করবে।
            // যদি শুধু মেটেরিয়াল রিসেট করতে চান, তবে এটিকে <button type="button"> করুন এবং জাভাস্ক্রিপ্ট লজিক দিন।

        });
    </script>

<script>
    document.querySelectorAll('.sort-option').forEach(item => {
        item.addEventListener('click', function() {
            let val = this.getAttribute('data-value');
            document.getElementById('sortInput').value = val;
            document.getElementById('shopForm').submit();
        });
    });

    // দামের ইনপুট পরিবর্তন করে এন্টার দিলে বা ফোকাস সরালে সাবমিট হবে
    document.querySelectorAll('.min-input, .max-input').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('shopForm').submit();
        });
    });

    // স্টক চেকবক্স ক্লিক করলে সাবমিট হবে
    document.getElementById('shop-in-stock').addEventListener('change', function() {
        document.getElementById('shopForm').submit();
    });
</script>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('shopForm');
        const minRange = document.querySelector('.min-range');
        const maxRange = document.querySelector('.max-range');
        const minInput = document.getElementById('min-price');
        const maxInput = document.getElementById('max-price');

        // স্লাইডার নাড়ালে টেক্সট বক্সে ভ্যালু আপডেট করার ফাংশন
        function updateInputs() {
            minInput.value = minRange.value;
            maxInput.value = maxRange.value;
        }

        // স্লাইডার ড্র্যাগ করার সময় (Real-time update)
        minRange.addEventListener('input', updateInputs);
        maxRange.addEventListener('input', updateInputs);

        // স্লাইডার ড্র্যাগ ছেড়ে দিলে বা পরিবর্তন শেষ হলে (Auto Submit)
        minRange.addEventListener('change', () => form.submit());
        maxRange.addEventListener('change', () => form.submit());

        // টেক্সট বক্সে সরাসরি দাম লিখে এন্টার দিলেও ফিল্টার হবে
        minInput.addEventListener('change', function() {
            minRange.value = this.value;
            form.submit();
        });
        maxInput.addEventListener('change', function() {
            maxRange.value = this.value;
            form.submit();
        });
    });
</script>






















<script>
    $(document).ready(function() {
        $('#checkoutForm').on('submit', function(e) {
            let termsCheckbox = $('#terms_agreement');
            let agreementError = $('#agreementError');
            let submitBtn = $(this).find('.acc-save');

            // Check if terms are agreed to
            if (!termsCheckbox.is(':checked')) {
                e.preventDefault();
                agreementError.show();

                // Scroll to the error message
                $('html, body').animate({
                    scrollTop: agreementError.offset().top - 100
                }, 500);

                return false;
            }

            // Hide error if previously shown
            agreementError.hide();

            // Check if button is already disabled (prevent double submission)
            if (submitBtn.hasClass('disabled')) {
                e.preventDefault();
                return false;
            }

            // Disable button and show processing state
            submitBtn.prop('disabled', true);
            submitBtn.addClass('disabled');
            submitBtn.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...');

            return true;
        });

        // Hide error message when checkbox is checked
        $('#terms_agreement').on('change', function() {
            if ($(this).is(':checked')) {
                $('#agreementError').hide();
            }
        });
    });
</script>

<script>
    // Quick View Modal Population and Logic
    $(document).on('show.bs.modal', '#quickview-modal', function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);

        // Extract data
        var id = button.data('id');
        var name = button.data('name');
        var price = button.data('price');
        var stock = button.data('stock');
        var desc = button.data('description');
        var mainImage = button.data('image-main');
        
        // Check if ID is present
        if (!id) return;

        // Populate Text
        modal.find('.product-name').text(name);
        modal.find('.new-price').text('TK. ' + price);
        modal.find('.product-desc p').text(desc);

        // Stock Status
        var stockStatus = modal.find('.stock-status');
        if (stock && stock > 0) {
            stockStatus.text('In Stock').removeClass('text-danger').addClass('text-success');
        } else {
            stockStatus.text('Out of Stock').removeClass('text-success').addClass('text-danger');
        }

        // Update Links
        var buyNowUrl = "<?php echo e(route('website.buy-now', ['id' => 'PLACEHOLDER'])); ?>".replace('PLACEHOLDER', id);
        modal.find('#quick-view-buy-now').attr('href', buyNowUrl);

        var wishlistUrl = "<?php echo e(route('add-to-wishlist', ['id' => 'PLACEHOLDER'])); ?>".replace('PLACEHOLDER', id);
        modal.find('#quick-view-wishlist').attr('href', wishlistUrl);
        
        var productUrl = "<?php echo e(route('product', ['id' => 'PLACEHOLDER'])); ?>".replace('PLACEHOLDER', id);
        modal.find('.view-full-details').attr('href', productUrl);

        // Set Add to Cart ID
        modal.find('.add-to-cart').data('id', id);

        // Update Image (First slide only for hotfix/simplicity)
        if(mainImage) {
            modal.find('#quickview-slider-big .swiper-slide:first-child img').attr('src', mainImage);
            modal.find('#quickview-slider-small .swiper-slide:first-child img').attr('src', mainImage);
        }

        // Reset Quantity
        modal.find('.js-qty-num').val(1);
    });

    // Specific Add to Cart Handler for Quick View (to capture quantity)
    $(document).on('click', '#quickview-modal .add-to-cart', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var productId = $(this).data('id');
        var quantity = $('#quickview-modal .js-qty-num').val() || 1;

        if(productId) {
            addToCart(productId, quantity);
        }
    });
</script>


<?php /**PATH C:\toyhaven\resources\views/website/includes/script.blade.php ENDPATH**/ ?>