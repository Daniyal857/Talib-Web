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

    <section class="section-container bg-pattern-plus items-page position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-3">
                    <h1 class="pageTitle text-center">Items</h1>
                </div>
            </div>

            <div class="appointment-record">
                <div class="filter-record d-flex justify-content-between align-items-center rounded-1 p-2 mb-3">
                    <form class="filter-wrapper d-flex align-items-center w-25" role="search">
                        <span class="searchIcon position-absolute ms-2">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1667 4.25C8.68984 4.25 4.25 8.68984 4.25 14.1667C4.25 19.6435 8.68984 24.0833 14.1667 24.0833C16.3941 24.0833 18.4501 23.3489 20.1056 22.109L25.915 27.9185C26.4683 28.4717 27.3653 28.4717 27.9185 27.9185C28.4717 27.3653 28.4717 26.4683 27.9185 25.915L22.109 20.1056C23.3489 18.4501 24.0833 16.3941 24.0833 14.1667C24.0833 8.68984 19.6435 4.25 14.1667 4.25ZM7.08333 14.1667C7.08333 10.2546 10.2546 7.08333 14.1667 7.08333C18.0787 7.08333 21.25 10.2546 21.25 14.1667C21.25 18.0787 18.0787 21.25 14.1667 21.25C10.2546 21.25 7.08333 18.0787 7.08333 14.1667Z" fill="#64748B" />
                            </svg>
                        </span>
                        <div class="searchField w-100">
                            <input class="form-control me-2 border-0" type="search" placeholder="Search by ID, status, date ..." aria-label="Search">
                        </div>
                    </form>
                    <button class="custom-btn p-3 text-white d-flex justify-content-center align-items-center">
                        <svg class="filterIcon me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6666 2H1.33325L6.66659 8.30667V12.6667L9.33325 14V8.30667L14.6666 2Z" stroke="#64748B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        filter
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-section mt-4">
                        <div class="widget-section catogory-list mb-4">
                            <h6 class="title mb-4">Categories</h6>
                            <ul>
                                <li>
                                    <a href="#">Category Name</a>
                                </li>
                                <li>
                                    <a href="#">Category Name</a>
                                </li>
                                <li>
                                    <a href="#">Category Name</a>
                                </li>
                                <li>
                                    <a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- PRICE RANGE WIDGET -->
                        <?php require(__DIR__ . '/views/includes/priceRange.php'); ?>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
                        <div class="col-md-4">
                            <div class="product-card rounded-3 d-flex flex-column p-3 mb-3">
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
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>