<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<div class="container">
    <form action="/register" method="POST">

        <div class="form-title">
            <img src="./images/logo.png" class="logo" alt="">
            <h1 class="title">Registration</h1>
        </div>

        <div class="form-content">
            <!-- Personal Information -->
            <div>
                <div class="form-header">
                    <h1 class="subtitle">Personal Information</h1>
                </div>

                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name *">
                    <input type="text" name="middle_name" placeholder="Middle Name">
                    <input type="text" name="last_name" placeholder="Last Name *">
                </div>

                <div class="form-group">
                    <input type="date" name="birth_date" placeholder="Birth Date">
                    <input type="text" name="birth_place" placeholder="Place of Birth *">
                    <input type="text" name="sex" placeholder="Sex *">
                    <input type="text" name="contact_number" placeholder="Contact Number *">
                </div>

                <div class="form-group">
                    <input type="text" name="province" placeholder="Province *">
                    <input type="text" name="municipality" placeholder="City *">
                    <input type="text" name="barangay" placeholder="Barangay *">

                </div>

                <div class="form-group">
                    <input type="text" name="full_address" placeholder="House / Block / Lot No. / Street / Subdivision / Village *">
                </div>
            </div>


            <!-- Education Bacground -->
            <div class="mt">
                <div class="form-header">
                    <h1 class="subtitle">Education Background</h1>
                </div>

                <div class="form-group">
                    <input type="text" id="elem" name="elem_school" value="" placeholder="Elementary School">
                    <input type="text" id="elemAddress" name="elem_address" value="" placeholder="Address">
                    <input type="text" id="elemYear" name="elem_year" value="" placeholder="Year Graduated">

                </div>
                <div class="form-group">
                    <input type="text" id="secondary" name="second_school" value="" placeholder="Secondary School">
                    <input type="text" id="secondaryAddress" name="second_address" value="" placeholder="Address">
                    <input type="text" id="secondaryYear" name="second_year" value="" placeholder="Year Graduated">
                </div>

                <div class="form-group">
                    <input type="text" id="senior" name="senior_school" value="" placeholder="Senior High School">
                    <input type="text" id="seniorAddress" name="senior_address" value="" placeholder="Address">
                    <input type="text" id="seniorYear" name="senior_year" value="" placeholder="Year Graduated">

                </div>
            </div>

            <!-- Account Information -->
            <div class="mt">
                <div class="form-header">
                    <h1 class="subtitle">Account Information</h1>
                </div>

                <div class="form-group">
                    <input type="text" name="email" placeholder="Email *">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password *">
                    <input type="password" name="confpassword" placeholder="Confirm Password *">
                </div>
                <?php if (isset($validation)) : ?>
                    <p class="text-error">
                        <!--                        <svg style="width: 30px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"-->
                        <!--                             xmlns="http://www.w3.org/2000/svg">-->
                        <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--                                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>-->
                        <!--                        </svg>-->
                        <span><?= $validation->listErrors('list') ?></span>

                    </p>
                <?php endif; ?>

            </div>

        </div>

        <p class="para">

        </p>

        <div class="btn-container">
            <div class="hidden"></div>
            <div class="btn-group">
                <a href="login" class="btn">BACK</a>
                <button type="submit" class="btn">SUBMIT</button>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection() ?>