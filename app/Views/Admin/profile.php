<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<?= $this->include('./components/navbar') ?>

<div class="container-fluid mb-5 ">
    <div class="col-12 col-lg-7 main-card">
        <section id="personal" class=" main-card_content">
            <?php if (!$noReq) : ?>
                <img class="mt-5" src="<?= base_url($profile) ?>" alt="" srcset="">
            <?php else : ?>
                <img class="mt-5" src="<?= base_url("uploads/default.png") ?>" alt="" srcset="">
            <?php endif; ?>

            <?php if ($user_status == "Accepted") : ?>
                <h3 style="color:green;" class="mt-3">Status : <?= $user_status ?></h3>
            <?php else : ?>
                <h3 style="color:orange;" class="mt-3">Status : <?= $user_status ?></h3>
            <?php endif; ?>
            <h3 class="main-card_title">Personal Information</h3>
            <form action="" method="post">
                <div class="form-row">
                    <div class="col-12 col-lg-4">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" value="<?= $first_name ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" placeholder="Middle Name" value="<?= $middle_name ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="<?= $last_name ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="birthDate">Birth Date</label>
                        <input type="date" class="form-control" id="birthDate" placeholder="Birth Date" value="<?= $birth_date ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="birthPlace">Birth Place</label>
                        <input type="text" class="form-control" id="birthPlace" placeholder="Birth Place" value="<?= $birth_place ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="sex">Sex</label>
                        <input type="text" class="form-control" id="sex" placeholder="Sex" value="<?= $sex ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" value="<?= $contact_number ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" id="province" placeholder="Province" value="<?= $province ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Municipality" value="<?= $municipality ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label for="barangay">Barangay</label>
                        <input type="text" class="form-control" id="barangay" placeholder="Barangay" value="<?= $barangay ?>" readonly>
                    </div>
                    <div class="col-12 col-lg-9">
                        <label for="completeAddress">Complete Address</label>
                        <input type="text" class="form-control" id="completeAddress" placeholder="Complete Address" value="<?= $full_address ?>" readonly>
                    </div>
                </div>
            </form>

        </section>
        <section id="education" class="main-card_content">
            <h3 class="main-card_title">Education Background</h3>
            <form>
                <div class="form-row">
                    <div class="col-12 col-lg-4">
                        <label for="elem">Elementary School</label>
                        <input type="text" class="form-control" id="elem" name="elem_school" value="<?= $elem_school ?>" placeholder="Elementary School" readonly>
                    </div>
                    <div class="col-12 col-lg-5">
                        <label for="elemAddress">Address</label>
                        <input type="text" class="form-control" id="elemAddress" name="elem_address" value="<?= $elem_address ?>" placeholder="Address" readonly>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label for="elemYear">Year Graduated</label>
                        <input type="text" class="form-control" id="elemYear" name="elem_year" value="<?= $elem_year ?>" placeholder="Year Graduated" readonly>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="secondary">Secondary School</label>
                        <input type="text" class="form-control" id="secondary" name="second_school" value="<?= $second_school ?>" placeholder="Secondary School" readonly>
                    </div>
                    <div class="col-12 col-lg-5">
                        <label for="secondaryAddress">Address</label>
                        <input type="text" class="form-control" id="secondaryAddress" name="second_address" value="<?= $second_address ?>" placeholder="Address" readonly>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label for="secondaryYear">Year Graduated</label>
                        <input type="text" class="form-control" id="secondaryYear" name="second_year" value="<?= $second_year ?>" placeholder="Year Graduated" readonly>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label for="senior">Senior Highschool</label>
                        <input type="text" class="form-control" id="senior" name="senior_school" value="<?= $senior_school ?>" placeholder="Senior High School" readonly>
                    </div>
                    <div class="col-12 col-lg-5">
                        <label for="seniorAddress">Address</label>
                        <input type="text" class="form-control" id="seniorAddress" name="senior_address" value="<?= $senior_address ?>" placeholder="Address" readonly>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label for="seniorYear">Year Graduated</label>
                        <input type="text" class="form-control" id="seniorYear" name="senior_year" value="<?= $senior_year ?>" placeholder="Year Graduated" readonly>
                    </div>
                </div>
            </form>
        </section>

        <section id="requirements" class="main-card_content">
            <h3 class="main-card_title">Requirements</h3>
            <form action="<?= base_url("user/profile") ?>" method="post" enctype="multipart/form-data">
                <div class=" form-row">
                    <div class="col-12 col-lg-9 mb-5">
                        <label for="elem">Profile Picture</label>
                    </div>
                    <div class="col-12 col-lg-3">
                        <?php if (!$noReq) : ?>
                            <div class="requirements_btn"><a target="_blank" href="/<?= $profile ?>"> View </a> </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-9 mb-5">
                        <label for="elem">Certified True Copy of Registration Form</label>
                    </div>

                    <div class="col-12 col-lg-3">
                        <?php if (!$noReq) : ?>
                            <div class="requirements_btn"><a target="_blank" href="/<?= $regForm ?>"> View </a> </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-9  mb-5">
                        <label for="elem">Certified True Copy of Grades</label>
                    </div>
                    <div class="col-12 col-lg-3">
                        <?php if (!$noReq) : ?>
                            <div class="requirements_btn"><a target="_blank" href="/<?= $grades ?>"> View </a> </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-12 col-lg-9  mb-5">
                        <label for="elem">Photocopy of ID with 3 Signatures</label>
                    </div>
                    <div class="col-12 col-lg-3">
                        <?php if (!$noReq) : ?>
                            <div class="requirements_btn"><a target="_blank" href="/<?= $signatures ?>"> View </a> </div>
                        <?php endif; ?>
                    </div>
                    <div class="requirements_btn" style="margin: auto;"><a href=" <?= base_url("admin/dashboard/acceptStatus/$user_id") ?>" style="color:white;">Accept</a></div>
                    <div class="requirements_btn" style="margin: auto;"><a href=" <?= base_url("admin/dashboard/delete/$user_id") ?>" style="color:white;">Delete</a></div>
                </div>
            </form>
        </section>
    </div>
</div>



<?= $this->endSection() ?>