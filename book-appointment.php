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
    <section class="section-container background-pattern position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="pageTitle text-center mb-5">Book Appointment</h1>
                </div>
            </div>

            <form class="row g-3 needs-validation custom-orderform" novalidate action="<?php echo $base_url; ?>/confirm-appointment-detail.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="firstName" class="form-label">Name <span class="text-dark">*</span></label>
                            <input type="text" class="form-control py-2" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                First name is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="phone" class="form-label">Phone number <span class="text-dark">*</span></label>
                            <input type="tel" class="form-control py-2" id="phone" name="phone" placeholder="+968 9988 7766" required>
                            <div class="invalid-feedback">
                                Phone number is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="email" class="form-label">Email <span class="text-dark">*</span></label>
                            <input type="email" class="form-control py-2" id="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="city" class="form-label">City <span class="text-dark">*</span></label>
                            <select class="form-select py-2" id="city" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid city.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="number" class="form-label">Age <span class="text-dark">*</span></label>
                            <input type="number" class="form-control py-2" id="number" placeholder="25" required>
                            <div class="invalid-feedback">
                                Please enter a valid age.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="gender" class="form-label">gender <span class="text-dark">*</span></label>
                            <select class="form-select py-2" id="gender" required>
                                <option value="">Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid gender.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="type" class="form-label">Type <span class="text-dark">*</span></label>
                            <select class="form-select py-2" id="type" required>
                                <option value="">Choose...</option>
                                <option>Dermatologist - 20 OMR</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid type.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="country" class="form-label">Payment method <span class="text-dark">*</span></label>
                            <select class="form-select py-2" id="country" required>
                                <option value="">Choose...</option>
                                <option>Cash on delevery</option>
                                <option>Card</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="country" class="form-label">Select Date</label>
                            <input type="text" class="form-control py-2" name="daterange" value="08/22/2022 - 08/28/2022" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fieldwrapper mb-3">
                            <label for="time" class="form-label">Select Time</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="selected custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                                <div class="col-sm-3">
                                    <button class="custom-btn date-btn text-white px-3 mb-3 w-100">10:00 am</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fieldwrapper mb-3">
                            <label for="discription" class="form-label">Description</label>
                            <textarea class="form-control" id="discription" placeholder="Explain here...."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="custom-btn primaryBackgroundColor text-white mt-3 px-4 rounded-2 w-100" type="submit">Book Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>