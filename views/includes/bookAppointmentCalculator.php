<style>
    .appointmentForm {
        position: relative;
        background-color: white;
        border-radius: 8px;
        padding: 20px 30px;
        max-width: 380px;
    }

    .appointmentForm .heading .title {
        font-size: 18px;
        color: #252B42;
    }

    .appointmentForm .form-label {
        color: #252B42;
        font-size: 13px;
        line-height: 24px;
    }

    .appointmentForm .submitBtn {
        width: 100%;
        font-size: 14px;
        border-radius: 5px;
        text-transform: capitalize;
    }

    .appointmentForm .form-control,
    .appointmentForm .form-select {
        color: #737373;
        font-size: 13px;
        font-weight: 700;
        background-color: #F9F9F9;
        border: 1px solid #E6E6E6;
    }
</style>

<div id="appointmentForm" class="appointmentForm ms-auto">
    <div class="heading d-flex justify-content-center mb-2">
        <h6 class="title">Book Appointment</h6>
    </div>
    <form class="row g-3">
        <div class="col-12">
            <label for="name" class="form-label">Name *</label>
            <input type="text" class="form-control" id="inputName" placeholder="Full Name">
        </div>
        <div class="col-12">
            <label for="phone" class="form-label">Phone number *</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+968 9988 7766">
        </div>
        <div class="col-md-6">
            <label for="inputAge" class="form-label">Age *</label>
            <select id="inputAge" class="form-select">
                <option selected>Choose...</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputType" class="form-label">Type *</label>
            <select id="inputType" class="form-select">
                <option selected>Choose...</option>
                <option>Dermatologist</option>
                <option>Dermatologist</option>
                <option>Dermatologist</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputDate" class="form-label">Date *</label>
            <select id="inputDate" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputTime" class="form-label">Time *</label>
            <select id="inputTime" class="form-select">
                <option selected>Choose...</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="custom-btn submitBtn primaryBackgroundColor mt-1 py-2">Book Appointment</button>
        </div>
    </form>
</div>


<script>


</script>