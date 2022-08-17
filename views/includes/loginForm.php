<div class="customModal modal fade" id="loginModal" aria-hidden="true" aria-labelledby="loginLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="loginLabel">Login</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body px-4 pt-0">
                <div class="customForm">
                    <label for="phone" class="form-label">Phone number *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+968 9988 7766">
                </div>
                <button class="custom-btn submitBtn primaryBackgroundColor mt-3 py-2" data-bs-target="#verificationModal" data-bs-toggle="modal">Login</button>
            </div>
            <div class="modal-footer justify-content-center pt-0 pb-3">
                <p class="footertxt">Don’t have account ? <a href="#" data-bs-target="#signUpModal" data-bs-toggle="modal">Create New</a></p>
            </div>
        </div>
    </div>
</div>
<div class="customModal modal fade" id="verificationModal" aria-hidden="true" aria-labelledby="verificationModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="verificationModalLabel">Verification</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body px-4 pt-0">
                <p class="verificationTxt">Enter 4 digit verification code sent to your number</p>
                <div class="customForm">
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control verifyField" id="number" name="number" placeholder="">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control verifyField" id="number" name="number" placeholder="">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control verifyField" id="number" name="number" placeholder="">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control verifyField" id="number" name="number" placeholder="">
                        </div>
                    </div>
                </div>
                <button class="custom-btn submitBtn primaryBackgroundColor mt-3 py-2" data-bs-dismiss="modal" aria-label="Close">confirm</button>
            </div>
            <div class="modal-footer justify-content-center pt-0 pb-3">
                <p class="footertxt"><a href="#">Resend code in 00:23</a></p>
            </div>
        </div>
    </div>
</div>

<div class="customModal modal fade" id="signUpModal" aria-hidden="true" aria-labelledby="signUpModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title" id="signUpModalLabel">Signup</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body px-4 pt-0">
                <div class="customForm">
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Phone number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+968 9988 7766">
                        </div>
                    </div>
                </div>
                <button class="custom-btn submitBtn primaryBackgroundColor mt-3 py-2" data-bs-dismiss="modal" aria-label="Close">confirm</button>
            </div>
            <div class="modal-footer justify-content-center pt-0 pb-3">
                <p class="footertxt">Already have an account?<a href="#" data-bs-target="#loginModal" data-bs-toggle="modal">Login</a></p>
            </div>
        </div>
    </div>
</div>



<!-- <a class="custom-btn primaryBackgroundColor btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">TEST BUTTON</a> -->