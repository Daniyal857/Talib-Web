<?php
$pageClass = "";
require(__DIR__ . '/views/includes/header.php');
?>

<!-- NAVIGATION AND BANNER SECTION 
  ================================================== -->
<div class="innerpage">

    <section class="heroSection position-relative">
        <?php require(__DIR__ . '/views/includes/navigation.php'); ?>
    </section>

    <section class="section-container bg-pattern-plus cart-page position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-3">
                    <h1 class="pageTitle text-center">Order Summary</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="order-summary-block position-relative p-4">
                        <!-- PRODUCT LIST -->
                        <div class="d-flex mb-4">
                            <div class="d-flex">
                                <figure class="img-block me-4">
                                    <a href="<?php echo $base_url; ?>/product-detail.php">
                                        <img src="./assets/images/image1.jpg" alt="product image" class="img-fluid rounded-2">
                                    </a>
                                </figure>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <div class="product-summary">
                                        <h4 class="title mb-3"><a href="<?php echo $base_url; ?>/product-detail.php">Meditrade® Vinyl 2000 PF gloves</a></h4>
                                        <p class="desc mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue at odio nisl nisi, adipiscing. Viverra nibh interdum facilisis sit sem in. Consectetur enim.</p>
                                        <div class="form-field"></div>
                                    </div>
                                    <div class="remove-block">
                                        <a href="#" class="remove-btn">Remove <span class="icon cross">x</span></a>
                                    </div>
                                </div>
                                <div class="amount-block d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control me-2" id="number" name="number" placeholder="1">
                                    <span class="price">36.00 OMR</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="d-flex">
                                <figure class="img-block me-4">
                                    <a href="<?php echo $base_url; ?>/product-detail.php">
                                        <img src="./assets/images/image1.jpg" alt="product image" class="img-fluid rounded-2">
                                    </a>
                                </figure>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <div class="product-summary">
                                        <h4 class="title mb-3"><a href="<?php echo $base_url; ?>/product-detail.php">Meditrade® Vinyl 2000 PF gloves</a></h4>
                                        <p class="desc mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue at odio nisl nisi, adipiscing. Viverra nibh interdum facilisis sit sem in. Consectetur enim.</p>
                                        <div class="form-field"></div>
                                    </div>
                                    <div class="remove-block">
                                        <a href="#" class="remove-btn">Remove <span class="icon cross">x</span></a>
                                    </div>
                                </div>
                                <div class="amount-block d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control me-2" id="number" name="number" placeholder="1">
                                    <span class="price">36.00 OMR</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="d-flex">
                                <figure class="img-block me-4">
                                    <a href="<?php echo $base_url; ?>/product-detail.php">
                                        <img src="./assets/images/image1.jpg" alt="product image" class="img-fluid rounded-2">
                                    </a>
                                </figure>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <div class="product-summary">
                                        <h4 class="title mb-3"><a href="<?php echo $base_url; ?>/product-detail.php">Meditrade® Vinyl 2000 PF gloves</a></h4>
                                        <p class="desc mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue at odio nisl nisi, adipiscing. Viverra nibh interdum facilisis sit sem in. Consectetur enim.</p>
                                        <div class="form-field"></div>
                                    </div>
                                    <div class="remove-block">
                                        <a href="#" class="remove-btn">Remove <span class="icon cross">x</span></a>
                                    </div>
                                </div>
                                <div class="amount-block d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control me-2" id="number" name="number" placeholder="1">
                                    <span class="price">36.00 OMR</span>
                                </div>
                            </div>
                        </div>

                        <!-- PRODUCT TOTAL -->
                        <div class="product-total position-relative pt-5">
                            <ul class="p-0">
                                <li>
                                    <span class="label">subtotal</span>
                                    <span class="amount">73.98 OMR</span>
                                </li>
                                <li>
                                    <span class="label">tax</span>
                                    <span class="amount">73.98 OMR</span>
                                </li>
                                <li>
                                    <input type="text" class="coupon form-control py-3" id="number" placeholder="Apply promo code" required>
                                    <span class="apply-btn cursor-pointer">Apply now</span>
                                </li>
                            </ul>
                            <div class="total-order d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex flex-column">
                                    <h6 class="title">total order</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            online Payment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            cash on delivery
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span class="amount">12.254 OMR</span>
                                </div>
                            </div>
                            <button type="submit" class="custom-btn primaryBackgroundColor w-100 mt-3 py-2">checkout</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>