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

    .appointmentForm .submitBtn {
        width: 100%;
        font-size: 14px;
        border-radius: 5px;
        text-transform: capitalize;
    }
</style>

<div id="appointmentForm" class="appointmentForm ms-auto">
    <div class="heading d-flex justify-content-center mb-2">
        <h6 class="title">Book Appointment</h6>
    </div>
    <form class="customForm row g-3 needs-validation" novalidate>
        <div class="col-12">
            <label for="name" class="form-label">Name <span class="text-dark">*</span></label>
            <input type="text" class="form-control" id="inputName" placeholder="Full Name" required>
            <div class="invalid-feedback">
                Name is required.
            </div>
        </div>
        <div class="col-12">
            <label for="phone" class="form-label">Phone number <span class="text-dark">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+968 9988 7766" required>
            <div class="invalid-feedback">
                Phone number is required.
            </div>
        </div>
        <div class="col-md-6">
            <label for="number" class="form-label">Age <span class="text-dark">*</span></label>
            <input type="number" class="form-control" id="number" placeholder="25" required>
            <div class="invalid-feedback">
                Age is required.
            </div>
        </div>
        <div class="col-md-6">
            <label for="type" class="form-label">Type <span class="text-dark">*</span></label>
            <select class="form-select" id="type" required>
                <option value="">Choose...</option>
                <option>Dermatologist - 20 OMR</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid type.
            </div>
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">Date <span class="text-dark">*</span></label>
            <select class="form-select" id="date" required>
                <option value="">Choose...</option>
                <option>...</option>
            </select>
            <div class="invalid-feedback">
                Date is required.
            </div>
        </div>
        <div class="col-md-6">
            <label for="time" class="form-label">Time <span class="text-dark">*</span></label>
            <select class="form-select" id="time" required>
                <option value="">Choose...</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
            </select>
            <div class="invalid-feedback">
                Time is required.
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="custom-btn submitBtn primaryBackgroundColor mt-1 py-2">Book Appointment</button>
        </div>
    </form>
</div>


<script>


</script>