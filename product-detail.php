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

    <section class="section-container product-details-page position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-3">
                    <h1 class="pageTitle text-center">Item Details</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="product-detail position-relative rounded-2 p-4">
                        <div class="d-flex flex-column">
                            <div class="product-gallary-block d-flex mb-4">
                                <figure class="me-4 mb-0 d-flex">
                                    <img src="./assets/images/hero-cover.jpg" alt="" class="img-fluid rounded-2">
                                </figure>
                                <figure class="mb-0 d-flex flex-column justify-content-between">
                                    <img src="./assets/images/image2.jpg" alt="" class="img-fluid rounded-2">
                                    <img src="./assets/images/image3.jpg" alt="" class="img-fluid rounded-2">
                                </figure>
                            </div>
                            <!-- info -->
                            <div class="description-block mb-5">
                                <h2 class="product-title mb-4">Meditrade® Vinyl 2000 PF examination gloves</h2>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur aliquam quisque blandit. Imperdiet tincidunt fames elementum volutpat, amet mattis malesuada. Orci, id vulputate dis quis sed tempor netus. Cras sit orci, eleifend fusce. Non lorem suspendisse sit varius. Eu nunc facilisis.

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur aliquam quisque blandit. Imperdiet tincidunt fames elementum volutpat, amet mattis malesuada. Orci, id vulputate dis quis sed tempor netus. Cras sit orci, eleifend fusce. Non lorem suspendisse sit varius. Eu nunc facilisis.
                                </p>
                            </div>
                        </div>
                        <div class="price-block rounded-3 p-3 d-flex justify-content-between align-items-center">
                            <span class="price">36.00 OMR</span>
                            <span class="d-flex quantity-block align-items-center justify-content-center">
                                <input type="number" class="form-control me-2" id="number" name="number" placeholder="1" required>
                                <a href="<?php echo $base_url; ?>/book-appointment.php" class="cart-btn text-center primaryBackgroundColor custom-btn px-3 d-flex align-items-center justify-content-center">
                                    <svg class="addIcon me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 3.33337V12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.33325 8H12.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Add to cart
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>