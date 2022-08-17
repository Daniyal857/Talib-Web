<?php
$pageClass = "";
require(__DIR__ . '/views/includes/header.php');
?>

<?php require(__DIR__ . '/views/includes/loginForm.php'); ?>
<!--ABOUT US SECTION 
  ================================================== -->
<section class="about-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h2 class="title mb-3 mt-3">About us</h2>
        <div class="desc  mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor dis elit volutpat imperdiet facilisis. Venenatis sed donec iaculis tristique molestie volutpat nec velit odio. Pharetra purus nunc ac risus eleifend.</div>
        <a href="#" class="custom-btn primaryBackgroundColor colorWhite mt-3 px-4 rounded-5">Book an appointment</a>
      </div>
      <div class="col-6">
        <div class="about-img">
          <img src="/assets/images/about-img.png" class="img-fluid" alt="about image">
        </div>
      </div>
    </div>
  </div>
</section>


<!--FEATURED ITEM SECTION 
  ================================================== -->
<section class="featuredSection py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="title mb-4 mt-3">Featured items</h3>
          <a href="#" class="custom-btn viewAll primaryBackgroundColor colorWhite d-flex align-items-center px-3 p-1">View All
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
                <a href="#" class="custom-btn cartBtn colorWhite primaryBackgroundColor pt-2 px-3">add to cart</a>
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
                <a href="#" class="custom-btn cartBtn colorWhite primaryBackgroundColor pt-2 px-3">add to cart</a>
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
                <a href="#" class="custom-btn cartBtn colorWhite primaryBackgroundColor pt-2 px-3">add to cart</a>
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
                <a href="#" class="custom-btn cartBtn colorWhite primaryBackgroundColor pt-2 px-3">add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--SERVICES SECTION 
  ================================================== -->
<section class="servicesSection">
  <div class="container px-4 py-5" id="featured-3">
    <h4 class="mb-5 title">The Greatest Services For You!</h4>
    <div class="row">
      <div class="col-lg-4">
        <div class="feature one rounded-4 p-4 px-5">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3 rounded-5 p-3">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.2903 0H10.7548C9.99645 0 9.38184 0.614609 9.38184 1.37297V8.10063C9.38184 8.85898 9.99645 9.47359 10.7548 9.47359H29.2903C30.0486 9.47359 30.6632 8.85898 30.6632 8.10063V1.37297C30.6632 0.614609 30.0486 0 29.2903 0ZM27.9173 6.72766H12.1278V2.74602H27.9172V6.72766H27.9173Z" fill="#855FCE" />
              <path d="M27.3222 8.1467H24.5762V14.4625H27.3222V8.1467Z" fill="#855FCE" />
              <path d="M15.4237 8.1467H12.6777V14.4625H15.4237V8.1467Z" fill="#855FCE" />
              <path d="M29.977 13.0892H10.0227C8.76094 13.0892 7.73438 14.1157 7.73438 15.3775V37.7116C7.73438 38.9734 8.76094 40 10.0227 40H29.977C31.2388 40 32.2653 38.9734 32.2653 37.7116V15.3775C32.2653 14.1157 31.2388 13.0892 29.977 13.0892ZM29.5193 37.2539H10.4804V15.8352H29.5193V37.2539Z" fill="#855FCE" />
              <path d="M19.9999 20.2745C19.2416 20.2745 18.627 20.8891 18.627 21.6475V31.4415C18.627 32.1999 19.2416 32.8145 19.9999 32.8145C20.7583 32.8145 21.3729 32.1999 21.3729 31.4415V21.6475C21.3729 20.8891 20.7583 20.2745 19.9999 20.2745Z" fill="#855FCE" />
              <path d="M24.8975 25.1717H15.1034C14.3451 25.1717 13.7305 25.7863 13.7305 26.5446C13.7305 27.303 14.3451 27.9176 15.1034 27.9176H24.8975C25.6563 27.9176 26.2705 27.303 26.2705 26.5446C26.2705 25.7863 25.6558 25.1717 24.8975 25.1717Z" fill="#855FCE" />
            </svg>
          </div>
          <h6 class="title">Apotek 24 Jam</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam imperdiet non pretium mi.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature two rounded-4 p-4 px-5">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3 rounded-5 p-3">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.4828 5.5688C34.4654 3.52935 31.7401 2.40185 28.809 2.39357C25.792 2.38349 22.7686 3.52662 20.3462 5.55873C17.5911 3.13255 15.0989 1.94958 12.7521 1.94958C9.47459 1.94958 6.43373 3.24044 4.21037 5.5638C2.53928 7.2349 1.39428 9.42896 0.897949 11.9092C0.749355 12.6546 1.23232 13.3794 1.97779 13.5285C2.72232 13.6762 3.44795 13.1941 3.59709 12.4486C3.98607 10.5033 4.87092 8.79544 6.1774 7.48857C7.89756 5.6913 10.2329 4.70185 12.7522 4.70185C14.5774 4.70185 16.7884 5.93169 19.3004 8.33302C19.582 8.61607 19.9522 8.77248 20.3426 8.77294C20.343 8.77294 20.344 8.77294 20.3444 8.77294C20.7338 8.77294 21.104 8.61748 21.3861 8.33537C23.414 6.3074 26.1067 5.14591 28.7765 5.14591C28.7852 5.14591 28.7934 5.14591 28.8017 5.14591C31.0265 5.15185 33.0063 5.96794 34.5108 7.48857C36.276 9.33216 37.248 11.7469 37.248 14.289C37.248 16.8331 36.254 19.3079 34.5485 21.0519L20.3667 34.761L9.12131 23.8958C8.57498 23.3679 7.70389 23.3839 7.17545 23.9289C6.64748 24.4757 6.66264 25.3468 7.20897 25.8747L19.4108 37.6637C19.6772 37.9215 20.0222 38.0504 20.3667 38.0504C20.7112 38.0504 21.0562 37.9215 21.3231 37.6642L36.4883 23.0037C38.7199 20.7225 39.9998 17.5463 39.9998 14.289C39.9998 11.0344 38.7562 7.9431 36.4828 5.5688Z" fill="#27AE60" />
              <path d="M37.523 17.4542H26.422C26.0431 17.4542 25.6816 17.6097 25.422 17.885L21.2491 22.2974L16.4427 11.3946C16.2362 10.9263 15.7867 10.6111 15.2762 10.5767C14.7684 10.5442 14.278 10.7942 14.0105 11.2304L10.1931 17.4542H1.37617C0.616016 17.4542 0 18.0703 0 18.8304C0 19.5906 0.616016 20.2066 1.37617 20.2066H10.9629C11.4413 20.2066 11.8859 19.958 12.1359 19.5497L14.9836 14.9075L19.5666 25.3029C19.7524 25.725 20.1373 26.0254 20.5914 26.1039C20.6694 26.1171 20.7478 26.124 20.8258 26.124C21.201 26.124 21.5638 25.9708 21.8258 25.6937L27.0148 20.2065H37.523C38.2831 20.2065 38.8992 19.5904 38.8992 18.8303C38.8991 18.0703 38.283 17.4542 37.523 17.4542Z" fill="#27AE60" />
            </svg>
          </div>
          <h6 class="title">Medical Check Up</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam imperdiet non pretium mi.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature three rounded-4 p-4 px-5">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3 rounded-5 p-3">
            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2_18717)">
                <path d="M34.642 13.2401L27.4303 6.02837C26.9389 5.53735 26.1439 5.53696 25.6525 6.02751L7.07812 24.56L8.85508 26.3411L26.5401 8.69586L31.9749 14.1311L14.3301 31.8157L16.1108 33.5927L34.6432 15.0179C35.1334 14.5264 35.133 13.7306 34.642 13.2401Z" fill="#2F80ED" />
                <path d="M36.7812 5.65152L35.0202 3.89051C34.6101 3.48043 33.9737 3.40372 33.4781 3.70473L27.3984 7.39449L28.7037 9.54503L33.9393 6.36723L34.304 6.73238L31.1267 11.968L33.2773 13.2732L36.967 7.19355C37.2679 6.69808 37.1912 6.06113 36.7812 5.65152Z" fill="#2F80ED" />
                <path d="M18.4572 34.1633L6.5075 22.2136C6.01648 21.7222 5.21984 21.7222 4.72891 22.2136C4.2375 22.7046 4.2375 23.5013 4.72891 23.9922L16.6786 35.9419C16.9239 36.1876 17.2458 36.3104 17.5679 36.3104C17.8894 36.3104 18.2119 36.1875 18.4572 35.9419C18.9486 35.4509 18.9486 34.6543 18.4572 34.1633Z" fill="#2F80ED" />
                <path d="M18.1433 23.1788L6.4043 34.961L8.18614 36.7363L19.9251 24.9541L18.1433 23.1788Z" fill="#2F80ED" />
                <path d="M15.6716 20.707L3.93262 32.4892L5.71446 34.2645L17.4534 22.4823L15.6716 20.707Z" fill="#2F80ED" />
                <path d="M11.1201 37.8529L2.81822 29.5506C2.32681 29.0595 1.53017 29.0588 1.03916 29.5506C0.548145 30.0416 0.548145 30.8377 1.03916 31.3292L9.34102 39.6315C9.58672 39.8772 9.90875 40 10.2307 40C10.5523 40 10.8748 39.8771 11.12 39.6315C11.6111 39.1405 11.6111 38.3443 11.1201 37.8529Z" fill="#2F80ED" />
                <path d="M40.3026 0.368707C39.8112 -0.122699 39.0155 -0.122699 38.5241 0.368707L34.1215 4.7712C33.6301 5.26221 33.6301 6.05885 34.1215 6.54979C34.3672 6.79549 34.6887 6.9183 35.0108 6.9183C35.3328 6.9183 35.6548 6.79541 35.9001 6.54979L40.3026 2.1473C40.7941 1.65636 40.7941 0.859721 40.3026 0.368707Z" fill="#2F80ED" />
                <path d="M15.271 18.3131L13.4922 20.092L20.5779 27.1777L22.3568 25.3989L15.271 18.3131Z" fill="#2F80ED" />
              </g>
              <defs>
                <clipPath id="clip0_2_18717">
                  <rect width="40" height="40" fill="white" transform="translate(0.670898)" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <h6 class="title">Professional Doctor</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam imperdiet non pretium mi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--LOCATION SECTION 
  ================================================== -->
<section class="locationSection py-5">
  <div class="container">
    <div class="d-flex align-items-center flex-column">
      <svg class="plus top" width="156" height="156" viewBox="0 0 156 156" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.1" d="M101.4 0H54.6V54.5695H0V101.43H54.6V156H101.4V101.43H156V54.5695H101.4V0Z" fill="#12CBAE" />
      </svg>
      <h5 class="mb-2 title">Our Location</h5>
      <p class="desc mb-4">Problems trying to resolve the conflict between
        <span class="d-flex">the two major realms of Classical physics: Newtonian mechanics</span>
      </p>
    </div>
    <div class="mapWrapper">
      <img src="/assets/images/map.jpg" class="img-fluid" alt="map">
    </div>
    <svg class="plus bottom" width="156" height="156" viewBox="0 0 156 156" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path opacity="0.1" d="M101.4 0H54.6V54.5695H0V101.43H54.6V156H101.4V101.43H156V54.5695H101.4V0Z" fill="#12CBAE" />
    </svg>
  </div>
</section>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>