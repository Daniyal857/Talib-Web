<?php
$pageClass = "";
require(__DIR__ . '/views/includes/header.php');
?>


<!--ABOUT US Section 
  ================================================== -->
<section class="about-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="title mb-3 mt-3">About us</div>
        <div class="desc  mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor dis elit volutpat imperdiet facilisis. Venenatis sed donec iaculis tristique molestie volutpat nec velit odio. Pharetra purus nunc ac risus eleifend.</div>
        <a href="#" class="btn primaryBackgroundColor colorWhite mt-3 px-4">Book an appointment</a>
      </div>
      <div class="col-6">
        <div class="about-img">
          <img src="/assets/images/about-img.png" class="img-fluid" alt="about image">
        </div>
      </div>
    </div>
  </div>
</section>


<!--Featured Items US Section 
  ================================================== -->
<section class="featuredSection py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
          <div class="title mb-4 mt-3">Featured items</div>
          <a href="#" class="viewAll btn primaryBackgroundColor colorWhite d-flex align-items-center px-3 p-1">View All
            <svg class="arrowRight ml-1" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.5332 7.68666L4.2732 4.94666C4.39737 4.82175 4.46706 4.65279 4.46706 4.47666C4.46706 4.30054 4.39737 4.13157 4.2732 4.00666L1.60654 1.34" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="bevel" />
            </svg>
          </a>
        </div>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-lg-3">
            <div class="product-card rounded-3 d-flex flex-column p-3">
              <img src="/assets/images/prodImgOne.jpg" alt="product image" class="img-fluid">
              <div class="d-flex flex-column">
                <h6 class="title pt-3">product title</h6>
                <p class="desc">Space for a small product description</p>
              </div>
              <div class="priceBox d-flex justify-content-between align-items-center">
                <span class="price">1.12 OMR</span>
                <a href="#" class="cartBtn colorWhite btn primaryBackgroundColor pt-2 px-3">add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-card rounded-3 d-flex flex-column p-3">
              <img src="/assets/images/prodImgTwojpg.jpg" alt="product image" class="img-fluid">
              <div class="d-flex flex-column">
                <h6 class="title pt-3">product title</h6>
                <p class="desc">Space for a small product description</p>
              </div>
              <div class="priceBox d-flex justify-content-between align-items-center">
                <span class="price">1.12 OMR</span>
                <a href="#" class="cartBtn colorWhite btn primaryBackgroundColor pt-2 px-3">add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-card rounded-3 d-flex flex-column p-3">
              <img src="/assets/images/prodImgOne.jpg" alt="product image" class="img-fluid">
              <div class="d-flex flex-column">
                <h6 class="title pt-3">product title</h6>
                <p class="desc">Space for a small product description</p>
              </div>
              <div class="priceBox d-flex justify-content-between align-items-center">
                <span class="price">1.12 OMR</span>
                <a href="#" class="cartBtn colorWhite btn primaryBackgroundColor pt-2 px-3">add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-card rounded-3 d-flex flex-column p-3">
              <img src="/assets/images/prodImgTwojpg.jpg" alt="product image" class="img-fluid">
              <div class="d-flex flex-column">
                <h6 class="title pt-3">product title</h6>
                <p class="desc">Space for a small product description</p>
              </div>
              <div class="priceBox d-flex justify-content-between align-items-center">
                <span class="price">1.12 OMR</span>
                <a href="#" class="cartBtn colorWhite btn primaryBackgroundColor pt-2 px-3">add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<?php require(__DIR__ . '/views/includes/footer.php'); ?>