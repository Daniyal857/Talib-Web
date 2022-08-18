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
    <section class="section-container appointment-records background-pattern-three position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center mb-3">
                    <h1 class="pageTitle text-center">Appointment</h1>
                    <a href="<?php echo $base_url; ?>/book-appointment.php" class="text-center primaryBackgroundColor custom-btn px-3 d-flex align-items-center">
                        <svg class="addIcon me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 3.33337V12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.33325 8H12.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Make Appointment
                    </a>
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
                <div class="table-responsive">
                    <table class="table table-hover" id="table" data-toggle="table" data-height="460" data-single-select="true" data-click-to-select="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-checkbox="true">appointment id</th>
                                <th data-field="name">patient name</th>
                                <th data-field="date" data-sortable="true">date</th>
                                <th data-field="status">status</th>
                                <th data-field="amount">amount</th>
                                <th data-field="method">payment method</th>
                            </tr>
                        </thead>
                        <div class="table-body">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check1">
                                            <label class="form-check-label ms-2 mt-1" for="check1">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-cod rounded-1">COD</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check2">
                                            <label class="form-check-label ms-2 mt-1" for="check2">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status pending">pending</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check3">
                                            <label class="form-check-label ms-2 mt-1" for="check3">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status rejected">rejected</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-cod rounded-1">COD</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check4">
                                            <label class="form-check-label ms-2 mt-1" for="check4">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check5">
                                            <label class="form-check-label ms-2 mt-1" for="check5">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check6">
                                            <label class="form-check-label ms-2 mt-1" for="check6">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status rejected">rejected</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-cod rounded-1">COD</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check7">
                                            <label class="form-check-label ms-2 mt-1" for="check7">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check8">
                                            <label class="form-check-label ms-2 mt-1" for="check8">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check9">
                                            <label class="form-check-label ms-2 mt-1" for="check9">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status rejected">rejected</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-cod rounded-1">COD</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check10">
                                            <label class="form-check-label ms-2 mt-1" for="check10">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check11">
                                            <label class="form-check-label ms-2 mt-1" for="check11">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check12">
                                            <label class="form-check-label ms-2 mt-1" for="check12">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status rejected">rejected</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-cod rounded-1">COD</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check13">
                                            <label class="form-check-label ms-2 mt-1" for="check13">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="check14">
                                            <label class="form-check-label ms-2 mt-1" for="check14">5155155</label>
                                        </div>
                                    </td>
                                    <td>Hesham Saleh</td>
                                    <td>13 Aug, 2022</td>
                                    <td>
                                        <span class="rounded-1 status approved">approved</span>
                                    </td>
                                    <td>20 OMR</td>
                                    <td><span class="btn-online rounded-1">online</span></td>
                                </tr>

                            </tbody>
                        </div>

                    </table>
                </div>
            </div>

        </div>
    </section>
</div>


<?php require(__DIR__ . '/views/includes/footer.php'); ?>