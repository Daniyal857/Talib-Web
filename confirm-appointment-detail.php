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
    <section class="section-container appointment-details background-pattern-two position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-5">
                    <h1 class="pageTitle text-center">Confirm Appointment Details</h1>
                    <a href="<?php echo $base_url; ?>/book-appointment.php" class="text-center">
                        <svg class="editIcon" width="54" height="48" viewBox="0 0 54 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.7438 7.80002L46.2 16.2563C46.5562 16.6125 46.5562 17.1938 46.2 17.55L25.725 38.025L17.025 38.9906C15.8625 39.1219 14.8781 38.1375 15.0094 36.975L15.975 28.275L36.45 7.80002C36.8062 7.44377 37.3875 7.44377 37.7438 7.80002ZM52.9312 5.65315L48.3562 1.07815C46.9312 -0.346851 44.6156 -0.346851 43.1813 1.07815L39.8625 4.3969C39.5063 4.75315 39.5063 5.3344 39.8625 5.69065L48.3188 14.1469C48.675 14.5031 49.2563 14.5031 49.6125 14.1469L52.9312 10.8281C54.3562 9.39377 54.3562 7.07815 52.9312 5.65315ZM36 32.4563V42H6V12H27.5437C27.8437 12 28.125 11.8781 28.3406 11.6719L32.0906 7.9219C32.8031 7.2094 32.2969 6.00002 31.2937 6.00002H4.5C2.01562 6.00002 0 8.01565 0 10.5V43.5C0 45.9844 2.01562 48 4.5 48H37.5C39.9844 48 42 45.9844 42 43.5V28.7063C42 27.7031 40.7906 27.2063 40.0781 27.9094L36.3281 31.6594C36.1219 31.875 36 32.1563 36 32.4563Z" fill="#12CBAE" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="appointment-details-wrapper p-5 rounded-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Patient Name</span>
                            <span class="desc">xyz patient</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Service Name</span>
                            <span class="desc">Hopital visit</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Service time</span>
                            <span class="desc">12:00 AM</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Appointment Date</span>
                            <span class="desc">13 Aug, 2022</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Appointment time</span>
                            <span class="desc">12:00 am</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">City</span>
                            <span class="desc">Seeb, Mabeela</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Clinic</span>
                            <span class="desc">talib Al Rashdi</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">doctor name</span>
                            <span class="desc">talib al rashdi</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">type</span>
                            <span class="desc">Dermatologist - 20 OMR</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">mobile number</span>
                            <span class="desc">+968 9988 7766</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Amount</span>
                            <span class="desc">30 OMR</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detials d-flex flex-column mb-4">
                            <span class="label mb-1">Payment method</span>
                            <span class="desc">Cash on delivery</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="custom-btn primaryBackgroundColor text-white px-4 w-100 mt-5">Confirm appointment</a>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>