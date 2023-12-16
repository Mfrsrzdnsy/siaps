@extends('admin.admin_dashboard')

@section('content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Validation</h4>
                <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery
                        Validation Documentation </a>for a full list of instructions and other options.</p>
                <form id="signupForm" novalidate="novalidate">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" class="form-control" name="name" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" name="email" type="email">
                    </div>
                    <div class="mb-3">
                        <label for="ageSelect" class="form-label">Age</label>
                        <select class="form-select" name="age_select" id="ageSelect">
                            <option selected="" disabled="">Select your age</option>
                            <option>12-18</option>
                            <option>18-22</option>
                            <option>22-30</option>
                            <option>30-60</option>
                            <option>Above 60</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender_radio" id="gender1">
                                <label class="form-check-label" for="gender1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender_radio" id="gender2">
                                <label class="form-check-label" for="gender2">
                                    Female
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender_radio" id="gender3">
                                <label class="form-check-label" for="gender3">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Skills</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline1">
                                <label class="form-check-label" for="checkInline1">
                                    Angular
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline2">
                                <label class="form-check-label" for="checkInline2">
                                    ReactJs
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline3">
                                <label class="form-check-label" for="checkInline3">
                                    VueJs
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control" name="password" type="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <label class="form-check-label" for="termsCheck">
                                Agree to <a href="#"> terms and conditions </a>
                            </label>
                            <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
