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

    <section class="section-container bg-pattern-plus profile-page position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-3">
                    <h1 class="pageTitle text-center">Profile</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="profile-block position-relative p-4">
                        <form class="row g-3 needs-validation custom-orderform" novalidate action="">
                            <div class="avatar-block position-relative mb-5">
                                <img src="./assets/images/Avatar.png" alt="profile image" class="img">
                                <a href="#" class="cursor-pointer">
                                    <span class="circle rounded-5 position-absolute">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2_21814" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="26" height="26">
                                                <path d="M10.1767 25.7611L22.6769 13.2608L16.7395 7.32343L4.23925 19.8237C4.06716 19.996 3.94492 20.2117 3.88548 20.4479L2.5 27.5004L9.55117 26.1149C9.78791 26.0557 10.0045 25.9333 10.1767 25.7611ZM26.7123 9.22544C27.2167 8.72094 27.5 8.03679 27.5 7.32343C27.5 6.61006 27.2167 5.92591 26.7123 5.42141L24.579 3.28804C24.0745 2.78369 23.3903 2.50037 22.6769 2.50037C21.9636 2.50037 21.2794 2.78369 20.7749 3.28804L18.6416 5.42141L24.579 11.3588L26.7123 9.22544Z" fill="#006FFD" />
                                            </mask>
                                            <g mask="url(#mask0_2_21814)">
                                                <rect y="0.000366211" width="30" height="30" fill="white" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="firstName" class="form-label">First Name </label>
                                        <input type="text" class="form-control py-2" id="firstName" placeholder="Hesham" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="lastname" class="form-label">last Name </label>
                                        <input type="text" class="form-control py-2" id="lastname" placeholder="Mohammad Salah" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="city" class="form-label">City </label>
                                        <select class="form-select py-2" id="city">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="number" class="form-label">Age </label>
                                        <input type="number" class="form-control py-2" id="number" placeholder="25" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="gender" class="form-label">gender </label>
                                        <select class="form-select py-2" id="gender">
                                            <option value="">Choose...</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control py-2" id="email" placeholder="you@example.com" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="phone" class="form-label">Phone number </label>
                                        <input type="tel" class="form-control py-2" id="phone" name="phone" placeholder="+968 9988 7766" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fieldwrapper mb-3">
                                        <label for="userID" class="form-label">User ID </label>
                                        <input type="tel" class="form-control py-2" id="userID" name="userID" placeholder="96899887766" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button class="custom-btn primaryBackgroundColor text-white mt-3 px-4 rounded-2 w-100" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>