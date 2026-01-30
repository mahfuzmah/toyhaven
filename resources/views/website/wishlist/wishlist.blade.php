
@extends('website.master')

@section('body')

    <main id="main">
        <!-- wishlist-page strat -->
        <section class="wish-area section-ptb">
            <div class="container">
                <form method="post">
                    <div class="row row-mtm">
                        <div class="col-12 col-lg-7 col-xxl-8" data-animate="animate__fadeIn">
                            <div class="wish-textview ul-mtm30">
                                <div class="wish-text">Create your very own personalized collections of items and save them in your account for future reference. Your collection are waiting!</div>
                                <div class="wish-text">
                                    <div class="wish-text-content ul-mtm-15">
                                        <span>This list will expire in 30 days.</span>
                                        <span><a href="{{route('customer.login')}}" class="body-primary-color text-decoration-underline">Login</a> or <a href="{{route('customer.register')}}" class="body-primary-color text-decoration-underline">Create account</a> to make sure lists will be saved.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xxl-4" data-animate="animate__fadeIn">
                            <div class="wish-summary ptb-30 plr-15 plr-md-30 extra-bg border-radius">
                                <h6 class="font-18 meb-21">Wishlist summary</h6>
                                <div class="wish-total ul-mtm20">
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Subtotal</span>
                                        <span class="heading-color heading-weight">$246.00</span>
                                    </div>
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Shipping</span>
                                        <span class="text-success heading-weight">Excluding</span>
                                    </div>
                                </div>
                                <div class="wish-total mst-26 pst-26 bst">
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Total</span>
                                        <span class="heading-color heading-weight">$246.00</span>
                                    </div>
                                </div>
                                <div class="wish-summary-btn mst-26">
                                    <div class="row row-mtm15">
                                        <div class="col-12">
                                            <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">All add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <a href="wishlist-empty.html" class="w-100 btn-style secondary-btn">Clear wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wish-itemview section-pt">
                        <div class="wish-title d-flex align-items-center justify-content-between peb-30 beb" data-animate="animate__fadeIn">
                            <h6 class="font-18">My favorites</h6>
                            <span class="wish-count"><span class="wish-counter">4</span> Items</span>
                        </div>
                        <div class="wish-table">
                            <div class="wish-table-heading d-none d-md-block ptb-30 beb" data-animate="animate__fadeIn">
                                <div class="row">
                                    <div class="col-md-5 heading-color heading-weight">Product</div>
                                    <div class="col-md-3 heading-color heading-weight">Qty</div>
                                    <div class="col-md-2 heading-color heading-weight">Total</div>
                                    <div class="col-md-2 heading-color heading-weight text-end">Option</div>
                                </div>
                            </div>
                            <div class="wish-table-data">
                                <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                    <div class="row row-mtm">
                                        <div class="wish-table-item">
                                            <div class="row row-mtm30">
                                                <div class="col-12 col-md-5">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                    <div class="wish-item-content d-flex flex-wrap">
                                                        <div class="wish-item-image width-80">
                                                            <a href="product.html" class="d-block br-hidden"><img src="assets/image/cart/cart-1.jpg" class="w-100 img-fluid" alt="cart-1"></a>
                                                        </div>
                                                        <div class="wish-item-info width-calc-80 psl-15">
                                                            <a href="product.html" class="primary-link heading-weight">Pleated skater skirt</a>
                                                            <div class="wish-item-price heading-color heading-weight mst-7">$79.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                    <div class="js-qty-wrapper">
                                                        <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                            <input type="number" name="pleated-skater-skirt" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <div class="d-md-none heading-color heading-weight meb-7">Total</div>
                                                    <div class="wish-total-price heading-color heading-weight">$79.00</div>
                                                </div>
                                                <div class="col-3 col-md-2 text-end">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                    <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wish-note-cart">
                                            <div class="row row-mtm justify-content-xl-between align-items-md-end">
                                                <div class="col-12 col-md-6 col-lg-7 col-xl-5">
                                                    <div class="wish-note-content">
                                                        <div class="wish-note">
                                                            <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center body-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                        </div>
                                                        <div class="wish-textarea d-none">
                                                            <div class="row field-row">
                                                                <div class="col-12 field-col">
                                                                    <label for="pleated-skater-skirt-note" class="field-label">Order note</label>
                                                                    <textarea rows="5" id="pleated-skater-skirt-note" name="pleated-skater-skirt-note" class="w-100 cart-notes"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wish-btn d-none mst-15">
                                                            <div class="ul-mtm15">
                                                                <button type="button" class="wish-save body-primary-color">Save changes</button>
                                                                <button type="button" class="wish-cancel body-primary-color">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
                                                    <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                    <div class="row row-mtm">
                                        <div class="wish-table-item">
                                            <div class="row row-mtm30">
                                                <div class="col-12 col-md-5">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                    <div class="wish-item-content d-flex flex-wrap">
                                                        <div class="wish-item-image width-80">
                                                            <a href="product.html" class="d-block br-hidden"><img src="assets/image/cart/cart-2.jpg" class="w-100 img-fluid" alt="cart-2"></a>
                                                        </div>
                                                        <div class="wish-item-info width-calc-80 psl-15">
                                                            <a href="product.html" class="primary-link heading-weight">Tailored blazer jacket</a>
                                                            <div class="wish-item-price heading-color heading-weight mst-7">$49.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                    <div class="js-qty-wrapper">
                                                        <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                            <input type="number" name="tailored-blazer-jacket" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <div class="d-md-none heading-color heading-weight meb-7">Total</div>
                                                    <div class="wish-total-price heading-color heading-weight">$49.00</div>
                                                </div>
                                                <div class="col-3 col-md-2 text-end">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                    <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wish-note-cart">
                                            <div class="row row-mtm justify-content-xl-between align-items-md-end">
                                                <div class="col-12 col-md-6 col-lg-7 col-xl-5">
                                                    <div class="wish-note-content">
                                                        <div class="wish-note d-none">
                                                            <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center body-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                        </div>
                                                        <div class="wish-textarea">
                                                            <div class="row field-row">
                                                                <div class="col-12 field-col">
                                                                    <label for="tailored-blazer-jacket-note" class="field-label">Order note</label>
                                                                    <textarea rows="5" id="tailored-blazer-jacket-note" name="tailored-blazer-jacket-note" class="w-100 cart-notes">Please arrange the delivery as soon as possible, Please keep safe.</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wish-btn d-none mst-15">
                                                            <div class="ul-mtm15">
                                                                <button type="button" class="wish-save body-primary-color">Save changes</button>
                                                                <button type="button" class="wish-cancel body-primary-color">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
                                                    <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                    <div class="row row-mtm">
                                        <div class="wish-table-item">
                                            <div class="row row-mtm30">
                                                <div class="col-12 col-md-5">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                    <div class="wish-item-content d-flex flex-wrap">
                                                        <div class="wish-item-image width-80">
                                                            <a href="product.html" class="d-block br-hidden"><img src="assets/image/cart/cart-3.jpg" class="w-100 img-fluid" alt="cart-3"></a>
                                                        </div>
                                                        <div class="wish-item-info width-calc-80 psl-15">
                                                            <a href="product.html" class="primary-link heading-weight">Girls floral ruffle top</a>
                                                            <div class="wish-item-price heading-color heading-weight mst-7">$69.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                    <div class="js-qty-wrapper">
                                                        <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                            <input type="number" name="girls-floral-ruffle-top" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <div class="d-md-none heading-color heading-weight meb-7">Total</div>
                                                    <div class="wish-total-price heading-color heading-weight">$69.00</div>
                                                </div>
                                                <div class="col-3 col-md-2 text-end">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                    <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wish-note-cart">
                                            <div class="row row-mtm justify-content-xl-between align-items-md-end">
                                                <div class="col-12 col-md-6 col-lg-7 col-xl-5">
                                                    <div class="wish-note-content">
                                                        <div class="wish-note d-none">
                                                            <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center body-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                        </div>
                                                        <div class="wish-textarea">
                                                            <div class="row field-row">
                                                                <div class="col-12 field-col">
                                                                    <label for="girls-floral-ruffle-top-note" class="field-label">Order note</label>
                                                                    <textarea rows="5" id="girls-floral-ruffle-top-note" name="girls-floral-ruffle-top-note" class="w-100 cart-notes focus">Please arrange the delivery at my neighbor's house, Because at that time I am not available at home.</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wish-btn mst-16">
                                                            <div class="ul-mtm15">
                                                                <button type="button" class="wish-save body-primary-color">Save changes</button>
                                                                <button type="button" class="wish-cancel body-primary-color">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
                                                    <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                    <div class="row row-mtm">
                                        <div class="wish-table-item">
                                            <div class="row row-mtm30">
                                                <div class="col-12 col-md-5">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                    <div class="wish-item-content d-flex flex-wrap">
                                                        <div class="wish-item-image width-80">
                                                            <a href="product.html" class="d-block br-hidden"><img src="assets/image/cart/cart-4.jpg" class="w-100 img-fluid" alt="cart-4"></a>
                                                        </div>
                                                        <div class="wish-item-info width-calc-80 psl-15">
                                                            <a href="product.html" class="primary-link heading-weight">Classic cotton t-shirt</a>
                                                            <div class="wish-item-price heading-color heading-weight mst-7">$49.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                    <div class="js-qty-wrapper">
                                                        <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                            <input type="number" name="classic-cotton-t-shirt" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <div class="d-md-none heading-color heading-weight meb-7">Total</div>
                                                    <div class="wish-total-price heading-color heading-weight">$49.00</div>
                                                </div>
                                                <div class="col-3 col-md-2 text-end">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                    <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wish-note-cart">
                                            <div class="row row-mtm justify-content-xl-between align-items-md-end">
                                                <div class="col-12 col-md-6 col-lg-7 col-xl-5">
                                                    <div class="wish-note-content">
                                                        <div class="wish-note">
                                                            <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center body-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                        </div>
                                                        <div class="wish-textarea d-none">
                                                            <div class="row field-row">
                                                                <div class="col-12 field-col">
                                                                    <label for="classic-cotton-t-shirt-note" class="field-label">Order note</label>
                                                                    <textarea rows="5" id="classic-cotton-t-shirt-note" name="classic-cotton-t-shirt-note" class="w-100 cart-notes"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wish-btn d-none mst-15">
                                                            <div class="ul-mtm15">
                                                                <button type="button" class="wish-save body-primary-color">Save changes</button>
                                                                <button type="button" class="wish-cancel body-primary-color">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
                                                    <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-mtm section-pt">
                        <div class="col-12 col-lg-5 col-xxl-4 ms-lg-auto" data-animate="animate__fadeIn">
                            <div class="wish-summary ptb-30 plr-15 plr-md-30 extra-bg border-radius">
                                <h6 class="font-18 meb-21">Wishlist summary</h6>
                                <div class="wish-total ul-mtm20">
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Subtotal</span>
                                        <span class="heading-color heading-weight">$246.00</span>
                                    </div>
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Shipping</span>
                                        <span class="text-success heading-weight">Excluding</span>
                                    </div>
                                </div>
                                <div class="wish-total mst-26 pst-26 bst">
                                    <div class="wish-total-info d-flex justify-content-between">
                                        <span>Total</span>
                                        <span class="heading-color heading-weight">$246.00</span>
                                    </div>
                                </div>
                                <div class="wish-summary-btn mst-26">
                                    <div class="row row-mtm15">
                                        <div class="col-12">
                                            <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">All add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <a href="wishlist-empty.html" class="w-100 btn-style secondary-btn">Clear wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- wishlist-page end -->
    </main>
    <!-- main end -->

@endsection
