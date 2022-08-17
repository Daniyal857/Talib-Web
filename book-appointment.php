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

    <!--APPOINTMENT FORM SECTION 
  ================================================== -->
    <section class="section-container py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="pageTitle text-center mb-5">Book Appointment</h1>
                </div>
            </div>

            <form class="row g-3 needs-validation custom-orderform" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">Name <span class="text-dark">*</span></label>
                        <input type="text" class="form-control py-2 mb-3" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            first name is required.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone number <span class="text-dark">*</span></label>
                        <input type="tel" class="form-control py-2 mb-3" id="phone" name="phone" placeholder="+968 9988 7766" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email <span class="text-dark">*</span></label>
                        <input type="email" class="form-control py-2 mb-3" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label">City <span class="text-dark">*</span></label>
                        <select class="form-select py-2 mb-3" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="number" class="form-label">Age <span class="text-dark">*</span></label>
                        <input type="number" class="form-control py-2 mb-3" id="number" placeholder="25" required>
                        <div class="invalid-feedback">
                            Please enter a valid age.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City <span class="text-dark">*</span></label>
                        <select class="form-select py-2 mb-3" id="city" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid city.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="type" class="form-label">City <span class="text-dark">*</span></label>
                        <select class="form-select py-2 mb-3" id="type" required>
                            <option value="">Choose...</option>
                            <option>Dermatologist - 20 OMR</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid type.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label">City <span class="text-dark">*</span></label>
                        <select class="form-select py-2 mb-3" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<?php require(__DIR__ . '/views/includes/footer.php'); ?>